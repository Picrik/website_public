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
  <?php include("titre.php"); ?>
        <div id="bloc_page">
        <h1>Un mini chat</h1>
        <p>
          Bonjour, <br  />
          Avec le double objectif de vous laissez vous exprimez et de m'entraîner :<br />
          Je vous présente un mini-chat.<br />
          Je vous rapelle que les données seront régulièrement lues par mes soin pour vérifier leur adéquation avec les conditions générales.<br />
          Et que toute donnée personnelle, raciste, sexiste, diffamante ou à l'encontre de la loi ou de l'éthique sera supprimée sans préavis.<br />
          Vous êtes responsable de l'utilisation de cet outil.<br />

        </p>
         <form action = "posttchat.php" method = "post">
            <label>Chat :</label><br />
            <?php

             if(isset($_GET["RGPD"])){
               ?>
               J'accepte les conditions d'utilisations <input type="checkbox" name = "RGPD" id = "RGPD" checked />
               <br />
               <?php
             }
             else{
               ?>
               J'accepte les conditions d'utilisations <input type="checkbox" name = "RGPD" id = "RGPD" />
               <br />
               <?php
             }
            ?>
            Pseudo <input type = "text" name = "pseudo" id = "pseudo" style="width: 200px;"/>
            <br />
            Message <input type = "text" name = "message" id = "message" style="width: 500px;"/>
            <br />
            <input type = "submit" value ="Chaton !" name = "submit"/>
            <br />
         </form>

         <?php
         $servername = "localhost";
         $username = "root";
         $database = "minitchat";
         $password = "";
         $conn = new mysqli($servername, $username, $password, $database, 3306);

         //  Create a new connection to the MySQL database using PDO
         $conn = new mysqli($servername, $username, $password, $database);

         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }

       // Si tout va bien, on peut continuer

       // On récupère tout le contenu de la table jeux_video
       $query = "SELECT * FROM messages ORDER BY id DESC limit 10";
       $result = mysqli_query($conn, $query);

       while($donnees = mysqli_fetch_assoc($result)) {
         ?>
         <p>
         <strong><?php echo $donnees['pseudo']; ?></strong> a dit : <?php echo $donnees['texte']; ?><br />
        </p>
       <?php
       }
       $conn->close();
       ?>

    </div>
      <?php include("menu.php"); ?>
    </body>

    </html>
