<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Picrik's Lab</title>
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
        <h1>Gestion de la session</h1>
        <h2>Gestion de l'équipement d'un joueur</h2>
        <div id="division">
        <div id="gauche">
        <h3>Gestion de l'or d'un joueur</h3>

        <?php echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "personnage" id = "personnage">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_pjcar ORDER BY nomPerso";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $id_joueur = $donnees['id_joueur'];
  $personnage = $donnees['nomPerso'];
  ?>
                <option value="<?php echo $id_joueur; ?>"><?php echo $personnage; ?></option>
<?php
}
?>
              </select>
<br />
<input type = "submit" value ="Gestion de l'Or" name = "gestionOR"/>
</form>

<?php
if (isset($_POST["gestionOR"])){

$personnage = $_POST['personnage'];
$query = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$personnage."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $nomPersonnage = $donnees['nomPerso'];
}
$query2 = "SELECT * FROM wh_pj_or WHERE id_joueur = '".$personnage."'";
$result2 = mysqli_query($con, $query2);

while($donnees2 = mysqli_fetch_assoc($result2)) {
  $OR_PJ = $donnees2["argent_tot"];
}
?> <br /> <?php
echo $nomPersonnage;
$CouronnesOr = floor($OR_PJ/100);
$PistolesArgents = floor($OR_PJ/10) - ($CouronnesOr*10);
$SousCuivre = $OR_PJ - $PistolesArgents*10 - $CouronnesOr*100;

?> <br /> Sous de cuivre :<?php
echo $SousCuivre;
?> <br /> Pistoles d'argent :<?php
echo $PistolesArgents;
?> <br /> Couronnes d'or :<?php
echo $CouronnesOr;

echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
<br />
<br />
Modification de l'or <br />
<input type = "number" name = "RajoutOR" id = "RajoutOR" style="width: 50px;"/>
<hidden><input type = "hidden" name = "idJoueur" id = "idJoueur" value=<?php echo $personnage;?> /></hidden>
<hidden><input type = "hidden" name = "OR_PJ" id = "OR_PJ" value=<?php echo $OR_PJ;?> /></hidden>
<hidden><input type = "hidden" name = "nomPersonnage" id = "nomPersonnage" value=<?php echo $nomPersonnage;?> /></hidden>
<br />
<input type = "submit" value ="Calcul !" name = "gestionOR2"/>
</form>
<?php
}
if(isset($_POST["gestionOR2"])){

  $idJoueur = $_POST['idJoueur'];
  $RajoutOR = $_POST['RajoutOR'];
  $OR_PJ = $_POST['OR_PJ'];
  $nomPersonnage = $_POST['nomPersonnage'];
  
  $OR_PJ_Act = $OR_PJ + $RajoutOR;

  ?> <br />Mise à jour de l'or <br /><?php
  echo $nomPersonnage;
  $CouronnesOr = floor($OR_PJ_Act/100);
  $PistolesArgents = floor($OR_PJ_Act/10) - ($CouronnesOr*10);
  $SousCuivre = $OR_PJ_Act - $PistolesArgents*10 - $CouronnesOr*100;

  ?> <br /> Sous de cuivre :<?php
  echo $SousCuivre;
  ?> <br /> Pistoles d'argent :<?php
  echo $PistolesArgents;
  ?> <br /> Couronnes d'or :<?php
  echo $CouronnesOr;
  
  $sql = "UPDATE wh_pj_or SET argent_tot = '".$OR_PJ_Act."' WHERE id_joueur = '".$idJoueur."'";
  mysqli_query($con, $sql);
  }
  ?>
        </div>
        <div id="centre">
        <h3>Ajout d'objet</h3>
        <?php echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "personnage" id = "personnage">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_pjcar ORDER BY nomPerso";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $id_joueur = $donnees['id_joueur'];
  $personnage = $donnees['nomPerso'];
  ?>
                <option value="<?php echo $id_joueur; ?>"><?php echo $personnage; ?></option>
<?php
}
?>
              </select>
<br />
Nom de l'objet : 
<br /><input type = "test" name = "nomObjet" id = "nomObjet" style="width: 100px;"/>
<br />
Description de l'objet : 
<br /><input type = "test" name = "desObjet" id = "desObjet" style="width: 250px;"/>
<br />
<input type = "submit" value ="Ajouter !" name = "ajoutObjet"/>
</form>

<?php
if (isset($_POST["ajoutObjet"])){
  ?>
<br />Ajout d'objet<br />
<?php
$personnage = $_POST['personnage'];
$query2 = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$personnage."'";
$result2 = mysqli_query($con, $query2);

while($donnees2 = mysqli_fetch_assoc($result2)) {
  $nomPersonnage = $donnees2['nomPerso'];
}
$Objet = $_POST['nomObjet'];
$desObjet = $_POST['desObjet'];
echo $nomPersonnage;
?> <br /> <?php
echo " a reçu ";
?> <br /> <?php
echo $Objet;
?> <br /> <?php
echo " qui a pour description : ";
?> <br /> <?php
echo $desObjet;

$sql = "INSERT INTO wh_equip(id_joueur, nom_equip, deslongue) VALUES ('".$personnage."', '".$Objet."', '".$desObjet."')";
mysqli_query($con, $sql);
}
?>
        </div>
        <div id="droite">
        <h3>Retrait d'objet</h3>
        <?php echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "personnage" id = "personnage">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_pjcar ORDER BY nomPerso";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $id_joueur = $donnees['id_joueur'];
  $personnage = $donnees['nomPerso'];
  ?>
                <option value="<?php echo $id_joueur; ?>"><?php echo $personnage; ?></option>
<?php
}
?>
              </select>
<br />
<input type = "submit" value ="Retirer !" name = "retraitObjet"/>
</form>

<?php
if (isset($_POST["retraitObjet"])){
  ?>
<br />Retrait d'objet<br />
<?php echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "objet" id = "objet">
<?php 
$personnage = $_POST['personnage'];
// On récupère les compétences de base
$query = "SELECT * FROM wh_equip WHERE id_joueur = '".$personnage."' ORDER BY nom_equip";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $nom_equip = $donnees['nom_equip'];
  $idObjet = $donnees['id']
  ?>
                <option value="<?php echo $idObjet; ?>"><?php echo $nom_equip; ?></option>
<?php
}
?>
              </select>
<hidden><input type = "hidden" name = "idJoueur" id = "idJoueur" value=<?php echo $personnage;?> /></hidden>
<br />
<input type = "submit" value ="Retirer l'objet !" name = "retraitObjet2"/>
</form>
<?php
}
if (isset($_POST["retraitObjet2"])){
  ?>
<br />Retrait d'objet<br />
<?php
$idObjet = $_POST['objet'];
$idJoueur = $_POST['idJoueur'];
$query2 = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$idJoueur."'";
$result2 = mysqli_query($con, $query2);

while($donnees2 = mysqli_fetch_assoc($result2)) {
  $nomPersonnage = $donnees2['nomPerso'];
}

$query3 = "SELECT * FROM wh_equip WHERE id = '".$idObjet."'";
$result3 = mysqli_query($con, $query3);

while($donnees3 = mysqli_fetch_assoc($result3)) {
  $objet = $donnees3['nom_equip'];
}
echo $objet;
?> <br /> au personnage <br /><?php
echo $nomPersonnage;
$sql = "DELETE FROM wh_equip WHERE id = '".$idObjet."'";
mysqli_query($con, $sql);
}
?>
        </div>
        </div>
        <h1>Gestion des Combats</h1>
        <div id="division">
        <div id="deuxpart">
        <h2>Gestion des blessures</h2>
        <?php echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
 <select name = "personnage" id = "personnage">
<?php 
// On récupère les compétences de base
$query = "SELECT * FROM wh_pjcar ORDER BY nomPerso";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $id_joueur = $donnees['id_joueur'];
  $personnage = $donnees['nomPerso'];
  ?>
                <option value="<?php echo $id_joueur; ?>"><?php echo $personnage; ?></option>
<?php
}
?>
              </select>
<br />
<input type = "submit" value ="Gestion des dégats" name = "gestionDMG"/>
</form>

<?php
if (isset($_POST["gestionDMG"])){
  ?>
<br />Etat Actuel<br />
<?php
$personnage = $_POST['personnage'];
$query = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$personnage."'";
$result = mysqli_query($con, $query);

while($donnees = mysqli_fetch_assoc($result)) {
  $nomPersonnage = $donnees['nomPerso'];
}
$query2 = "SELECT * FROM wh_pjstat WHERE id_joueur = '".$personnage."'";
$result2 = mysqli_query($con, $query2);

while($donnees2 = mysqli_fetch_assoc($result2)) {
  $valeurPJF = ($donnees2['forcep'] + $donnees2['forcepAug']);
  $valeurPJE = ($donnees2['endu'] + $donnees2['enduAug']);
  $valeurPJFM = ($donnees2['forceMen'] + $donnees2['forceMenAug']);
  $PV_PJ = floor($valeurPJF/10) + (2*floor($valeurPJE/10)) + floor($valeurPJFM/10);
  $Blessure_PJ = $donnees2['BlessureSubie'];
}
echo $nomPersonnage;
?> <br /> Point de vie total :<?php
echo $PV_PJ;
?> <br /> Blessures subies :<?php
echo $Blessure_PJ;
?> <br /> Blessures restantes :<?php
echo ($PV_PJ - $Blessure_PJ);


echo '<form action = "admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"" method = "post">'; ?>
<br />
<br />
Modification des blessures <br />
<input type = "number" name = "RajoutBLS" id = "RajoutBLS" style="width: 50px;"/>
<hidden><input type = "hidden" name = "idJoueur" id = "idJoueur" value=<?php echo $personnage;?> /></hidden>
<hidden><input type = "hidden" name = "Blessure_PJ" id = "Blessure_PJ" value=<?php echo $Blessure_PJ;?> /></hidden>
<hidden><input type = "hidden" name = "PV_PJ" id = "PV_PJ" value=<?php echo $PV_PJ;?> /></hidden>
<hidden><input type = "hidden" name = "nomPersonnage" id = "nomPersonnage" value=<?php echo $nomPersonnage;?> /></hidden>
<br />
<input type = "submit" value ="Calcul !" name = "gestionDMG2"/>
</form>

<?php
}
if (isset($_POST["gestionDMG2"])){

$idJoueur = $_POST['idJoueur'];
$RajoutBLS = $_POST['RajoutBLS'];
$Blessure_PJ = $_POST['Blessure_PJ'];
$PV_PJ = $_POST['PV_PJ'];
$nomPersonnage = $_POST['nomPersonnage'];

$nouvelleBlessure = $Blessure_PJ + $RajoutBLS;
if($nouvelleBlessure>$PV_PJ){
  $nouvelleBlessure = $PV_PJ;
}elseif($nouvelleBlessure<0){
  $nouvelleBlessure = 0;
}
?>Mise à jour des blessures <br /><?php
echo $nomPersonnage;
?> <br /> Point de vie total :<?php
echo $PV_PJ;
?> <br /> Blessures subies :<?php
echo $nouvelleBlessure;
?> <br /> Blessures restantes :<?php
echo ($PV_PJ - $nouvelleBlessure);

$sql = "UPDATE wh_pjstat SET BlessureSubie = '".$nouvelleBlessure."' WHERE id_joueur = '".$idJoueur."'";
mysqli_query($con, $sql);
}
?>

</div>
<div id="deuxpart">
        <h2>Gestion des avantages de combat</h2>
        </div>
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
