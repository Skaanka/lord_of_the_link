<?php   
    session_start();
    // connexion bdd
    require_once('../php/connexion.php');

    try { 
        if (isset($_POST['submit'])){ // gestion de l'avatar
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
            
            if ( filter_var($mail, FILTER_VALIDATE_EMAIL) && !empty($mot_de_passe) ) { // verifie
                //hacher le mot de passe :
                $hashPassword = password_hash($mot_de_passe, PASSWORD_DEFAULT);
                // ajout d'un membre dans la bdd
                $inscription = $db->prepare("INSERT INTO membres (id, nom, prenom, ddn, avatar, adresse, cp, ville, mail, phone, siteWeb, mot_de_passe) VALUES (:id, :nom, :prenom, :ddn, :avatar, :adresse, :cp, :ville, :mail, :phone, :siteWeb, :mot_de_passe)");
                $inscription->bindValue(':id' , '', PDO::PARAM_INT);
                $inscription->bindValue(':nom' , $_POST['nom'], PDO::PARAM_STR);
                $inscription->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $inscription->bindValue(':ddn', $_POST['ddn'], PDO::PARAM_STR);
                $inscription->bindValue(':avatar', $_FILES['avatar']['name'], PDO::PARAM_STR);
                $inscription->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
                $inscription->bindValue(':cp', $_POST['cp'], PDO::PARAM_STR);
                $inscription->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
                $inscription->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
                $inscription->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
                $inscription->bindValue(':siteWeb', $_POST['siteWeb'], PDO::PARAM_STR);
                $inscription->bindValue(':mot_de_passe', $hashPassword, PDO::PARAM_STR);
                $inscription->execute();
                
                $inscriptionTemp = $db->prepare('SELECT * FROM membres WHERE mail=?'); // creation d'une $_SESSION pour l'inscription d'un utilisateur
                $inscriptionTemp ->execute(array($_POST["mail"]));
                $results = $inscriptionTemp->fetch(PDO::FETCH_ASSOC);
                $inscriptionTemp->closeCursor();
                if ($results) {
                    $_SESSION['inscription']['id'] = $results['id'];
                    $_SESSION['inscription']['nom'] = $results['nom'];
                    $_SESSION['inscription']['prenom'] = $results['prenom'];
                    $_SESSION['inscription']['ddn'] = $results['ddn'];
                    $_SESSION['inscription']['avatar'] = $results['avatar'];
                    $_SESSION['inscription']['adresse'] = $results['adresse'];
                    $_SESSION['inscription']['cp'] = $results['cp'];
                    $_SESSION['inscription']['ville'] = $results['ville'];
                    $_SESSION['inscription']['mail'] = $results['mail'];
                    $_SESSION['inscription']['phone'] = $results['phone'];
                    $_SESSION['inscription']['siteWeb'] = $results['siteWeb'];
                } else {
                    echo "erreur session temporaire";                      
                }
                
                header("Location: formulaire2.php");
                $inscriptionOk = "Inscription réussi !";
                
            } else {
                echo "Erreur : echec de l'inscription !";
                header("Location: formulaire.php");
            }
            
        } // fin if ($_POST)
        
    } catch(PDOException $ex) {
        echo "erreur! !";
    }
?>

