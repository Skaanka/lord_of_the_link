<?php
    session_start();
    require_once('../ ');

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
                echo "pseudo ou mot de passe invalide.";
            }
        }
    }
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
            <form method="POST">
                <div class="form-group">
                    <label for="login">login</label>
                    <input type="text" class="form-control" id="login" name="mail">
                </div>
                <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" name="mot_de_passe">
                </div>
                <div class="form-group">
                    <input type="submit" name="connexion" value="Connexion" class="form-control">
                </div>
            </form>   
            
            
            
        </div>
        
    </body>
</html>
