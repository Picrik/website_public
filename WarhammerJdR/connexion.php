<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <title>Picrik's Lab / WARHAMMER</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_WH.css" />
  <title>Picrik's Lab</title>
</head>

<body>
  <?php include("titreWH.php"); ?>
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
    $nomJoueur = mysqli_real_escape_string($con, $_POST["nomJoueur"]);
    $nomPerso = mysqli_real_escape_string($con, $_POST["nomPerso"]);
    }else{
      $nomJoueur = mysqli_real_escape_string($con, $_GET["nomJoueur"]);
      $nomPerso = mysqli_real_escape_string($con, $_GET["idJoueur"]);

    }

// On récupère tout le contenu de la table invites
$query = "SELECT id_joueur FROM wh_pjcar WHERE nomJoueur = '".$nomJoueur."' AND nomPerso = '".$nomPerso."'";
$result = mysqli_query($con, $query);
while($donnees = mysqli_fetch_assoc($result)) {
$idJoueur = $donnees['id_joueur'];
header('Location:joueur.php?PJ=TRUE&idJoueur='.$idJoueur.'');
}
$con->close();
}else{
  ?>
  <div id="bloc_page">
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
  </div>
     <?php
       }
   ?>

  <div>
  <?php include("copyright.php"); ?>
  </div>
  <div>
      <?php include("menuWH.php"); ?>
  </div>
</body>
</html>