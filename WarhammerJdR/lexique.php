<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <title>Lexique / WARHAMMER</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_WH.css" />
  <title>Picrik's Lab</title>
</head>

<body>
  <?php include("titreWH.php"); ?>
  <div id="bloc_page">
    <h1>Lexique</h1>
    <h2>Talents</h2>
    <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th>Description</th>
   </tr>
   <?php
    require 'dbconnect.php';
    // Check connection
    if ($con->connect_error) {
      die("Connection failed");
    }
    // On récupère les différents talents du lexique
    $query = "SELECT * from wh_lexique ORDER BY nom";
    $result = mysqli_query($con, $query); 
    while($donnees = mysqli_fetch_assoc($result)) {
      ?>  
       <tr>
         <td><?php echo $donnees['nom']; ?></td>
        <td><?php echo $donnees['deslongue']; ?></td>
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