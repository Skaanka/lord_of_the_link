<?php
// destruction de session inscription
require_once('php/function.php');
destructionSessionInscription();
// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

//affichage des membres TODO
$affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
$affichageMembre->execute(array($_SESSION['user']));
$value = $affichageMembre->fetch();
?>