<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <title>Prières / WARHAMMER</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_WH.css" />
  <title>Picrik's Lab</title>
</head>

<body>
  <?php include("titreWH.php"); ?>
  <?php include("entete.php"); ?>
  <div id="bloc_page">
    <?php
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
    }
   ?>
   <h1>Tes commandements</h1>
   <ul>
   <?php
// On récupère les différents talents
$query = "SELECT * from wh_dieu_com where dieu IN (SELECT dieu FROM wh_pjcar WHERE id_joueur = '".$idJoueur."')";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

    <li><?php echo $donnees['commandement']; ?></li>
    <?php 
}
?>
</ul>
 <h1>Prières</h1>
 <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th>Portée</th>
     <th>Cible</th>
     <th>Durée</th>
     <th>Description</th>
   </tr>

   <?php

// On récupère les différents talents
$query = "SELECT * from wh_priere where id IN (SELECT id_priere FROM wh_priere_pj WHERE id_joueur = '".$idJoueur."') ORDER BY nom";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
     <td><?php echo $donnees['nom']; ?></td>
    <td><?php echo $donnees['Portee']; ?></td>
    <td><?php echo $donnees['Cible']; ?></td>
    <td><?php echo $donnees['Duree']; ?></td>
    <td><?php echo $donnees['deslongue']; ?></td>
    </tr>
    <?php 
}
?>
</table>
  </div>
  <div>
  <?php include("copyright.php"); ?>
  </div>
  <div>
      <?php include("menuWH.php"); ?>
  </div>
</body>
</html>