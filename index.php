<?php
// detruit la session inscription si elle existe
require_once('php/function.php');
destructionSessionInscription();
//print_r($_SESSION["inscription"]);

//creation de session
session_start();
// connexion bdd
require_once('php/connexion.php');
//parser
require_once('php/parser.php');
//function requete bdd
require_once('php/requete/functionRequete.php');

?>

<!doctype html>
<html lang="fr">
    
    
    <head>
        <meta charset="utf-8">
        <title>LOTL home</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower|Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        <div id="connexionbar" class="col-md-8 col-md-offset-2">
            
            <form id="connexion" class="form-inline" method="POST">
                <?php 
                if ( isset($_SESSION['user']) ) { 
                ?>
                    <div class="form-group">
                        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> 
                        <label for="profil" id="wellcome">&nbsp; Bienvenue <?php echo $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'] ; ?> &nbsp;</label> <!-- TODO STYLE ECHO NOM PRENOM -->
                        <input type="submit" id="profil" class="btn-xs dropdown-toggle" name="profil" value="profil" formaction="index.php<?php echo "?query=" .$_SESSION['user']['id'] . "&" . "pCat=" . 0 ; ?>"> <!--TODO affichage profil utilisateur -->
                        <input type="submit" class="btn-xs dropdown-toggle" name="deconnexion" value="déconnexion" formaction="php/logoff.php">
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

                     <input type="submit" class="dropdown-toggle" name="connexion" value="connexion" formaction="php/login.php">
                    <input type="submit" class="dropdown-toggle" name="" formaction="pages/formulaire/formulaire.php" value="Inscription">
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
            
            <div class="btn-group">
                <a href="index.php">
                    <button type="button" class="dropdown-toggle"> 
                        <img src="img/icons/ring.png" id="home">
                    </button>
                </a>
            </div>
            
            <!-- bouton divertissement -->
            <div class="btn-group" >
              <button type="button" id="btnDivertissement" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divertissement <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php<?php echo "?divCat=" . 0 ; ?>"><img src="img/icons/PSN_logo.png" class="iconMini">&nbsp;PSN</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 1 ; ?>"><img src="img/icons/Xbox_logo.png" class="iconMini">&nbsp;XboxLive</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 2 ; ?>"><img src="img/icons/Steam_logo.png" class="iconMini">&nbsp;Steam</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 3 ; ?>"><img src="img/icons/battlenet_logo.png" class="iconMini">&nbsp;Battle.net</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 4 ; ?>"><img src="img/icons/nintendo_logo.png" class="iconMini">&nbsp;Nintendo</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 5 ; ?>"><img src="img/icons/origin1_logo.png" class="iconMini">&nbsp;Origin</a></li>
              </ul>
            </div>

            <!-- bouton réseaux pro -->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux pro. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php<?php echo "?proCat=" . 0 ; ?>"><img src="img/icons/linkedin_logo.png" class="iconMini">&nbsp;LinkedIn</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 1 ; ?>"><img src="img/icons/viadeo_logo.png" class="iconMini">&nbsp;Viadeo</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 2 ; ?>"><img src="img/icons/xing_logo.png" class="iconMini">&nbsp;xing</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 3 ; ?>"><img src="img/icons/muxi_logo.jpg" class="iconMini">&nbsp;Muxy</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 4 ; ?>"><img src="img/icons/github_logo.png" class="iconMini">&nbsp;GitHub</a></li>
              </ul>
            </div>
            
            <!-- bouton réseaux sociaux-->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux sociaux <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo "?resCat=" . 0 ; ?>"><img src="img/icons/FB_logo.png" class="iconMini">&nbsp;Facebook</a></li>
                <li><a href="<?php echo "?resCat=" . 1 ; ?>"><img src="img/icons/Twitter-logo.png" class="iconMini">&nbsp;Twitter</a></li>
                <li><a href="<?php echo "?resCat=" . 2 ; ?>"><img src="img/icons/YouTube-logo.png" class="iconMini">&nbsp;Youtube</a></li>
                <li><a href="<?php echo "?resCat=" . 3 ; ?>"><img src="img/icons/googleplus_logo.png" class="iconMini">&nbsp;Google+</a></li>
                <li><a href="<?php echo "?resCat=" . 4 ; ?>"><img src="img/icons/Skype_logo.png" class="iconMini">&nbsp;Skype</a></li>
                <li><a href="<?php echo "?resCat=" . 5 ; ?>"><img src="img/icons/instagram_logo.png" class="iconMini">&nbsp;Instagram</a></li>
                <li><a href="<?php echo "?resCat=" . 6 ; ?>"><img src="img/icons/pinterest-logo.png" class="iconMini">&nbsp;Pinterest</a></li>
                <li><a href="<?php echo "?resCat=" . 7 ; ?>"><img src="img/icons/Deezer_logo.png" class="iconMini">&nbsp;Deezer</a></li>
                <li><a href="<?php echo "?resCat=" . 8 ; ?>"><img src="img/icons/Spotify_logo.png" class="iconMini">&nbsp;Spotify</a></li>
                <li><a href="<?php echo "?resCat=" . 9 ; ?>"><img src="img/icons/Viber-logo.png" class="iconMini">&nbsp;Viber</a></li>
              </ul>
            </div>
            
        </div><!-- Fin de menu navbar -->

        <!-- contenu principal -->
        
        
        
        <div id="sidebarMembres" class="col-md-2 col-md-offset-2">
            <h2>Liste des membres</h2><br/>
            <ul id="membres" >
                <?php
                //affichage des membres
                $affichageMembre = $db->query('SELECT id, prenom, nom FROM membres');
                while ($value = $affichageMembre->fetch()) {
                ?>
                <li id="animated-example" class="animated fadeInLeft"><a href="index.php<?php echo "?query=" .$value['id'] . "&" . "cat=" . 0 ; ?>"><?php echo htmlspecialchars($value["prenom"]) . " " . htmlspecialchars($value["nom"]) ?></a></li>
                <?php
                }
                $affichageMembre->closeCursor();
                ?>
            </ul>
        </div>
        
        <main class="col-md-6">
            
            <?php
            include('php/switchIndex.php'); // affichage du contenu de la page index.
            
            if (isset($url["cat"])) { //perd le param query lors de l'affichage d'une page profil !
                affichageMembre();
            ?>
            <div id="sidebarCat" class="col-md-3 ">
                <ul>
                <li><a href="index.php<?php echo "?query=" . $value['id'] . "&" . "cat=" . 0 ; ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Infos perso</a></li>
                <li><a href="index.php<?php echo "?query=" . $value['id'] . "&" . "cat=" . 2 ; ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Divertissement</a></li>
                <li><a href="index.php<?php echo "?query=" . $value['id'] . "&" . "cat=" . 3 ; ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Réseaux pro.</a></li>
                <li><a href="index.php<?php echo "?query=" . $value['id'] . "&" . "cat=" . 4 ; ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>&nbsp;Réseaux sociaux</a></li>
                </ul>
            </div>
            <?php
            } else {
                echo "";
            }
            ?>
        </main>
        
        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>
        
        <!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        
    </body>
</html>