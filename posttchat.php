<! DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $database = "minitchat";
  $password = "";
  $conn = new mysqli($servername, $username, $password, $database, 3306);

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     if(isset($_POST["submit"])){

        $pseudo = mysqli_real_escape_string($conn, $_POST["pseudo"]);
        $message = mysqli_real_escape_string($conn, $_POST["message"]);
        // Check connection
        if ($conn->connect_error) {
           include("menu.php");
           die("<br />Une erreur est survenue, merci de ressayer plus tard<br />");
        }
        $sql = "INSERT INTO messages(pseudo, texte) VALUES ('".$pseudo."', '".$message."')";

        if (mysqli_query($conn, $sql)) {
           echo "<br />Merci de votre aide !<br />";
        } else {
           echo "<br />Une erreur est survenue, merci de ressayer plus tard<br />";
        }
     }
     $conn->close();

     header('Location:tchat.php');
  ?>
</body>
</html>
