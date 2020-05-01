<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <title>Picrik's Lab / WARHAMMER</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_WH.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
	        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
	        crossorigin="anonymous"></script>
	<script src="src/character-counter.js"></script>
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
 <table align="center" cellpadding="5">
   <tr>
     <th><h1>Histoire</h1></th>
   </tr>

   <?php

// On récupère les différents talents
$query = "SELECT * from wh_pj_histoire where id_joueur = '".$idJoueur."' ORDER BY id";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
     <td><?php echo $donnees['histoire']; ?></td>
    </tr>
    <?php 
}
?>
</table>
<h1>Nouvelle entrée</h1>
<form action = "posthistpj.php" method = "post">
<!-- rajout des infos du PJ -->
<?php
if(isset($_POST['idJoueur'])){
        ?>
        <hidden><input type = "hidden" name = "idJoueur" id = "idJoueur" value=<?php echo $_POST['idJoueur'];?> /></hidden>
        <?php

        }else{
            ?>
            <hidden><input type = "hidden" name = "idJoueur" id = "idJoueur" value=<?php echo $_GET['idJoueur'];?> /></hidden>
            <?php
        }
?>

  <!-- création du formulaire -->

  <textarea name = "message" id="textareaChars" maxlength="250" rows="5" cols="70"></textarea>
  <script type="text/javascript">
  var maxLength = 250;
$('textarea').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length);
});
document.getElementById("chars").innerHTML = length;
  </script>
  <br /><span id="chars">250</span> caractères restants
  <br/>
  <input type = "submit" value ="Ajouter une entrée à mon journal" name = "submit"/>
  
</form>
  </div>
  <div>
  <?php include("copyright.php"); ?>
  </div>
  <div>
      <?php include("menuWH.php"); ?>
  </div>
</body>
</html>