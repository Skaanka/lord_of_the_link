<?php
session_start();

if (isset($_POST["deconnexion"])) { // TODO bouton deconnexion 
    unset($_SESSION["user"]);
    header('location: index.php');
}

?>