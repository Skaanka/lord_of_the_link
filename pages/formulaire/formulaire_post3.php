<?php 
    // creation de session 
    session_start();
    // connexion bdd
    require_once('../php/connexion.php');
    
    try { 
        if ( isset($_POST['submit']) ) {
            //nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);
            
            // divertissment -----> [OK]
            $_SESSION['inscription']['psn'] = $_POST['psn'];
            $_SESSION['inscription']['xboxlive'] = $_POST['xboxlive'];
            $_SESSION['inscription']['steam'] = $_POST['steam'];
            $_SESSION['inscription']['battlenet'] = $_POST['battlenet'];
            $_SESSION['inscription']['nintendo'] = $_POST['nintendo'];
            $_SESSION['inscription']['origin'] = $_POST['origin'];
            
            // réseaux pro -----> [OK]
            $_SESSION['inscription']['linkedin'] = $_POST['linkedin'];
            $_SESSION['inscription']['viadeo'] = $_POST['viadeo'];
            $_SESSION['inscription']['xing'] = $_POST['xing'];
            $_SESSION['inscription']['muxy'] = $_POST['muxy'];
            
            // réseaux sauciaux -----> [OK]
            $_SESSION['inscription']['facebook'] = $_POST['facebook'];
            $_SESSION['inscription']['twitter'] = $_POST['twitter'];
            $_SESSION['inscription']['youtube'] = $_POST['youtube'];
            $_SESSION['inscription']['google'] = $_POST['google'];
            $_SESSION['inscription']['skype'] = $_POST['skype'];
            $_SESSION['inscription']['instagram'] = $_POST['instagram'];
            $_SESSION['inscription']['pinterest'] = $_POST['pinterest'];
            $_SESSION['inscription']['deezer'] = $_POST['deezer'];
            $_SESSION['inscription']['spotify'] = $_POST['spotify'];
            $_SESSION['inscription']['viber'] = $_POST['viber'];
            
            
            header("Location: resumerFormulaire.php");
            
        } else {
            header("Location: formulaire2.php");
            echo "Erreur : echec de l'inscription partie 3!";
        }
            
    } catch(PDOException $ex) {
        echo "erreur! !";
    }



