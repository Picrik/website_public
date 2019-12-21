<?php

if(isset($_POST['submit'])){
    require 'dbconnect.php';

    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file,"r" );
    $c = 0 ; // define row count flag

    while (($csvData = fgetcsv($handle,1000,";")) !== false ){
        $id = $csvData[0];
        $nomGroupe = $csvData[1];
        $nomFamille = $csvData[2];
        $prenom = $csvData[3];
        $invitation = $csvData[4];
        $menu = $csvData[5];
        $present = $csvData[6];
        $invitePar = $csvData[7];
        $allergie = $csvData[8];

        $sql = "INSERT INTO invites(id,nomGroupe,nomFamille,prenom,invitation,menu,present,invitePar,allergie) VALUES ('$id','$nomGroupe','$nomFamille','$prenom','$invitation','$menu','$present','$invitePar','$allergie')";
        $query = mysqli_query ($con, $sql);
        $c = $c + 1 ;
    }
    if ($query){
        echo "Csv data uploaded Sucessfully.";
    }else{
        echo "Error Occured";
    }
}
?>
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
    <?php

    // Le mot de passe n'a pas été envoyé ou n'est pas bon
    if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "kangourou")
    { ?>
      <p>Veuillez entrer le mot de passe pour accéder à la suite :</p>
        <form action="importMariage.php" method="post">
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
    <h1>Import de la liste d'invités :</h1>
    <form role="form" action="importMariage.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
    </form>
    <br />
    <br />
    <br />
    <h1>Export de la liste d'invités :</h1>
  <?php
require 'dbconnect.php';
$exp_table = "invites"; // Table to export
if (!$con)
    die("ERROR: Could not connect. " . mysqli_connect_error());
// Create and open new csv file
$csv  = $exp_table . "-" . date('d-m-Y-his') . '.csv';
$file = fopen($csv, 'w');
// Get the table
if (!$mysqli_result = mysqli_query($con, "SELECT * FROM {$exp_table}"))
    printf("Error: %s\n", $con->error);
    // Get column names
    while ($column = mysqli_fetch_field($mysqli_result)) {
        $column_names[] = $column->name;
    }

    // Write column names in csv file
    if (!fputcsv($file, $column_names))
        die('Can\'t write column names in csv file');

    // Get table rows
    while ($row = mysqli_fetch_row($mysqli_result)) {
        // Write table rows in csv files
        if (!fputcsv($file, $row))
            die('Can\'t write rows in csv file');
    }
fclose($file);
echo "<p><a href=\"$csv\">Download</a></p>\n";
?>

<br />
<br />
<br />
<h1>Etat des lieux : </h1>

<?php
require 'dbconnect.php';

   if ($result = $con->query("SELECT nomGroupe FROM invites WHERE present = 'oui'")){
     $row_cnt = $result->num_rows;
   }
   if ($result = $con->query("SELECT nomGroupe FROM invites WHERE present = 'non'")){
     $row_cnt_abs = $result->num_rows;
   }
   if ($result = $con->query("SELECT nomGroupe FROM invites WHERE present = ''")){
     $row_cnt_nb = $result->num_rows;
   }
   echo "<br />Il y en a actuellement : " . $row_cnt . " personnes présentes";
   echo "<br />Il y en a actuellement : " . $row_cnt_abs . " personnes absentes";
   echo "<br />Il y en a actuellement : " . $row_cnt_nb . " personnes non pas répondu";
   $con->close();
}
?>

  </div>
  <?php include("menu.php"); ?>
</body>

</html>
