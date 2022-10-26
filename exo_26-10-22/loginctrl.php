<?php 
session_start(); // Initialise une Session navigateur

$_SESSION["username"] = $_POST["username"]; // enregistre le username
$_SESSION["password"] = $_POST["password"]; // enregistre le password

if ($_POST["username"] == "antho" AND $_POST["password"] == "azerty") {

    header("location:loginsuite.php"); // redirige vers la page loginsuite.php
    exit(); // préférable de mettre exit() après le header location
}else {
    echo "<h1>pseudo ou mot de passe incorrecte</h1>";
    echo "<h2>retour à la page de <a href='login.html'>connection</a></h2>";
}


?>