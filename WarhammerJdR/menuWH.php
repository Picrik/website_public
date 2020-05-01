<div id="piedPage">
<ul>
      <?php
      require 'dbconnect.php';

      // Check connection
     if ($con->connect_error) {
        die("Connection failed");
     }

      if((isset($_POST["PJ"])) or (isset($_GET["PJ"]))){
        if(isset($_POST["PJ"])){
    // Si tout va bien, on peut continuer
    // nettoyage des champs
    $idJoueur = mysqli_real_escape_string($con, $_POST["idJoueur"]);
    }else{
      $idJoueur = mysqli_real_escape_string($con, $_GET["idJoueur"]);
    }
        echo '<li><a href="joueur.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Personnage</a></li>';
        echo '<li><a href="histoirepj.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Histoire Personnelle</a></li>';
        echo '<li><a href="tests.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Gestion des tests</a></li>';
        // echo '<li><a href="testsCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Gestion des combats</a></li>'; WIP

        //affichage ou non du grimoire
        $query = "SELECT * FROM wh_pjcar WHERE id_joueur = '".$idJoueur."'";
        $result = mysqli_query($con, $query);
        while($donnees = mysqli_fetch_assoc($result)) {
          if($donnees['magie']=='oui'){
        echo '<li><a href="grimoire.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Grimoire</a></li>';
          }
          if($donnees['beni']=='oui'){
            echo '<li><a href="priere.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Livre de prière</a></li>';
              }
          if($donnees['administrateur']=='oui'){
            echo '<li><a href="admin.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Panneau MJ</a></li>';
              }
        }
      }else{
        echo '<li><a href="connexion.php">Choix du personnage</a></li>';
      }
?>
    </li>
    <li>
    <?php  if((isset($_POST["PJ"])) or (isset($_GET["PJ"]))){
        echo '<a href="lexique.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Lexique</a></li>';
    }else{
      ?>
      <a href="lexique.php">Lexique</a><br />
      <?php
    }
    ?>
    <li>
    <a href="connexion.php">Deconnexion</a>
    </li>
</div>