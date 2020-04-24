<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Picrik's Lab</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_WH.css" />
  <title>Picrik's Lab</title>
</head>

<body>
  <?php include("titreWH.php"); ?>
  <div id="bloc_page">
    <?php

    // Le mot de passe n'a pas été envoyé ou n'est pas bon
    if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "kangourou")
    { ?>
      <p>Veuillez entrer le mot de passe pour accéder à la suite :</p>
        <form action="admin.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <?php
    }
    // Le mot de passe a été envoyé et il est bon
    else
    {
        ?>
        <h1>Créer un personnage joueur :</h1>
        <form role="form" action="admin.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
        </form>
        <br />
        <br />
        <br />
        <?php
    }
        ?>
  </div>
  <div>
  <?php include("copyright.php"); ?>
  </div>
  <div>
      <?php include("menuWH.php"); ?>
  </div>
</body>

</html>
