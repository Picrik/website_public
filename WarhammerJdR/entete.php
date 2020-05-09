<div id="bloc_page">
    <?php
        if (isset($_POST["PJ"]) or (isset($_GET["PJ"]))){

            require 'dbconnect.php';
        
            // Check connection
            if ($con->connect_error) {
                die("Connection failed");
            }
        
            // test d'origine des variables
            if(isset($_POST["PJ"])){
        
    // Si tout va bien, on peut continuer
    // nettoyage des champs
    $idJoueur = mysqli_real_escape_string($con, $_POST["idJoueur"]);
    }else{
      $idJoueur = mysqli_real_escape_string($con, $_GET["idJoueur"]);
    }


    // création des variables utilisées
    $query2 = "SELECT * FROM wh_pjstat WHERE id_joueur = '".$idJoueur."'";
    $result2 = mysqli_query($con, $query2);
    while($donnees2 = mysqli_fetch_assoc($result2)) {
     $valeurFicheCC = ($donnees2['capaCaC'] + $donnees2['capaCaCAug']);
     $valeurFicheCT = ($donnees2['capaTir'] + $donnees2['capaTirAug']);
     $valeurFicheF = ($donnees2['forcep'] + $donnees2['forcepAug']);
     $valeurFicheE = ($donnees2['endu'] + $donnees2['enduAug']);
     $valeurFicheAgi = ($donnees2['agi'] + $donnees2['agiAug']);
     $valeurFicheIni = ($donnees2['initiative'] + $donnees2['initiativeAug']);
     $valeurFicheDex = ($donnees2['dexterite'] + $donnees2['dexteriteAug']);
     $valeurFicheInt = ($donnees2['intel'] + $donnees2['intelAug']);
     $valeurFicheFM = ($donnees2['forceMen'] + $donnees2['forceMenAug']);
     $valeurFicheSoc = ($donnees2['sociabilite'] + $donnees2['sociabiliteAug']);
     $valeurFicheBlessure = floor($valeurFicheF/10) + (2*floor($valeurFicheE/10)) + floor($valeurFicheFM/10);
     $valeurFicheBlessureSubie = $donnees2['BlessureSubie'];
    }
    $query3 = "SELECT * FROM wh_talent WHERE id_joueur = '".$idJoueur."'";
    $result3 = mysqli_query($con, $query3);
    while($donnees3 = mysqli_fetch_assoc($result3)) {
     if($donnees3['id_talent']==48){
      $valeurFicheBlessure = $valeurFicheBlessure + $donnees3['niveau'];
     }
    }
   ?>
   <p>
     <!-- création de tableaux pour afficher les résultats -->
     <h1>Votre Personnage</h1>
     <table align="center" cellpadding="5">
       <tr>
         <th>Nom du Joueur</th>
         <th>Nom du Personnage</th>
         <th>Race</th>
         <th>Classe</th>
         <th>Carrière</th>
         <th>Echelon</th>
         <th>Age</th>
         <th>Taille</th>
         <th>Cheveux</th>
         <th>Yeux</th>
       </tr>
       
       <?php
       // affichage des caractéristiques de base
     $query = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$idJoueur."'";
     $result = mysqli_query($con, $query);
   while($donnees = mysqli_fetch_assoc($result)) {
     ?>

     <tr>
       <td><?php echo $donnees['nomJoueur']; ?></td>
       <td><?php echo $donnees['nomPerso']; ?></td>
       <td><?php echo $donnees['race']; ?></td>
       <td><?php echo $donnees['classe']; ?></td>
       <td><?php echo $donnees['carriere']; ?></td>
       <td><?php echo $donnees['echelon']; ?></td>
       <td><?php echo $donnees['age']; ?></td>
       <td><?php echo $donnees['taille']; ?></td>
       <td><?php echo $donnees['cheveux']; ?></td>
       <td><?php echo $donnees['yeux']; ?></td>
 </table>
 <?php
   }
    }else{
        ?>
        <h1>Votre Personnage</h1>
</p>
 <form action = "connexion.php" method = "post">
    Nom de Joueur
    <br /><input type = "text" name = "nomJoueur" id = "nomJoueur" style="width: 200px;"/>
    <br />
    Nom du Personnage 
    <br /><input type = "text" name = "nomPerso" id = "nomPerso" style="width: 200px;"/>
    <br />
    <input type = "submit" value ="Rechercher !" name = "PJ"/>
    <br />
 </form>

 <?php
    }
   ?>
   </div>