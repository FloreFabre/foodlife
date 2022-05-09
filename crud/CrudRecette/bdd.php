<?php
$bdd = new mysqli("localhost", "root", "", "foodlife");
$con =  $bdd->query('SELECT * FROM utilisateur');
$post = $bdd->query('SELECT * FROM recette');

 

?>

<?php

$mysqli = new mysqli("localhost", "root", "", "foodlife");


if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}




$conn = mysqli_connect( "localhost", "root", "", "foodlife");

if (!$conn) {

    echo "Connection failed!";

}

?>