<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Picrik's Lab</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <title>Picrik's Lab</title>
</head>
<body>
  <?php
  require 'dbconnect.php';

  // Check connection
  if ($con->connect_error) {
      die("Connection failed");
  }

     if(isset($_POST["reponse"])){
         $nomFamille = mysqli_real_escape_string($con, $_POST["nomFamille"]);
         $prenom = mysqli_real_escape_string($con, $_POST["prenom"]);
         $presence = mysqli_real_escape_string($con, $_POST["presence"]);
         $menu = mysqli_real_escape_string($con, $_POST["menu"]);
         $allergie = mysqli_real_escape_string($con, $_POST["allergie"]);

         if($presence == "oui"){
           $sql = "UPDATE invites SET present = '".$presence."', menu = '".$menu."', allergie = '".$allergie."' WHERE nomFamille = '".$nomFamille."' AND prenom = '".$prenom."'";
         } else {
           $sql = "UPDATE invites SET present = '".$presence."', menu = 'absent', allergie = '".$allergie."' WHERE nomFamille = '".$nomFamille."' AND prenom = '".$prenom."'";
         }

         if ($con->query($sql) === TRUE) {
           header('Location:mariage.php?retour=TRUE&nomFamille='.$nomFamille.'&prenom='.$prenom.'');
         } else {
            echo "<br />Une erreur est survenue, merci de ressayer plus tard.<br />";
         }
     }
     $con->close();
  ?>
</body>
</html>
