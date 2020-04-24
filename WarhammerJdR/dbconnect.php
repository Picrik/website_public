<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'picrikdb';
$con = mysqli_connect( $host , $user, $password ) or die ( 'Could not connect to server' . mysqli_error ($con) );
mysqli_select_db( $con , $db ) or die ( 'Could not connect to database' . mysqli_error ($con) );
/* rajout des accents */
if (!mysqli_set_charset($con, "utf8"))
    {
        printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($con));
        exit();
    }
else
    {
        // printf("Jeu de caractères courant : %s\n", mysqli_character_set_name($link));
    }
?>