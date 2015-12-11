<?php 
    // creation de session
    session_start();
    
    // connexion bdd
    require_once('../php/connexion.php');
    print_r($_SESSION['inscription']);
    
// resumer php = envoi des données dans la BDD ???

// ou 

// affiche les données pour modification avant inscription et envoie des données dans la BDD via resumeFormulaire_post.php ???