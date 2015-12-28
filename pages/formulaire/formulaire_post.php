<?php
    //creation de session
    session_start();
    // connexion bdd
    require_once('../../php/connexion.php');


    try { 
        
        // gestion de l'avatar
        if (isset($_POST['submit'])){ 
                $repertoire_upload = "c://xampp//htdocs//lord_of_the_link//uploads//";
                $fichier_upload = $repertoire_upload . basename($_FILES['avatar']['name']);
                //echo $fichier_upload;
                if (move_uploaded_file($_FILES['avatar']['tmp_name'], $fichier_upload)) {             // TODO RENOMMER IMG DANS BDD
                    echo "";
                } else {
                    echo "Erreur envoie image";
                }
        }

        if ($_POST) {
            //nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);
            //$prenom = trim($_POST["prenom"]);
            //$ddn = trim($_POST["ddn"]);
            //$avatar = trim($_FILES["avatar"]['name']);
            //$adresse = trim($_POST["adresse"]);
            //$cp = trim($_POST["cp"]);
            //$ville = trim($_POST["ville"]);
            $mail = trim($_POST["mail"]);
            //$phone = trim($_POST["phone"]);
            //$siteWeb = trim($_POST["siteWeb"]);
            $mot_de_passe = trim($_POST["mot_de_passe"]);
            
            // verifie si l'email est valide et si le champs mot de passe est remplie
            if ( filter_var($mail, FILTER_VALIDATE_EMAIL) && !empty($mot_de_passe) ) { // verifie
                
                //hacher le mot de passe :
                $hashPassword = password_hash($mot_de_passe, PASSWORD_DEFAULT);

                // si $_POST contient des données alors créa d'une $_SESSION
                if (isset($_POST) ) {
                    
                    $_SESSION['inscription']['nom'] = $_POST['nom'];
                    $_SESSION['inscription']['prenom'] = $_POST['prenom'];
                    $_SESSION['inscription']['ddn'] = $_POST['ddn'];
                    $_SESSION['inscription']['avatar'] = $_FILES['avatar']['name'];
                    $_SESSION['inscription']['adresse'] = $_POST['adresse'];
                    $_SESSION['inscription']['cp'] = $_POST['cp'];
                    $_SESSION['inscription']['ville'] = $_POST['ville'];
                    $_SESSION['inscription']['mail'] = $_POST['mail'];
                    $_SESSION['inscription']['phone'] = $_POST['phone'];
                    $_SESSION['inscription']['siteWeb'] = $_POST['siteWeb'];
                    $_SESSION['inscription']['mot_de_passe'] = $hashPassword;
                    
                } else {
                    echo "erreur session temporaire";                      
                }
                
                header("Location: formulaire2.php");
                $inscriptionOk = "Inscription réussi !";
                
            } else {
                echo "Erreur : echec de l'inscription !";
                //header("Location: formulaire.php");
            }
            
        } // fin if ($_POST)
        
    } catch(PDOException $ex) {
        echo "erreur! !";
    }

