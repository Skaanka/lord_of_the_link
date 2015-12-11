<?php
    if ( isset ($_SESSION["inscription"])) {
        unset($_SESSION["inscription"]);
    }
    session_start();
    require_once('../php/connexion.php');


try {
    if ( isset($_POST['connexion'])) {
        $login = $db->prepare('SELECT * FROM membres WHERE mail=?');
        $login ->execute(array($_POST["mail"]));
        $results = $login->fetch(PDO::FETCH_ASSOC);
        $login->closeCursor();
        
        if ($results) {
            if (password_verify($_POST['mot_de_passe'], $results['mot_de_passe']) ) {
                $_SESSION['user']['id'] = $results['id'];
                $_SESSION['user']['nom'] = $results['nom'];
                $_SESSION['user']['prenom'] = $results['prenom'];
                $_SESSION['user']['ddn'] = $results['ddn'];
                $_SESSION['user']['avatar'] = $results['avatar'];
                $_SESSION['user']['adresse'] = $results['adresse'];
                $_SESSION['user']['cp'] = $results['cp'];
                $_SESSION['user']['ville'] = $results['ville'];
                $_SESSION['user']['mail'] = $results['mail'];
                $_SESSION['user']['phone'] = $results['phone'];
                $_SESSION['user']['siteWeb'] = $results['siteWeb'];
                
                header("Location: ../index.php");  //redirection sur l'index 
            } else {
                // si erreur : redirection si erreur sur le login et le mdp
                $login_erreur = "pseudo ou mot de passe invalide!";
                global $login_erreur;
                $redirection = $_SERVER['HTTP_REFERER'] ;//. "?=" . $login_erreur ; // TODO sur la bonne piste // ! HTTP_REFERER ne serait pas fiable en terme de sécurité.
                header("Location: $redirection"); 
            }
        } // fin du if ($results)
        
    }
    
} catch(PDOException $ex) {
        echo "erreur try !";
    }



