<?php
session_start();
require_once('php/connexion.php');
    
 if (isset($_POST["deconnexion"])) { // TODO bouton deconnexion 
    unset($_SESSION["user"]);
    header("Location: /lord_of_the_link/pages/login.php");
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
            <form method="post">
                <div class="form-group">
                    <input type="submit" name="deconnexion" value="deconnexion">
                </div>
            </form> 
        </div>
        
    </body>
</html>