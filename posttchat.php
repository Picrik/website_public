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
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     if(isset($_POST["submit"])){

       if(isset($_POST["RGPD"])){

        $pseudo = mysqli_real_escape_string($con, $_POST["pseudo"]);
        $message = mysqli_real_escape_string($con, $_POST["message"]);
        // Check connection
        if ($con->connect_error) {
          ?>
          <?php include("titre.php"); ?>
          <div id="bloc_page">
            <h1>Erreur</h1>
            <p>
              Une erreure est survenue.<br  />
              <a href="tchat.php">Revenir en arrière ?</a>
            </p>
          </div>
          <?php include("menu.php"); ?>
          </body>
          <?php
        }
        $sql = "INSERT INTO messages(pseudo, texte) VALUES ('".$pseudo."', '".$message."')";

        if (mysqli_query($con, $sql)) {
          header('Location:tchat.php?RGPD=true');
        } else {
           echo "<br />Une erreur est survenue, merci de ressayer plus tard.<br />";
        }
     }

     else{
       ?> <script>
       alert("Vous n\'avez pas acceptez les conditions d\'utilisation");
       </script>

       <?php include("titre.php"); ?>
       <div id="bloc_page">
         <h1>Le RGPD</h1>
         <p>
           Vous avez oublié d'accepter les conditions d'utilisation.<br  />
           <a href="tchat.php">Revenir en arrière ?</a>
         </p>
       </div>
       <?php include("menu.php"); ?>
       </body>
       <?php
     }
   }
     $con->close();
  ?>
</body>
</html>
