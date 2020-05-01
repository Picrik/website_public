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
  </table>
  <div id="bloc_page">
 <h1>Vos Caractéristiques</h1>
 <table align="center" cellpadding="5">
   <tr>
     <th></th>
     <th>CC</th>
     <th>CT</th>
     <th>Force</th>
     <th>Endurance</th>
     <th>Initiative</th>
     <th>Agilité</th>
     <th>Dextérité</th>
     <th>Intelligence</th>
     <th>Force Mentale</th>
     <th>Sociabilité</th>
   </tr>

   <?php

$query = "SELECT * FROM wh_pjstat WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);
while($donnees = mysqli_fetch_assoc($result)) {
 ?>

 <tr>
 <td>Initial</td>
   <td><?php echo $donnees['capaCaC']; ?></td>
   <td><?php echo $donnees['capaTir']; ?></td>
   <td><?php echo $donnees['forcep']; ?></td>
   <td><?php echo $donnees['endu']; ?></td>
   <td><?php echo $donnees['initiative']; ?></td>
   <td><?php echo $donnees['agi']; ?></td>
   <td><?php echo $donnees['dexterite']; ?></td>
   <td><?php echo $donnees['intel']; ?></td>
   <td><?php echo $donnees['forceMen']; ?></td>
   <td><?php echo $donnees['sociabilite']; ?></td>
</tr>
<tr>
 <td>Avancées</td>
   <td><?php echo $donnees['capaCaCAug']; ?></td>
   <td><?php echo $donnees['capaTirAug']; ?></td>
   <td><?php echo $donnees['forcepAug']; ?></td>
   <td><?php echo $donnees['enduAug']; ?></td>
   <td><?php echo $donnees['initiativeAug']; ?></td>
   <td><?php echo $donnees['agiAug']; ?></td>
   <td><?php echo $donnees['dexteriteAug']; ?></td>
   <td><?php echo $donnees['intelAug']; ?></td>
   <td><?php echo $donnees['forceMenAug']; ?></td>
   <td><?php echo $donnees['sociabiliteAug']; ?></td>
</tr>
<tr>
 <td>Courantes</td>
<?php
/* Création ici des variables des caractéristiques utilisées
pour les compétences
*/

 $capaCaC = ($donnees['capaCaC'] + $donnees['capaCaCAug']);
 $capaTir = ($donnees['capaTir'] + $donnees['capaTirAug']);
 $force = ($donnees['forcep'] + $donnees['forcepAug']);
 $endu = ($donnees['endu'] + $donnees['enduAug']);
 $initiative = ($donnees['initiative'] + $donnees['initiativeAug']);
 $agi = ($donnees['agi'] + $donnees['agiAug']);
 $dexterite = ($donnees['dexterite'] + $donnees['dexteriteAug']);
 $intel = ($donnees['intel'] + $donnees['intelAug']); 
 $forceMen = ($donnees['forceMen'] + $donnees['forceMenAug']);
 $sociabilite = ($donnees['sociabilite'] + $donnees['sociabiliteAug']);

?>
   <td><?php echo $capaCaC; ?></td>
   <td><?php echo $capaTir; ?></td>
   <td><?php echo $force; ?></td>
   <td><?php echo $endu; ?></td>
   <td><?php echo $initiative; ?></td>
   <td><?php echo $agi; ?></td>
   <td><?php echo $dexterite; ?></td>
   <td><?php echo $intel; ?></td>
   <td><?php echo $forceMen; ?></td>
   <td><?php echo $sociabilite; ?></td>
</tr>
</table>
   <?php
   }
   ?>
   </div>
   <?php

// On récupère tout le contenu de la table invites
$query = "SELECT * FROM wh_pjstat WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <div id="division">
  <div id="gauche">
  <h1>Destin</h1>
 <table align="center" cellpadding="5">
   <tr>
     <th>Destin</th>
     <th>Chance</th>
   </tr>
   <tr>
   <td><?php echo $donnees['destin']; ?></td>
   <td><?php echo $donnees['chance']; ?></td>
   </table>
  </div>
  <div id="centre">
  <h1>Résilience</h1>
 <table align="center" cellpadding="5">
   <tr>
     <th>Résilience</th>
     <th>Détermination</th>
     <th>Motivation</th>
   </tr>
   <tr>
   <td><?php echo $donnees['resilience']; ?></td>
   <td><?php echo $donnees['determination']; ?></td>
   <td><?php echo $donnees['motivation']; ?></td>
   </tr>
   </table>
  </div>
  <div id="droite">
  <h1>Expérience</h1>
 <table align="center" cellpadding="5">
   <tr>
     <th>Actuelle</th>
     <th>Depensée</th>
     <th>Totale</th>
   </tr>
   <tr>
   <td><?php echo ($donnees['pointExpTot']- $donnees['pointExpDep']); ?></td>
   <td><?php echo $donnees['pointExpDep']; ?></td>
   <td><?php echo $donnees['pointExpTot']; ?></td>
   </tr>
   </table>
  </div>
  </div>
  <?php
}
?>
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
  ?>
  <tr>
       <td><?php echo $donnees['nom_equip']; ?></td>
       <td><?php echo $donnees['deslongue']; ?></td>
      </tr>
<?php
}
?>
   </table>
   </div>
   <div id="centre">
   <h1>Votre Or</h1>
   <table align="center" cellpadding="5">
   <tr>
     <th>Sous de cuivre</th>
     <th>Pistoles d'argent</th>
     <th>Couronnes d'or</th>
   </tr>
   <tr>
   <?php
   // On récupère tout le contenu de la table equip
$query = "SELECT * FROM wh_pj_or WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $CouronnesOr = floor($donnees['argent_tot']/100);
  $PistolesArgents = floor($donnees['argent_tot']/10) - ($CouronnesOr*10);
  $SousCuivre = $donnees['argent_tot'] - $PistolesArgents*10 - $CouronnesOr*100;

  ?>
  <tr>
       <td><?php echo $SousCuivre; ?></td>
       <td><?php echo $PistolesArgents; ?></td>
       <td><?php echo $CouronnesOr; ?></td>
      </tr>
<?php
}
?>
</tr>
   </table>
   </div>
   <div id="droite">
   <h1>Votre santé</h1>
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
   </div>
  <div id="bloc_page">
  <h1>Vos Compétences de base</h1>
</div>
  <div id="division">
    <div id="deuxpart">
  <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th colspan="2">Caractéristiques</th>
     <th>Aug</th>
     <th>Comp</th>
   </tr>

<?php

// On récupère les 13 premières compétences
$query = "SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' ORDER BY competence limit 13";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
     <td><?php echo $donnees['competence']; ?></td>
    <td><?php echo $donnees['caracteristique']; ?></td>
    <td><?php 
    // test pour cc
    if($donnees['caracteristique']=='CC'){
      $valeurCompFiche = $capaCaC;
     // pas de CT test pour force
    }elseif($donnees['caracteristique']=='F'){
     $valeurCompFiche = $force;
     // test pour endurance
    }elseif($donnees['caracteristique']=='E'){
     $valeurCompFiche = $endu;
     // test pour agilité
    }elseif($donnees['caracteristique']=='Ag'){
     $valeurCompFiche = $agi;
     // test pour initiative
    }elseif($donnees['caracteristique']=='I'){
      $valeurCompFiche = $initiative;   
     // test pour dextérité
    }elseif($donnees['caracteristique']=='Dex'){
      $valeurCompFiche = $dexterite;
     // test pour intelligence
    }elseif($donnees['caracteristique']=='Int'){
      $valeurCompFiche = $intel;
     // test pour force mentale
    }elseif($donnees['caracteristique']=='FM'){
      $valeurCompFiche = $forceMen;
     // test pour sociabilité
    }elseif($donnees['caracteristique']=='Soc'){
      $valeurCompFiche = $sociabilite;
    }else{
      $valeurCompFiche = 0;
    }
    echo $valeurCompFiche;
     ?></td>
     <td><?php echo $donnees['augmentation']; ?></td>
     <td><?php echo ($valeurCompFiche + $donnees['augmentation']); ?></td>
  </tr>
  <?php
}
?>
</table>
</div>
<div id="deuxpart">
  <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th colspan="2">Caractéristiques</th>
     <th>Aug</th>
     <th>Comp</th>
   </tr>

<?php

// On récupère les 13 dernières compétences
$query = "SELECT * FROM (SELECT * FROM wh_compbase WHERE id_joueur = '".$idJoueur."' ORDER BY competence DESC limit 13) sub ORDER BY competence ASC";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
   <td><?php echo $donnees['competence']; ?></td>
    <td><?php echo $donnees['caracteristique']; ?></td>
    <td><?php 
    // test pour cc
    if($donnees['caracteristique']=='CC'){
      $valeurCompFiche = $capaCaC;
     // pas de CT test pour force
    }elseif($donnees['caracteristique']=='F'){
     $valeurCompFiche = $force;
     // test pour endurance
    }elseif($donnees['caracteristique']=='E'){
     $valeurCompFiche = $endu;
     // test pour agilité
    }elseif($donnees['caracteristique']=='Ag'){
     $valeurCompFiche = $agi;
     // test pour initiative
    }elseif($donnees['caracteristique']=='I'){
      $valeurCompFiche = $initiative;   
     // test pour dextérité
    }elseif($donnees['caracteristique']=='I'){
      $valeurCompFiche = $dexterite;
     // test pour intelligence
    }elseif($donnees['caracteristique']=='Int'){
      $valeurCompFiche = $intel;
     // test pour force mentale
    }elseif($donnees['caracteristique']=='FM'){
      $valeurCompFiche = $forceMen;
     // test pour sociabilité
    }elseif($donnees['caracteristique']=='Soc'){
      $valeurCompFiche = $sociabilite;
    }else{
      $valeurCompFiche = 0;
    }
    echo $valeurCompFiche;
     ?></td>
     <td><?php echo $donnees['augmentation']; ?></td>
     <td><?php echo ($valeurCompFiche + $donnees['augmentation']); ?></td>
  </tr>
  <?php
}
?>
</table>
</div>
</div>
<div id="bloc_page">
  <h1>Vos Compétences de avancées et talents</h1>
</div>
  <div id="division">
    <div id="deuxpart">
    <h2>Compétences avancées</h2>
  <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th colspan="2">Caractéristiques</th>
     <th>Aug</th>
     <th>Comp</th>
   </tr>

<?php

// On récupère les 13 premières compétences
$query = "SELECT * FROM wh_compspe WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
     <td><?php echo $donnees['competence']; ?></td>
    <td><?php echo $donnees['caracteristique']; ?></td>
    <td><?php 
    // test pour cc
    if($donnees['caracteristique']=='CC'){
      $valeurCompFiche = $capaCaC;
     // pas de CT test pour force
    }elseif($donnees['caracteristique']=='F'){
     $valeurCompFiche = $force;
     // test pour endurance
    }elseif($donnees['caracteristique']=='E'){
     $valeurCompFiche = $endu;
     // test pour agilité
    }elseif($donnees['caracteristique']=='Ag'){
     $valeurCompFiche = $agi;
     // test pour initiative
    }elseif($donnees['caracteristique']=='I'){
      $valeurCompFiche = $initiative;   
     // test pour dextérité
    }elseif($donnees['caracteristique']=='Dex'){
      $valeurCompFiche = $dexterite;
     // test pour intelligence
    }elseif($donnees['caracteristique']=='Int'){
      $valeurCompFiche = $intel;
     // test pour force mentale
    }elseif($donnees['caracteristique']=='FM'){
      $valeurCompFiche = $forceMen;
     // test pour sociabilité
    }elseif($donnees['caracteristique']=='Soc'){
      $valeurCompFiche = $sociabilite;
    }else{
      $valeurCompFiche = 0;
    }
    echo $valeurCompFiche;
     ?></td>
     <td><?php echo $donnees['augmentation']; ?></td>
     <td><?php echo ($valeurCompFiche + $donnees['augmentation']); ?></td>
  </tr>
  <?php
}
?>
</table>
</div>
<div id="deuxpart">
    <h2>Talents</h2>
    <table align="center" cellpadding="5">
   <tr>
     <th>Nom</th>
     <th>Description</th>
     <th>Niveau</th>
   </tr>

   <?php

// On récupère les différents talents
$query = "SELECT * FROM wh_talent WHERE id_joueur = '".$idJoueur."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  ?>

   <tr>
   <?php
   $query2 = "SELECT * from wh_lexique where id = '".$donnees['id_talent']."'";
   $result2 = mysqli_query($con, $query2);
   while($donnees2 = mysqli_fetch_assoc($result2)) {
     ?>
     <td><?php echo $donnees2['nom']; ?></td>
     <td><?php echo $donnees2['descourte']; ?></td>
     <?php
   }
   ?>
    <td><?php echo $donnees['niveau']; ?></td>
    <?php 
}
?>
</table>
  </div>
  </div>
  <div>
  <?php include("copyright.php"); ?>
  </div>
  <div>
      <?php include("menuWH.php"); ?>
  </div>
</body>
</html>