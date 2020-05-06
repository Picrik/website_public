<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <title>Tests / WARHAMMER</title>
  <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
  <link rel="stylesheet" href="style_WH.css" />
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
   ?>
 <h1>Tests</h1>
 <div id="division">
 <div id="gauche">
 <h2>Test de Caractéristique</h2>
 <?php echo '<form action = "tests.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "carac" id = "carac">
                <option value="capaCaC">CC</option>
                <option value="capaTir">CT</option>
                <option value="forcep">Force</option>
                <option value="endu">Endurance</option>
                <option value="agi">Agilité</option>
                <option value="initiative">Initiative</option>
                <option value="dexterite">Dextérité</option>
                <option value="intel">Intelligence</option>
                <option value="forceMen">Force Mentale</option>
                <option value="sociabilite">Sociabilité</option>
              </select>
<input type = "submit" value ="Random !" name = "CaracRandom"/>
<br />
Votre jet de dés :
<br /> <input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "testCarac"/>

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
</form>
<?php
if (isset($_POST["testCarac"]) or isset($_POST["CaracRandom"])){
?>
<br /> Votre compétence
<?php
    // test pour CC
    if ($_POST['carac']=='capaCaC'){
      $valeurFiche = $valeurFicheCC;
      $competence = "CC";
      ?>CC est de <?php

      // test pour CT
      }elseif ($_POST['carac']=='capaTir'){
      $valeurFiche =  $valeurFicheCT;
      $competence = "CT";
      ?>CT est de <?php

      // test pour la force
      }elseif ($_POST['carac']=='forcep'){
      $valeurFiche =  $valeurFicheF;
      $competence = "Force";
      ?>Force est de <?php

      // test pour l'endurance
      }elseif ($_POST['carac']=='endu'){
      $valeurFiche =  $valeurFicheE;
      $competence = "Endurance";
      ?>Endurance est de <?php

      // test pour agilité
      }elseif ($_POST['carac']=='agi'){
      $valeurFiche =  $valeurFicheAgi;
      $competence = "Agilité";
      ?>Agilité est de <?php

      // test pour l'initiative
      }elseif ($_POST['carac']=='initiative'){
      $valeurFiche =  $valeurFicheIni;
      $competence = "Initiative";
      ?>Initiative est de <?php

      // test pour la Dextérité
      }elseif ($_POST['carac']=='dexterite'){
      $valeurFiche =  $valeurFicheDex;
      $competence = "Dexterité";
      ?>Dextérité est de <?php

      // test pour l'intelligence
      }elseif ($_POST['carac']=='intel'){
      $valeurFiche =  $valeurFicheInt;
      $competence = "Intelligence";
      ?>Intelligence est de <?php

      // test de force mentale
      }elseif ($_POST['carac']=='forceMen'){
      $valeurFiche =  $valeurFicheFM;
      $competence = "Force Mentale";
      ?>Force Mentale est de <?php

      // Test de sociabilité
      }elseif ($_POST['carac']=='sociabilite'){
      $valeurFiche =  $valeurFicheSoc;
      $competence = "Sociabilité";
      ?>Sociabilité est de <?php

    }
    if(isset($_POST["testCarac"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $valeurFiche;
    ?><br />Votre score au dés est de <strong><?php
    echo $valeurJoueur;
    ?><br /></strong>Le résultat est <?php
    if($valeurJoueur>=95){
      echo "une <strong>Maladresse</strong>";
      $resultatT = "Maladresse";
    }elseif($valeurJoueur<=5){
      echo "un <strong>Critique</strong>";
      $resultatT = "Critique";
    }elseif($valeurJoueur<=$valeurFiche){
      echo "une <strong>Réussite</strong>";
      $resultatT = "Réussite";
    }else{
      echo "un <strong>Echec</strong>";
      $resultatT = "Echec";
    }           
    ?><br />Le degré de réussite (DR) : <?php
    $dizValeurFiche = floor($valeurFiche/10);
    $dizValeurJoueur = floor($valeurJoueur/10);
    echo $dizValeurFiche-$dizValeurJoueur;
    $degreReussite = $dizValeurFiche-$dizValeurJoueur;

    $sql = "INSERT INTO wh_test(id_joueur, competence, valeurFiche, valeurDes, resultat, degreReussite, automatique) 
    VALUES ('".$idJoueur."', '".$competence."', '".$valeurFiche."', '".$valeurJoueur."', '".$resultatT."', '".$degreReussite."', '".$Auto."')";
    mysqli_query($con, $sql);
}
?>
<br />
</div>
<div id="centre">
 <h2>Test de Compétence de base</h2>
 <?php echo '<form action = "tests.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "compe" id = "compe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
?>
              </select>

<input type = "submit" value ="Random !" name = "CompeRandom"/>
<br />
Votre jet de dés : 
<br /><input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "testcompe"/>

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
</form>
<?php
if (isset($_POST["testcompe"]) or isset($_POST["CompeRandom"])){
  ?>
<br />Votre compétence
<?php
$compe = $_POST['compe'];
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' and competence = '".$compe."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
    // ton recherche quelle est la valeur associée
    if ($donnees['caracteristique']=='CC'){
      $valeurFiche = $valeurFicheCC;


    }elseif ($donnees['caracteristique']=='CT'){
      $valeurFiche =  $valeurFicheCT;


      }elseif ($donnees['caracteristique']=='F'){
      $valeurFiche =  $valeurFicheF;

      }elseif ($donnees['caracteristique']=='E'){
      $valeurFiche =  $valeurFicheE;

      }elseif ($donnees['caracteristique']=='Ag'){
      $valeurFiche =  $valeurFicheAgi;

      }elseif ($donnees['caracteristique']=='I'){
      $valeurFiche =  $valeurFicheIni;

      }elseif ($donnees['caracteristique']=='Dex'){
      $valeurFiche =  $valeurFicheDex;

      }elseif ($donnees['caracteristique']=='Int'){
      $valeurFiche =  $valeurFicheInt;

      }elseif ($donnees['caracteristique']=='FM'){
      $valeurFiche =  $valeurFicheFM;

      }elseif ($donnees['caracteristique']=='Soc'){
      $valeurFiche =  $valeurFicheSoc;

    }
  }
    
    $valeurCompe = $valeurFiche + $augmentationCompe;
    if(isset($_POST["testcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $compe; ?> est de <?php
    echo $valeurCompe;
    ?><br />Votre score au dés est de <strong><?php
    echo $valeurJoueur;
    ?><br /></strong>Le résultat est <?php
    if($valeurJoueur>=95){
      echo "une <strong>Maladresse</strong>";
      $resultatT = "Maladresse";
    }elseif($valeurJoueur<=5){
      echo "un <strong>Critique</strong>";
      $resultatT = "Critique";
    }elseif($valeurJoueur<=$valeurCompe){
      echo "une <strong>Réussite</strong>";
      $resultatT = "Réussite";
    }else{
      echo "un <strong>Echec</strong>";
      $resultatT = "Echec";
    }      
    ?><br />Le degré de réussite (DR) : <?php
    $dizvaleurCompe = floor($valeurCompe/10);
    $dizValeurJoueur = floor($valeurJoueur/10);
    echo $dizvaleurCompe-$dizValeurJoueur;
    $degreReussite = $dizvaleurCompe-$dizValeurJoueur;

    $sql = "INSERT INTO wh_test(id_joueur, competence, valeurFiche, valeurDes, resultat, degreReussite, automatique) 
    VALUES ('".$idJoueur."', '".$compe."', '".$valeurCompe."', '".$valeurJoueur."', '".$resultatT."', '".$degreReussite."', '".$Auto."')";
    mysqli_query($con, $sql);
}
?>
</div>
<div id="droite">
<h2>Test de Compétence avancée</h2>
 <?php echo '<form action = "tests.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "compespe" id = "compespe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
?>
              </select>

<input type = "submit" value ="Random !" name = "compespeRandom"/>
<br />
Votre jet de dés : 
<br /><input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "testcompespe"/>

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
</form>
<?php
if (isset($_POST["testcompespe"]) or isset($_POST["compespeRandom"])){
  ?>
<br />Votre compétence
<?php
$compespe = $_POST['compespe'];
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' and competence = '".$compespe."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
    // ton recherche quelle est la valeur associée
    if ($donnees['caracteristique']=='CC'){
      $valeurFiche = $valeurFicheCC;

    }elseif ($donnees['caracteristique']=='CT'){
      $valeurFiche =  $valeurFicheCT;

      }elseif ($donnees['caracteristique']=='F'){
      $valeurFiche =  $valeurFicheF;

      }elseif ($donnees['caracteristique']=='E'){
      $valeurFiche =  $valeurFicheE;

      }elseif ($donnees['caracteristique']=='Ag'){
      $valeurFiche =  $valeurFicheAgi;

      }elseif ($donnees['caracteristique']=='I'){
      $valeurFiche =  $valeurFicheIni;

      }elseif ($donnees['caracteristique']=='Dex'){
      $valeurFiche =  $valeurFicheDex;

      }elseif ($donnees['caracteristique']=='Int'){
      $valeurFiche =  $valeurFicheInt;

      }elseif ($donnees['caracteristique']=='FM'){
      $valeurFiche =  $valeurFicheFM;

      }elseif ($donnees['caracteristique']=='Soc'){
      $valeurFiche =  $valeurFicheSoc;

    }
  }
    
    $valeurcompespe = $valeurFiche + $augmentationCompe;
    if(isset($_POST["testcompespe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $compespe; ?> est de <?php
    echo $valeurcompespe;
    ?><br />Votre score au dés est de <strong><?php
    echo $valeurJoueur;
    ?><br /></strong>Le résultat est <?php
    if($valeurJoueur>=95){
      echo "une <strong>Maladresse</strong>";
      $resultatT = "Maladresse";
    }elseif($valeurJoueur<=5){
      echo "un <strong>Critique</strong>";
      $resultatT = "Critique";
    }elseif($valeurJoueur<=$valeurcompespe){
      echo "une <strong>Réussite</strong>";
      $resultatT = "Réussite";
    }else{
      echo "Echec";
      $resultatT = "Echec";
    }      
    ?><br />Le degré de réussite (DR) : <?php
    $dizvaleurcompespe = floor($valeurcompespe/10);
    $dizValeurJoueur = floor($valeurJoueur/10);
    echo $dizvaleurcompespe-$dizValeurJoueur;
    $degreReussite = $dizvaleurcompespe-$dizValeurJoueur;

    $sql = "INSERT INTO wh_test(id_joueur, competence, valeurFiche, valeurDes, resultat, degreReussite, automatique) 
    VALUES ('".$idJoueur."', '".$compespe."', '".$valeurcompespe."', '".$valeurJoueur."', '".$resultatT."', '".$degreReussite."', '".$Auto."')";
    mysqli_query($con, $sql);
}
?>
</div>
</div>
<h1>Vos anciens tests</h1>
<table align="center" cellpadding="5">
   <tr>
     <th>Test</th>
     <th>Valeur Fiche</th>
     <th>Valeur dés</th>
     <th>Résulat</th>
     <th>DR</th>
     <th>Automatique</th>
   </tr>
<?php

       $query = "SELECT * FROM wh_test WHERE id_joueur = '".$idJoueur."' ORDER BY id DESC limit 10";
       $result = mysqli_query($con, $query);
       
       while($donnees = mysqli_fetch_assoc($result)) {
        ?>
<tr>
   <td><?php echo $donnees['competence']; ?></td>
   <td><?php echo $donnees['valeurFiche']; ?></td>
   <td><?php echo $donnees['valeurDes']; ?></td>
   <td><?php echo $donnees['resultat']; ?></td>
   <td><?php echo $donnees['degreReussite']; ?></td>
   <td><?php echo $donnees['automatique']; ?></td>
</tr>
      <?php
      }
   $con->close();
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