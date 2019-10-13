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
        <h1>Collecte</h1>
        <p>
          Bonjour, <br  />
          Dans le cadre de la création d'une section d'aide à la recherche, <br />
          j'aurais besoin de votre aide pour savoir quels types de question vous avez lorsque vous arrivez sur mon site.<br /><br />
          Par conséquent merci de poser toutes les questions qui vous passent par la tête. <br />
          Je tacherais de trouver une réponse adéquate !.<br />
          Si, d'une manière ou d'une autre des données à caractère personnel se retrouveraient dans cette collecte, ces dernières seront supprimées.<br /><br />

        </p>
         <form action = "" method = "post">
            <label>Question :</label>
            <input type = "text" name = "question" id = "question" value="Votre question" style="width: 500px; height: 30px;"/>
            <br />
            <br />
            <input type = "submit" value ="Participer" name = "submit"/>
            <br />
         </form>

      <?php

         if(isset($_POST["submit"])){
            $comment = mysqli_real_escape_string($conn, $_POST["question"]);
            if ($conn->connect_error) {
               include("menu.php");
               die("<br />Une erreur est survenue, merci de ressayer plus tard<br />");
            }
            $sql = "INSERT INTO collecte_question(question) VALUES ('".$comment."')";

            if (mysqli_query($conn, $sql)) {
               echo "<br />Merci de votre aide !<br />";
            } else {
               echo "<br />Une erreur est survenue, merci de ressayer plus tard<br />";
            }
         }
         if ($result = $conn->query("SELECT * FROM collecte_question")){
           $row_cnt = $result->num_rows;
         }
         echo "<br />L'objectif est de 4000 questions, et il y en a actuellement : " . $row_cnt;
         $conn->close();
      ?>
    </div>
      <?php include("menu.php"); ?>
    </body>

    </html>
