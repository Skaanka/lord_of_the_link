<?php

function affichageMembre() {
    global $db;
    //affichage des membres
    $affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
    $affichageMembre->execute(array($_GET['query']));
    $value = $affichageMembre->fetch();
}