<div id="piedPage">
<ul>
      <li>
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
        echo '<a href="joueur.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Personnage</a></li>';
        echo '<li><a href="tests.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Gestion des tests</a></li>';
        echo '<li><a href="testsCombat.php?PJ=TRUE&idJoueur='.$idJoueur.'"">Gestion des combats</a></li>';


      }else{
        ?>
            <a href="connexion.php">Choix du personnage</a><br />
            <?php
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
    <a href="admin.php">Panneau MJ</a>
    </li>
    <li>
    <a href="connexion.php">Deconnexion</a>
    </li>
</div>