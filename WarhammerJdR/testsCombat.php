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
 <h1>Test de Corps à corps</h1>
 <h2>Attaquant</h2>
 <p>
 <?php echo '<form action = "testCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "compe" id = "compe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' and caracteristique = 'CC'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
// On récupère les compétences avancées
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' and caracteristique = 'Int'";
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
Votre jet de dés : <input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
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
<br />Votre résultat <br />
<?php
$compe = $_POST['compe'];
$valeurFiche = $valeurFicheCC;












// revoir sélection compétence












$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {

    // ton recherche quelle est la valeur associée
    if ($donnees['caracteristique']=='CC'){
      $valeurFiche = $valeurFicheCC;

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
    
    $valeurCompe = $valeurFiche + $donnees['augmentation'];
    if(isset($_POST["testcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(0,99);
      $Auto = "oui";
    }
    
    echo $compe; ?> : <?php
    echo $valeurCompe;
    ?><br />Les dés : <?php
    echo $valeurJoueur;
    ?><br />Le résultat : <?php
    if($valeurJoueur>=95){
      echo "Maladresse";
      $resultatT = "Maladresse";
    }elseif($valeurJoueur<=5){
      echo "Critique";
      $resultatT = "Critique";
    }elseif($valeurJoueur<=$valeurFiche){
      echo "Réussite";
      $resultatT = "Réussite";
    }else{
      echo "Echec";
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
 <h1>Test de Capacité de Tir</h1>
 <p>
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
Votre jet de dés : <input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
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
<br />Votre résultat <br />
<?php
$compe = $_POST['compe'];
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {

    // ton recherche quelle est la valeur associée
    if ($donnees['caracteristique']=='CC'){
      $valeurFiche = $valeurFicheCC;

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
    
    $valeurCompe = $valeurFiche + $donnees['augmentation'];
    if(isset($_POST["testcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(0,99);
      $Auto = "oui";
    }
    
    echo $compe; ?> : <?php
    echo $valeurCompe;
    ?><br />Les dés : <?php
    echo $valeurJoueur;
    ?><br />Le résultat : <?php
    if($valeurJoueur>=95){
      echo "Maladresse";
      $resultatT = "Maladresse";
    }elseif($valeurJoueur<=5){
      echo "Critique";
      $resultatT = "Critique";
    }elseif($valeurJoueur<=$valeurFiche){
      echo "Réussite";
      $resultatT = "Réussite";
    }else{
      echo "Echec";
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
<h1>Test de Magie</h1>
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