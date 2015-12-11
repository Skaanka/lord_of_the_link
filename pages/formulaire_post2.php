<?php 
    // creation de session
    session_start();
    
    // connexion bdd
    require_once('../php/connexion.php');
    //print_r($_SESSION['inscription']);
    
    //try { TODO RE ACTIVER LE TRY
        if ( isset($_POST['submit']) ) {
            //TODO nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);            



            /*******************
            //    DIPLOMES    //    --------> Fonctionne à 100% [4/4]
            *******************/
            if(!empty($_POST['annees_obt'] && $_POST['intitule'] && $_POST['ecole'])) {
                $_SESSION['inscription']['annees_obt'] = $_POST['annees_obt'];
                $_SESSION['inscription']['intitule'] = $_POST['intitule'];
                $_SESSION['inscription']['ecole'] = $_POST['ecole'];
            }
            
            
            if(!empty($_POST['annees_obt2'] && $_POST['intitule2'] && $_POST['ecole2'])) {
                $_SESSION['inscription']['annees_obt2'] = $_POST['annees_obt2'];
                $_SESSION['inscription']['intitule2'] = $_POST['intitule2'];
                $_SESSION['inscription']['ecole2'] = $_POST['ecole2'];
            }
            
            
            if(!empty($_POST['annees_obt3'] && $_POST['intitule3'] && $_POST['ecole3'])) {
                $_SESSION['inscription']['annees_obt3'] = $_POST['annees_obt3'];
                $_SESSION['inscription']['intitule3'] = $_POST['intitule3'];
                $_SESSION['inscription']['ecole3'] = $_POST['ecole3'];
            }


            if(!empty($_POST['annees_obt4'] && $_POST['intitule4'] && $_POST['ecole4'])) {
                $_SESSION['inscription']['annees_obt4'] = $_POST['annees_obt4'];
                $_SESSION['inscription']['intitule4'] = $_POST['intitule4'];
                $_SESSION['inscription']['ecole4'] = $_POST['ecole4'];
            }
    
    
    
            /*******************
            //     XP PRO     //    --------> EN COURS [3/6]
            *******************/
            if(!empty($_POST['periode_debut'] && $_POST['periode_fin'] && $_POST['compagnie'] && $_POST['poste'])) {
                $_SESSION['inscription']['periode_debut'] = $_POST['periode_debut'];
                $_SESSION['inscription']['periode_fin'] = $_POST['periode_fin'];
                $_SESSION['inscription']['compagnie'] = $_POST['compagnie'];
                $_SESSION['inscription']['poste'] = $_POST['poste'];
            }  


            if(!empty($_POST['periode_debut2'] && $_POST['periode_fin2'] && $_POST['compagnie2'] && $_POST['poste2'])) {
                $_SESSION['inscription']['periode_debut2'] = $_POST['periode_debut2'];
                $_SESSION['inscription']['periode_fin2'] = $_POST['periode_fin2'];
                $_SESSION['inscription']['compagnie2'] = $_POST['compagnie2'];
                $_SESSION['inscription']['poste2'] = $_POST['poste2'];
            }

            if(!empty($_POST['periode_debut3'] && $_POST['periode_fin3'] && $_POST['compagnie3'] && $_POST['poste2'])) {
                $_SESSION['inscription']['periode_debut3'] = $_POST['periode_debut3'];
                $_SESSION['inscription']['periode_fin3'] = $_POST['periode_fin3'];
                $_SESSION['inscription']['compagnie3'] = $_POST['compagnie3'];
                $_SESSION['inscription']['poste3'] = $_POST['poste3'];
            }
            
            
            
            
            
            /*******************
            //   COMPETENCES  //    --------> A FAIRE
            *******************/
            
            /*******************
            //   FIL D'ACTU   //    --------> Fonctionne à 100%
            *******************/
            if(!empty($_POST['messages'])) {                    
             $file_actu = $db->prepare("INSERT INTO actu_perso (id, id_membres, messages) VALUES (:id, :id_membres, :messages) ");
                $_SESSION['inscription']['messages'] = $_POST['messages'];
            }

            /*******************
            //    PORTFOLIO   //    --------> A FAIRE
            *******************/
            
            

            header("Location: formulaire3.php");  // supprimer le mode commentaire lorsque page OK
            
        } else {
            //header("Location: formulaire2.php"); // supprimer le mode commentaire lorsque page OK
            echo "Erreur : echec de l'inscription !";
        }



        
    /*catch(PDOException $ex) {
      echo "erreur! !";
    }

    }*/