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
    <h1>Bienvenue sur le site du Picrik's Lab !</h1>
    <p>
      Ce lab est un projet sur lequel je travaille depuis plusieurs années.<br />
      Il s'agit de l'expression complète de ma manière d'être.<br />
      A savoir : un "touhce à tout" compulsif.<br />
      Il y a dans la section suivante des liens vers mes différentes facettes.<br />
      Artiste, Chimiste, Data Scientist (en devenir), ...
    </p>
    <h2>Je vous laisse seul juge :</h2>
      Artiste : <a href="https://www.deviantart.com/picrik">DeviantArt</a>
    </p>
    <p>
      It guy : <a href="https://github.com/Picrik">GitHub</a>
    </p>
    <p>
      Pour mes créations ludiques c'est par <a href="jeuxvideos.html">ici</a> !
    </p>
    <p>
      Un petit tour par mon CV ? : <a href="https://www.linkedin.com/in/j%C3%A9r%C3%A9my-patrick-schneider-ph-d-2775245a/">
        Linkedin</a>
    </p>
    <p>
      Sinon Twitter ça marche aussi : <a href="https://twitter.com/JeremPSchneider">Par ici !</a><br />
      Vous êtes plus facebook ? : <a href="https://www.facebook.com/picrik.no.maho?ref=bookmarks">alors c'est là !</a>
    </p>
    <p>
      Il y a sûrement une <a href="collectes.php">collecte en cours !</a>
    </p>
    <h1>A venir :</h1>
    <p>
      Toujours plus d'informations !!!
    </p>
    <h1>Le petit compte :</h1>
    <?php
$monfichier = fopen("Info/compteur.txt", "r+");

$pages_vues = fgets($monfichier);
$pages_vues += 1;
fseek($monfichier, 0);
fputs($monfichier, $pages_vues);

fclose($monfichier);

echo "<p>Il y a eu " . $pages_vues . " visiteurs au total !</p>";
?>
  </div>
  <?php include("menu.php"); ?>
</body>

</html>
