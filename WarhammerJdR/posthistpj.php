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
  <?php
  require 'dbconnect.php';

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     if(isset($_POST["submit"])){

      $message = mysqli_real_escape_string($con, $_POST["message"]);
      $idJoueur = mysqli_real_escape_string($con, $_POST["idJoueur"]);
        // Check connection
        if ($con->connect_error) {
          ?>
          <?php include("titreWH.php"); ?>
          <div id="bloc_page">
            <h1>Erreur</h1>
            <p>
              Une erreure est survenue.<br  />
              <a href="histoirepj.php">Revenir en arrière ?</a>
            </p>
          </div>
          <?php include("menu.php"); ?>
          </body>
          <?php
        }
        $sql = "INSERT INTO wh_pj_histoire(id_joueur, histoire) VALUES ('".$idJoueur."', '".$message."')";

        if (mysqli_query($con, $sql)) {
          header('Location:histoirepj.php?PJ=TRUE&idJoueur='.$idJoueur.'');
        } else {
           echo "<br />Une erreur est survenue, merci de ressayer plus tard.<br />";
        }
   }
     $con->close();
  ?>
</body>
</html>
