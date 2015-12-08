<?php
    // connexion bdd
    require_once('../php/connexion.php');

    try { 
        if ( isset($_POST['submit']) ) {
            //nettoyer les espace non voulue 
            $nom = trim($_POST["nom"]);
            $prenom = trim($_POST["prenom"]);
            $ddn = trim($_POST["ddn"]);
            $avatar = trim($_POST["avatar"]);
            $adresse = trim($_POST["adresse"]);
            $cp = trim($_POST["cp"]);
            $ville = trim($_POST["ville"]);
            $mail = trim($_POST["mail"]);
            $phone = trim($_POST["phone"]);
            $siteWeb = trim($_POST["siteWeb"]);
            $password = trim($_POST["password"]);
            
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password) ) { // verifie
                //hacher le mot de passe :
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);

                // ajout d'un membre dans la bdd
                $inscription = $db->prepare("INSERT INTO membres (id, nom, prenom, ddn, avatar, adresse, cp, ville, mail, phone, siteWeb, mot_de_passe) VALUES (:id, :nom, :prenom, :ddn, :avatar, :adresse, :cp, :ville, :mail, :phone, :siteWeb, :mot_de_passe)");
                $inscription->bindValue(':id' , '', PDO::PARAM_INT);
                $inscription->bindValue(':nom' , $_POST['nom'], PDO::PARAM_STR);
                $inscription->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $inscription->bindValue(':ddn', $_POST['ddn'], PDO::PARAM_STR);
                $inscription->bindValue(':avatar', $_POST['avatar'], PDO::PARAM_STR);
                $inscription->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
                $inscription->bindValue(':cp', $_POST['cp'], PDO::PARAM_STR);
                $inscription->bindValue(':ville', $_POST['ville'], PDO::PARAM_STR);
                $inscription->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
                $inscription->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
                $inscription->bindValue(':siteWeb', $_POST['siteWeb'], PDO::PARAM_STR);
                $inscription->bindValue(':mot_de_passe', $hashPassword, PDO::PARAM_STR);
                $inscription->execute();
                $inscriptionOk = "Inscription réussi !";
            } else {
                echo "Erreur : echec de l'inscription ! Try Again";
            }
            
        } // fin if ($_POST)
        
    } catch(PDOException $ex) {
        echo "erreur! !";
    }
?>
