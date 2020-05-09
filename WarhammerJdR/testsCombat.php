<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <title>Tests Combats / WARHAMMER</title>
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
   <h1>Vos compétences de combat</h1>
   <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th>Compétence</th>
   </tr>
  <?php
   // On récupère les compétences de combat de base
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' AND (caracteristique = 'CC' OR competence ='Esquive')";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
     <td><?php echo $donnees['competence']; ?></td>
    <td><?php 
        if($donnees['caracteristique']=='CC'){
          $valeurFiche = $valeurFicheCC;
         // pas de CT test pour force
        }elseif($donnees['caracteristique']=='Ag'){
          $valeurFiche = $valeurFicheAgi;
        }
        echo ($valeurFiche + $donnees['augmentation']); ?></td>
        </tr>
         <?php
}
   // On récupère les compétences de combat avancée
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' AND (caracteristique = 'CC' OR caracteristique = 'CT' OR competence LIKE '%Magik%' OR competence LIKE '%ocalisation%' OR competence LIKE '%rière%')";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
     <td><?php echo $donnees['competence']; ?></td>
    <td><?php 
        if($donnees['caracteristique']=='CC'){
          $valeurFiche = $valeurFicheCC;
         // pas de CT test pour force
        }elseif($donnees['caracteristique']=='CT'){
          $valeurFiche = $valeurFicheCT;
        }elseif($donnees['caracteristique']=='Int'){
          $valeurFiche = $valeurFicheInt;
          }elseif($donnees['caracteristique']=='FM'){
            $valeurFiche = $valeurFicheFM;
          }elseif($donnees['caracteristique']=='Soc'){
            $valeurFiche = $valeurFicheSoc;
          }
        echo ($valeurFiche + $donnees['augmentation']); ?></td>
        </tr>
         <?php
}
?>
         </table>
   <h1>Votre état</h1>
   <div id="division">
   <div id="gauche">
   <h1>Votre équipement</h1>
  <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th>Description</th>
   </tr>
   <?php
   // On récupère tout le contenu de la table equip
$query = "SELECT * FROM wh_equip WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  if($donnees['combat']=='oui'){
  ?>
  <tr>
       <td><?php echo $donnees['nom_equip']; ?></td>
       <td><?php echo $donnees['deslongue']; ?></td>
      </tr>
<?php
  }
}
?>
   </table>
   </div>
   <div id="centre">
   <h2>Votre santé</h2>
   <table align="center" cellpadding="5">
   <tr>
     <th>Base</th>
     <th>Dégats</th>
     <th>Actuelle</th>
   </tr>
   <tr>
   <td><?php echo $valeurFicheBlessure ?></td>
   <td><?php echo $valeurFicheBlessureSubie ?></td>
   <td><?php echo ($valeurFicheBlessure - $valeurFicheBlessureSubie) ?></td>
   </tr>
   </table>
   </div>
   <div id ="droite">
   <h2>Avantages / état<h2>
   <?php
   $query = "SELECT * FROM wh_etat_combat WHERE id_joueur = '".$idJoueur."'";
   $result = mysqli_query($con, $query);
   
   while($donnees = mysqli_fetch_assoc($result)) {
  ?>
   <table align="center" cellpadding="5">
   <tr>
     <th>Avantage(s)</th>
     <th>Etat</th>
   </tr>
   <tr>
   <td><?php echo $donnees['avantage']; $avantagesCombats = $donnees['avantage']?></td>
   <td><?php echo $donnees['etat'] ?></td>
   </tr>
   <?php
   }
   ?>
   </table>
   </div>
   </div>
   <h1>Vos tests de combat</h1>
   <div id="division">
   <div id="deuxpart">
   <h2>Attaque</h2>
   <h3 id="corpsacorps">Corps à corps</h3>
  <?php echo '<form action = "testsCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'#corpsacorps" method = "post">'; ?>
 <select name = "compe" id = "compe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' AND caracteristique = 'CC'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
$query2 = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' AND caracteristique = 'CC'";
$result2 = mysqli_query($con, $query2);

while($donnees2 = mysqli_fetch_assoc($result2)) {
  $competenceList2 = $donnees2['competence'];
  ?>
                <option value="<?php echo $competenceList2; ?>"><?php echo $competenceList2; ?></option>
<?php
}
?>
              </select>

<input type = "submit" value ="Random !" name = "CaCRandom"/>
<br />
Votre jet de dés : 
<br /><input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "CaCcompe"/>

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
if (isset($_POST["CaCcompe"]) or isset($_POST["CaCRandom"])){
  ?>
<br />Votre compétence avec avantages <br />
<?php
$valeurFiche = $valeurFicheCC;
$compe = $_POST['compe'];
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' and competence = '".$compe."'";
$result = mysqli_query($con, $query);
$rows = mysqli_num_rows($result);

if($rows>0){
while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
  }

}else{
  $query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' and competence = '".$compe."'";
  $result = mysqli_query($con, $query);
  while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
  }
}
    
    $valeurCompe = $valeurFiche + $augmentationCompe + ($avantagesCombats*10);
    if(isset($_POST["CaCcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $compe; ?> est de (<?php
    echo ($valeurFiche + $augmentationCompe);?>+<?php
    echo ($avantagesCombats*10);?>
    ) <?php
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
   <h3 id="projectiles">Projectiles</h3>
   <?php echo '<form action = "testsCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'#projectiles" method = "post">'; ?>
 <select name = "compe" id = "compe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' AND caracteristique = 'CT'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
?>
              </select>

<input type = "submit" value ="Random !" name = "CTRandom"/>
<br />
Votre jet de dés : 
<br /><input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "CTcompe"/>

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
if (isset($_POST["CTcompe"]) or isset($_POST["CTRandom"])){
  ?>
<br />Votre compétence avec avantages <br />
<?php
$valeurFiche = $valeurFicheCT;
$compe = $_POST['compe'];
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' and competence = '".$compe."'";
$result = mysqli_query($con, $query);
while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
  }
    
    $valeurCompe = $valeurFiche + $augmentationCompe + ($avantagesCombats*10);
    if(isset($_POST["CTcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $compe; ?> est de (<?php
    echo ($valeurFiche + $augmentationCompe);?>+<?php
    echo ($avantagesCombats*10);?>
    ) <?php
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
$query = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);
while($donnees = mysqli_fetch_assoc($result)) {
  if(($donnees['magie']=='oui') or ($donnees['beni']=='oui')){
?>
   <h3 id="magie">Magie/Prière</h3>
   <?php echo '<form action = "testsCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'#magie" method = "post">'; ?>
 <select name = "compe" id = "compe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' AND (competence LIKE '%Magik%' OR competence LIKE '%ocalisation%' OR competence LIKE '%rière%') ORDER BY competence";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
?>
              </select>

<input type = "submit" value ="Random !" name = "MagRandom"/>
<br />
Votre jet de dés : 
<br /><input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "Magcompe"/>

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
if (isset($_POST["MagRandom"]) or isset($_POST["Magcompe"])){
  ?>
<br />Votre compétence avec avantages <br />
<?php
$compe = $_POST['compe'];
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."' and competence = '".$compe."'";
$result = mysqli_query($con, $query);
while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
    // si compé basé sur Int
    if($donnees['caracteristique']=='Int'){
    $valeurFiche = $valeurFicheInt;
    }elseif($donnees['caracteristique']=='FM'){
      $valeurFiche = $valeurFicheFM;
    }elseif($donnees['caracteristique']=='Soc'){
      $valeurFiche = $valeurFicheSoc;
    }
  }
    
    $valeurCompe = $valeurFiche + $augmentationCompe + ($avantagesCombats*10);
    if(isset($_POST["Magcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $compe; ?> est de (<?php
    echo ($valeurFiche + $augmentationCompe);?>+<?php
    echo ($avantagesCombats*10);?>
    ) <?php
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
  }
}
?>
   </div>
   <div id="deuxpart">
   <h2>Défense</h2>
   <h3>Corps à Corps</h3>
   <?php echo '<form action = "testsCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "compe" id = "compe">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' AND (competence = 'Corps à corps' OR competence ='Esquive')";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $competenceList = $donnees['competence'];
  ?>
                <option value="<?php echo $competenceList; ?>"><?php echo $competenceList; ?></option>
<?php
}
?>
              </select>

<input type = "submit" value ="Random !" name = "DefRandom"/>
<br />
Votre jet de dés : 
<br /><input type = "number" name = "ValJoueur" id = "ValJoueur" style="width: 50px;"/>
<input type = "submit" value ="Go !" name = "Defcompe"/>

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
if (isset($_POST["Defcompe"]) or isset($_POST["DefRandom"])){
  ?>
<br />Votre compétence avec avantages <br />
<?php
$compe = $_POST['compe'];
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' and competence = '".$compe."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
    // on isole l'augementation
    $augmentationCompe = $donnees['augmentation'];
    // test valeur
    if($donnees['caracteristique']=='CC'){
      $valeurFiche = $valeurFicheCC;
      }elseif($donnees['caracteristique']=='Ag'){
        $valeurFiche = $valeurFicheAgi;
      }
  }
    $valeurCompe = $valeurFiche + $augmentationCompe + ($avantagesCombats*10);
    if(isset($_POST["Defcompe"])){
      $valeurJoueur = $_POST['ValJoueur'];
      $Auto = "non";
    }else{
      $valeurJoueur =  rand(1,100);
      $Auto = "oui";
    }
    
    echo $compe; ?> est de (<?php
    echo ($valeurFiche + $augmentationCompe);?>+<?php
    echo ($avantagesCombats*10);?>
    ) <?php
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