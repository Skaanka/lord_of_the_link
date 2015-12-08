<?php 
// connexion bdd
    session_start();
    require_once('../php/connexion.php');
    
if (isset($_POST['submit'])){
        $repertoire_upload = "c://xampp//htdocs//lord_of_the_link//uploads//";
        $fichier_upload = $repertoire_upload . basename($_FILES['avatar']['name']);
        //echo $fichier_upload;
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $fichier_upload)) {
            echo "";
        } else {
            echo "Erreur envoie image";
        }
    }

    try { 
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
                $inscriptionOk = "Inscription réussi !";
            } else {
                echo "Erreur : echec de l'inscription !";
            }
            
        } // fin if ($_POST)
        
    } catch(PDOException $ex) {
        echo "erreur! !";
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Base Page HTML5</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <div id="wrapper">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pics">Avatar</label>
                    <input type="file" class="form-control" id="pics" name="avatar">
                </div>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" placeholder="nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="firstname">Prenom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="birthD">date de naissance</label>
                    <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="ddn">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="adresse" name="adresse">
                </div>
                <div class="form-group">
                    <label for="cp">Code Postal</label>
                    <input type="text" class="form-control" id="cp" placeholder="code postal" name="cp">
                </div>
                <div class="form-group">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" id="city" placeholder="Ville" name="ville">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="mail">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone mobile</label>
                    <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="phone">
                </div>
                <div class="form-group">
                    <label for="webSite">Site web-perso</label>
                    <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="siteWeb">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="mot_de_passe">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Envoyer" class="form-control">
                </div>
            </form>   
            
            
            
        </div>
        
    </body>
</html>