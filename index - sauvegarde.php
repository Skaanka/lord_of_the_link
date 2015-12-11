<?php
    if ( isset ($_SESSION["inscription"])) {
        unset($_SESSION["inscription"]);
    }
    session_start();
    // connexion bdd
    require_once('php/connexion.php');


/* tentative de front control */
if( isset( $_GET["action"] )) {
    $action = $_GET['action'];
} else {
    $action = "home";
}


switch($action) {
    case "home":
        $partiel = "categories";
        break;
}


?>

<!doctype html>
<html lang="fr">
    
    
    <head>
        <meta charset="utf-8">
        <title>LOTL home</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <div id="connexionbar" class="col-md-8 col-md-offset-2">
            
            <form id="connexion" class="form-inline" method="POST">
                <?php 
                if (isset($_SESSION['user']) ) { 
                ?>
                    <div class="form-group">
                        <label for="profil">Bienvenue <?php echo $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'] ; ?></label> <!-- TODO STYLE ECHO NOM PRENOM -->
                        <input type="submit" id="profil" class="btn btn-default btn-xs" name="profil" value="profil" formaction="#.php">
                        <input type="submit" class="btn btn-default btn-xs" name="deconnexion" value="déconnexion" formaction="logoff.php">
                    </div>
                <?php
                } elseif ( empty($_SESSION['user']) )  {
                ?>
                    <div class="form-group">
                        <label class="sr-only" for="mail">Email address</label>
                        <input type="email" class="mail" id="mail" placeholder="Email" name="mail">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="" id="password" placeholder="Password" name="mot_de_passe">
                    </div>

                     <input type="submit" class="dropdown-toggle" name="connexion" value="connexion" formaction="login.php">
                    <input type="submit" class="dropdown-toggle" name="" formaction="" value="Inscription">
                <?php
                    //echo $login_erreur; // TODO affiche message d'erreur : "erreur email ou mot de passe, veuillez réessayer" 
                }
                ?>
            </form>
        </div>

        <div id="header" class="col-md-8 col-md-offset-2">

        </div>
        
        
        <!-- menu navbar en dropdown -->
        <div class="row col-md-8 col-md-offset-2" id="menu-nav">
            
            <button type="button" class="dropdown-toggle" href="index.php">
                <img src="img/icons/ring.png" id="home">
            </button>
            
            <!-- bouton divertissement -->
            <div class="btn-group" >
              <button type="button" id="btnDivertissement" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divertissement <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="img/icons/PSN_logo.png" class="iconMini">&nbsp;PSN</a></li>
                <li><a href="#"><img src="img/icons/Xbox_logo.png" class="iconMini">&nbsp;XboxLive</a></li>
                <li><a href="#"><img src="img/icons/Steam_logo.png" class="iconMini">&nbsp;Steam</a></li>
                <li><a href="#"><img src="img/icons/battlenet_logo.png" class="iconMini">&nbsp;Battle.net</a></li>
                <li><a href="#"><img src="img/icons/nintendo_logo.png" class="iconMini">&nbsp;Nintendo</a></li>
                <li><a href="#"><img src="img/icons/origin1_logo.png" class="iconMini">&nbsp;Origin</a></li>
              </ul>
            </div>

            <!-- bouton réseaux pro -->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux pro. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="img/icons/linkedin_logo.png" class="iconMini">&nbsp;LinkedIn</a></li>
                <li><a href="#"><img src="img/icons/viadeo_logo.png" class="iconMini">&nbsp;Viadeo</a></li>
                <li><a href="#"><img src="img/icons/xing_logo.png" class="iconMini">&nbsp;xing</a></li>
                <li><a href="#"><img src="img/icons/muxi_logo.jpg" class="iconMini">&nbsp;Muxy</a></li>
                <li><a href="#"><img src="img/icons/github_logo.png" class="iconMini">&nbsp;GitHub</a></li>
              </ul>
            </div>
            
            <!-- bouton réseaux sociaux-->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux sociaux <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="img/icons/FB_logo.png" class="iconMini">&nbsp;Facebook</a></li>
                <li><a href="#"><img src="img/icons/Twitter-logo.png" class="iconMini">&nbsp;Twitter</a></li>
                <li><a href="#"><img src="img/icons/YouTube-logo.png" class="iconMini">&nbsp;Youtube</a></li>
                <li><a href="#"><img src="img/icons/googleplus_logo.png" class="iconMini">&nbsp;Google+</a></li>
                <li><a href="#"><img src="img/icons/Skype_logo.png" class="iconMini">&nbsp;Skype</a></li>
                <li><a href="#"><img src="img/icons/instagram_logo.png" class="iconMini">&nbsp;Instagram</a></li>
                <li><a href="#"><img src="img/icons/pinterest-logo.png" class="iconMini">&nbsp;Pinterest</a></li>
                <li><a href="#"><img src="img/icons/Deezer_logo.png" class="iconMini">&nbsp;Deezer</a></li>
                <li><a href="#"><img src="img/icons/Spotify_logo.png" class="iconMini">&nbsp;Spotify</a></li>
                <li><a href="#"><img src="img/icons/Viber-logo.png" class="iconMini">&nbsp;Viber</a></li>
              </ul>
            </div>
            
        </div><!-- Fin de menu navbar -->

        <!-- contenu principal -->
        
        
        
        <div id="sidebarMembres" class="col-md-2 col-md-offset-2">
            <h2>Liste des membres</h2><br/>
            <ul id="membres" >
                <li><a href="#">nom des membres</a></li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
                <li>nom des membres</li>
            </ul>
        </div>
        
        <main class="col-md-6">
            
            <?php
                include("pages/$partiel.php");
            ?>
            
            
            <div id="sidebarCat" class="col-md-3 panel panel-primary">
                <ul><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Divertissement</ul>
                <ul><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Réseaux pro.</ul>
                <ul><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Réseaux sociaux</ul>
            </div>
            
        </main>
        
        

        

        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>
        
        <!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        

    </body>
</html>