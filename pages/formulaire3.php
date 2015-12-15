<?php
//creation de session
session_start();
//print_r($_SESSION['inscription']);
// connexion bdd
require_once('../php/connexion.php');
?>

<!doctype html>
<html lang="fr">
    
    
    <head>
        <meta charset="utf-8">
        <title>LOTL formulaire</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        
        <div id="connexionbar" class="col-md-8 col-md-offset-2">
            
            <form method="POST" id="connexion" class="form-inline" method="POST">
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
                    <input type="submit" class="dropdown-toggle" name="" formaction="formulaire.php" value="Inscription">
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
            
            <a href="../index.php">
                <button type="button" class="dropdown-toggle" >
                    <img src="../img/icons/ring.png" id="home">
                </button>
            </a>
            
            <!-- bouton divertissement -->
            <div class="btn-group" >
              <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divertissement <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php<?php echo "?divCat=" . 0 ; ?>"><img src="../img/icons/PSN_logo.png" class="iconMini">&nbsp;PSN</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 1 ; ?>"><img src="../img/icons/Xbox_logo.png" class="iconMini">&nbsp;XboxLive</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 2 ; ?>"><img src="../img/icons/Steam_logo.png" class="iconMini">&nbsp;Steam</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 3 ; ?>"><img src="../img/icons/battlenet_logo.png" class="iconMini">&nbsp;Battle.net</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 4 ; ?>"><img src="../img/icons/nintendo_logo.png" class="iconMini">&nbsp;Nintendo</a></li>
                <li><a href="index.php<?php echo "?divCat=" . 5 ; ?>"><img src="../img/icons/origin1_logo.png" class="iconMini">&nbsp;Origin</a></li>
              </ul>
            </div>

            <!-- bouton réseaux pro -->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux pro. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="index.php<?php echo "?proCat=" . 0 ; ?>"><img src="../img/icons/linkedin_logo.png" class="iconMini">&nbsp;LinkedIn</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 1 ; ?>"><img src="../img/icons/viadeo_logo.png" class="iconMini">&nbsp;Viadeo</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 2 ; ?>"><img src="../img/icons/xing_logo.png" class="iconMini">&nbsp;xing</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 3 ; ?>"><img src="../img/icons/muxi_logo.jpg" class="iconMini">&nbsp;Muxy</a></li>
                <li><a href="index.php<?php echo "?proCat=" . 4 ; ?>"><img src="../img/icons/github_logo.png" class="iconMini">&nbsp;GitHub</a></li>
              </ul>
            </div>
            
            <!-- bouton réseaux sociaux-->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux sociaux <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo "?resCat=" . 0 ; ?>"><img src="../img/icons/FB_logo.png" class="iconMini">&nbsp;Facebook</a></li>
                <li><a href="<?php echo "?resCat=" . 1 ; ?>"><img src="../img/icons/Twitter-logo.png" class="iconMini">&nbsp;Twitter</a></li>
                <li><a href="<?php echo "?resCat=" . 2 ; ?>"><img src="../img/icons/YouTube-logo.png" class="iconMini">&nbsp;Youtube</a></li>
                <li><a href="<?php echo "?resCat=" . 3 ; ?>"><img src="../img/icons/googleplus_logo.png" class="iconMini">&nbsp;Google+</a></li>
                <li><a href="<?php echo "?resCat=" . 4 ; ?>"><img src="../img/icons/Skype_logo.png" class="iconMini">&nbsp;Skype</a></li>
                <li><a href="<?php echo "?resCat=" . 5 ; ?>"><img src="../img/icons/instagram_logo.png" class="iconMini">&nbsp;Instagram</a></li>
                <li><a href="<?php echo "?resCat=" . 6 ; ?>"><img src="../img/icons/pinterest-logo.png" class="iconMini">&nbsp;Pinterest</a></li>
                <li><a href="<?php echo "?resCat=" . 7 ; ?>"><img src="../img/icons/Deezer_logo.png" class="iconMini">&nbsp;Deezer</a></li>
                <li><a href="<?php echo "?resCat=" . 8 ; ?>"><img src="../img/icons/Spotify_logo.png" class="iconMini">&nbsp;Spotify</a></li>
                <li><a href="<?php echo "?resCat=" . 9 ; ?>"><img src="../img/icons/Viber-logo.png" class="iconMini">&nbsp;Viber</a></li>
              </ul>
            </div>
            
        </div><!-- Fin de menu navbar -->






        <div id="wrapper" class="col-md-8 col-md-offset-2">
            <form method="POST" class="col-md-6 col-md-offset-3">  

                
                <h1>Sociaux</h1><br/>

           
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Divertissement</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/PSN_logo.png">
                            <label for="psn" class="col-sm-2 control-label celSoc">PSN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="psn" placeholder="Identifiant Playstation Network" name="psn" value="<?php  if ( !empty($_SESSION['inscription']['psn'])) {echo $_SESSION['inscription']['psn'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Xbox_logo.png">
                            <label for="xbox" class="col-sm-2 control-label celSoc">XboxLive</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xbox" placeholder="Identifiant XboxLive" name="xboxlive" value="<?php  if ( !empty($_SESSION['inscription']['xboxlive'])) {echo $_SESSION['inscription']['xboxlive'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Steam_logo.png">
                            <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="steam" placeholder="Identifiant Steam" name="steam" value="<?php  if ( !empty($_SESSION['inscription']['steam'])) {echo $_SESSION['inscription']['steam'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/battlenet_logo.png">
                            <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="battlenet" placeholder="Identifiant Battle.net" name="battlenet" value="<?php  if ( !empty($_SESSION['inscription']['battlenet'])) {echo $_SESSION['inscription']['battlenet'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/nintendo_logo.png">
                            <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="nintendo" placeholder="Identifiant Nintendo" name="nintendo" value="<?php  if ( !empty($_SESSION['inscription']['nintendo'])) {echo $_SESSION['inscription']['nintendo'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/origin1_logo.png">
                            <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="origin" placeholder="Identifiant Origin" name="origin" value="<?php  if ( !empty($_SESSION['inscription']['origin'])) {echo $_SESSION['inscription']['origin'];}  ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Réseaux Pro.</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/linkedin_logo.png">
                            <label for="linkedin" class="col-sm-2 control-label celSoc">LinkedIn</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="linkedin" placeholder="LikedIn" name="linkedin" value="<?php  if ( !empty($_SESSION['inscription']['linkedin'])) {echo $_SESSION['inscription']['linkedin'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/viadeo_logo.png">
                            <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viadeo" placeholder="Viadeo" name="viadeo" value="<?php  if ( !empty($_SESSION['inscription']['viadeo'])) {echo $_SESSION['inscription']['viadeo'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/xing_logo.png">
                            <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xing" placeholder="Xing" name="xing" value="<?php  if ( !empty($_SESSION['inscription']['xing'])) {echo $_SESSION['inscription']['xing'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/muxi_logo.jpg">
                            <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="muxy" placeholder="Muxy" name="muxy" value="<?php  if ( !empty($_SESSION['inscription']['muxy'])) {echo $_SESSION['inscription']['muxy'];}  ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Réseaux Sociaux</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/FB_logo.png">
                            <label for="facebook" class="col-sm-2 control-label celSoc">Facebook</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="facebook" placeholder="Facebook" name="facebook" value="<?php  if ( !empty($_SESSION['inscription']['facebook'])) {echo $_SESSION['inscription']['facebook'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Twitter-logo.png">
                            <label for="Twitter" class="col-sm-2 control-label celSoc">Twitter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="twitter" placeholder="Twitter" name="twitter" value="<?php  if ( !empty($_SESSION['inscription']['twitter'])) {echo $_SESSION['inscription']['twitter'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/YouTube-logo.png">
                            <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="youtube" placeholder="YouTube" name="youtube" value="<?php  if ( !empty($_SESSION['inscription']['youtube'])) {echo $_SESSION['inscription']['youtube'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/googleplus_logo.png">
                            <label for="google" class="col-sm-2 control-label celSoc">Google+</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="google" placeholder="Google+" name="google" value="<?php  if ( !empty($_SESSION['inscription']['google'])) {echo $_SESSION['inscription']['google'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Skype_logo.png">
                            <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="skype" placeholder="Skype" name="skype" value="<?php  if ( !empty($_SESSION['inscription']['skype'])) {echo $_SESSION['inscription']['skype'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/instagram_logo.png">
                            <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="instagram" placeholder="Instagram" name="instagram" value="<?php  if ( !empty($_SESSION['inscription']['instagram'])) {echo $_SESSION['inscription']['instagram'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/pinterest-logo.png">
                            <label for="pinterest" class="col-sm-2 control-label celSoc">Pinterest</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="pinterest" placeholder="Pinterest" name="pinterest" value="<?php  if ( !empty($_SESSION['inscription']['pinterest'])) {echo $_SESSION['inscription']['pinterest'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Deezer_logo.png">
                            <label for="deezer" class="col-sm-2 control-label celSoc">Deezer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="deezer" placeholder="Deezer" name="deezer" value="<?php  if ( !empty($_SESSION['inscription']['deezer'])) {echo $_SESSION['inscription']['deezer'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Spotify_logo.png">
                            <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="spotify" placeholder="Spotify" name="spotify" value="<?php  if ( !empty($_SESSION['inscription']['spotify'])) {echo $_SESSION['inscription']['spotify'];}  ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="../img/icons/Viber-logo.png">
                            <label for="Viber" class="col-sm-2 control-label celSoc">Viber</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viber" placeholder="Viber" name="viber" value="<?php  if ( !empty($_SESSION['inscription']['viber'])) {echo $_SESSION['inscription']['viber'];}  ?>">
                            </div>
                        </div>

                    </div>
                </div>
                

                
                



                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" class="btn btn-default col-md-offset-1" value="Page précédente" name="return" formaction="formulaire2.php">
                        <input type="submit" class="btn btn-default col-md-offset-5" value="Page suivante" name="submit" formaction="formulaire_post3.php">
                    </div>
                </div>

            </form>   

        </div>

        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>
        
        <!-- Liaison bilbliothèque javascript bootstrap et Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>