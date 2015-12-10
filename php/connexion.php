<?php

// Connexion a la base de donnees
try {
    $user = 'root';
    $password = '';
    
    $db = new PDO('mysql:host=localhost; dbname=projet_reseaux; charset=utf8', $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // mode de gestion d'erreur
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // http://php.net/manual/fr/pdo.setattribute.php
    
} catch(PDOException $ex) {
    echo "erreur connexion !";
}

?>