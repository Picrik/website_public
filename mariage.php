<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Picrik's Lab</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_mariage.css" />
  <title>Picrik's Lab</title>
</head>

<body>
  <?php include("titre.php"); ?>
  <div id="bloc_page">
    <h1>Les invitations au mariage de Noémie et Jérémy</h1>
    <p>
      Bonjour, <br  />
      Si vous avez reçu le lien pour cette page c'est que vous êtes attendu au: <br />
      Mariage de Noémie et Jérémy le 27 juin 2020.<br /><br />
      Maintenant il vous faut vous chercher dans notre base de données et confirmer votre présence !<br />
      Pour cela rien de plus simple, il vous suffit d'entrer votre Nom et Prénom.<br />
      Sans accents et premières lettres en majuscule. <br  />
      Exemple : Schneider Jeremy.<br /><br />
      Si vous avez des allergies merci de nous l'indiquer et nous reviendrons vers vous.<br />
    </p>
     <form action = "mariage.php" method = "post">
        <label>Vos informations :</label><br />
        Nom de Famille <input type = "text" name = "nomFamille" id = "nomFamille" style="width: 200px;"/>
        <br />
        Prenom <input type = "text" name = "prenom" id = "prenom" style="width: 200px;"/>
        <br />
        <input type = "submit" value ="Rechercher !" name = "submit"/>
        <br />
     </form>

     <?php
     require 'dbconnect.php';

     // Check connection
     if ($con->connect_error) {
         die("Connection failed");
     }

   // Si tout va bien, on peut continuer

   if (isset($_POST["submit"])){

     // nettoyage des champs
     $nomFamille = mysqli_real_escape_string($con, $_POST["nomFamille"]);
     $prenom = mysqli_real_escape_string($con, $_POST["prenom"]);

   // On récupère tout le contenu de la table invites
   $query = "SELECT * FROM invites WHERE nomGroupe = (SELECT nomGroupe FROM invites WHERE nomFamille = '".$nomFamille."' AND prenom = '".$prenom."')";
   $result = mysqli_query($con, $query);

   ?>
   <p>
     <!-- création du tableau pour afficher les résultats -->
     <table align="center" cellpadding="5">
       <tr>
         <th>Nom</th>
         <th>Prenom</th>
         <th>Présence</th>
         <th>Menu</th>
         <th>Allergie</th>
       </tr>

       <?php
   while($donnees = mysqli_fetch_assoc($result)) {
     ?>

     <tr>
       <td><?php echo $donnees['nomFamille']; ?></td>
       <td><?php echo $donnees['prenom']; ?></td>
       <td><?php echo $donnees['present']; ?></td>

       <?php
       if ($donnees['invitation'] == "Vin"){
         ?>
         <td>Vin d'honneur</td>
         <?php
       }
       else{
         ?>
         <td><?php echo $donnees['menu']; ?></td>
         <?php
       }
       ?>

       <td><?php echo $donnees['allergie']; ?></td>
     </tr>

       <?php
       }
   ?>
 </table>

 <?php
 $query = "SELECT * FROM invites WHERE nomGroupe = (SELECT nomGroupe FROM invites WHERE nomFamille = '".$nomFamille."' AND prenom = '".$prenom."')";
 $result = mysqli_query($con, $query);
 while($donnees = mysqli_fetch_assoc($result)) {

   ?>
   <p>
   <br /><strong><?php echo $donnees['nomFamille']; ?></strong> <?php echo $donnees['prenom']; ?>
   <form action = "postmariage.php" method = "post">
     <label>Confirmez nous votre présence :</label>
     <input type="radio" id="presence" name="presence" value="oui">
                                <label for="oui">Je viens</label>
                  <input type="radio" id="non" name="presence" value="non">
                               <label for="non">Je ne viens pas</label>
     <?php
     if ($donnees['invitation'] == "Vin") {
       ?>
       <br /> Allergie :
       <select name = "allergie" id = "allergie">
         <option value="non">non</option>
         <option value="oui">oui</option>
       </select>
       <hidden><input type = "hidden" name = "menu" id = "nomFamille" value="Vin d'honneur" /></hidden>
       <hidden><input type = "hidden" name = "nomFamille" id = "nomFamille" value=<?php echo $donnees['nomFamille']; ?> /></hidden>
       <hidden><input type = "hidden" name = "prenom" id = "prenom" value=<?php echo $donnees['prenom']; ?> /></hidden>
       <br /><input type = "submit" value ="Je confirme" name = "reponse"/>
     </form>
     </p>
       <?php
     }else{
       ?>
              <br /> Votre Menu :
       <select name = "menu" id = "menu">
                <option value="normal">normal</option>
                <option value="Vin">Vin d'honneur</option>
                <option value="vegetarien">végétarien</option>
                <option value="enfant">enfant</option>
              </select>
              , allergie :
       <select name = "allergie" id = "allergie">
                <option value="non">non</option>
                <option value="oui">oui</option>
              </select>
       <hidden><input type = "hidden" name = "nomFamille" id = "nomFamille" value=<?php echo $donnees['nomFamille']; ?> /></hidden>
       <hidden><input type = "hidden" name = "prenom" id = "prenom" value=<?php echo $donnees['prenom']; ?> /></hidden>
       <br /><input type = "submit" value ="Je confirme" name = "reponse"/>
    </form>
    </p>
     <?php
     }
   }
}


 if (isset($_GET["retour"])){

   $nomFamille = mysqli_real_escape_string($con, $_GET["nomFamille"]);
   $prenom = mysqli_real_escape_string($con, $_GET["prenom"]);

   $query = "SELECT * FROM invites WHERE nomGroupe = (SELECT nomGroupe FROM invites WHERE nomFamille = '".$nomFamille."' AND prenom = '".$prenom."')";
   $result = mysqli_query($con, $query);

   ?>
   <p>
     <table align="center" cellpadding="5">
       <tr>
         <th>Nom</th>
         <th>Prenom</th>
         <th>Présence</th>
         <th>Menu</th>
         <th>Allergie</th>
       </tr>

       <?php
   while($donnees = mysqli_fetch_assoc($result)) {
     ?>

     <tr>
       <td><?php echo $donnees['nomFamille']; ?></td>
       <td><?php echo $donnees['prenom']; ?></td>
       <td><?php echo $donnees['present']; ?></td>
       <?php
       if ($donnees['invitation'] == "Vin"){
       ?>
       <td>Vin d'honneur</td>
       <?php
     }
       else{
         ?>
       <td><?php echo $donnees['menu']; ?></td>
       <?php
       }
       ?>
       <td><?php echo $donnees['allergie']; ?></td>
     </tr>

       <?php
       }
   ?>
 </table>

 <?php
 $query = "SELECT * FROM invites WHERE nomGroupe = (SELECT nomGroupe FROM invites WHERE nomFamille = '".$nomFamille."' AND prenom = '".$prenom."')";
 $result = mysqli_query($con, $query);
 while($donnees = mysqli_fetch_assoc($result)) {

   ?>
   <p>
   <br /><strong><?php echo $donnees['nomFamille']; ?></strong> <?php echo $donnees['prenom']; ?>
   <form action = "postmariage.php" method = "post">
     <label>Confirmez nous votre présence :</label>
     <input type="radio" id="presence" name="presence" value="oui">
                                <label for="oui">Je viens</label>
                  <input type="radio" id="non" name="presence" value="non">
                               <label for="non">Je ne viens pas</label>
     <?php
     if ($donnees['invitation'] == "Vin") {
       ?>
       <br />Allergie :
       <select name = "allergie" id = "allergie">
         <option value="non">non</option>
         <option value="oui">oui</option>
       </select>
       <hidden><input type = "hidden" name = "menu" id = "nomFamille" value="Vin d'honneur" /></hidden>
       <hidden><input type = "hidden" name = "nomFamille" id = "nomFamille" value=<?php echo $donnees['nomFamille']; ?> /></hidden>
       <hidden><input type = "hidden" name = "prenom" id = "prenom" value=<?php echo $donnees['prenom']; ?> /></hidden>
       <br /><input type = "submit" value ="Je confirme" name = "reponse"/>
     </form>
     </p>
       <?php
     }else{
       ?>
              <br />Votre Menu :
       <select name = "menu" id = "menu">
                <option value="normal">normal</option>
                <option value="Vin">Vin d'honneur</option>
                <option value="vegetarien">végétarien</option>
                <option value="enfant">enfant</option>
              </select>
              , allergie :
       <select name = "allergie" id = "allergie">
                <option value="non">non</option>
                <option value="oui">oui</option>
              </select>
       <hidden><input type = "hidden" name = "nomFamille" id = "nomFamille" value=<?php echo $donnees['nomFamille']; ?> /></hidden>
       <hidden><input type = "hidden" name = "prenom" id = "prenom" value=<?php echo $donnees['prenom']; ?> /></hidden>
       <br /><input type = "submit" value ="Je confirme" name = "reponse"/>
    </form>
    </p>
     <?php
     }
   }
}
   $con->close();
   ?>
 </p>
  </div>
  <div>
      <?php include("menu.php"); ?>
  </div>
</body>
</html>
