<?php
    // détruit la $_SESSION["inscription"] si elle existe
//    if ( isset ($_SESSION["inscription"])) {
//        unset($_SESSION["inscription"]);
//    }

    //creation de session
    session_start();
    print_r($_SESSION['inscription']);
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
            
            <form id="connexion" class="form-inline" method="POST">
                <?php 
                if (!empty($_SESSION['user']) ) { 
                ?>
                    <div class="form-group">
                        <label for="profil">Bienvenue <?php echo $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'] ; ?></label> <!-- TODO STYLE ECHO NOM PRENOM -->
                        <input type="submit" id="profil" class="btn btn-default btn-xs" name="profil" value="profil" formaction="#.php"> <!--TODO PHP-->
                        <input type="submit" class="btn btn-default btn-xs" name="deconnexion" value="déconnexion" formaction="logoff.php">
                    </div>
                <?php
                } elseif ( empty($_SESSION['user']) )  {
                ?>
                    <div class="form-group">
                        <label class="sr-only" for="mail">Email address</label>
                        <input type="email" class="mail" id="mail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="" id="password" placeholder="Password">
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
                <li><a href="#"><img src="../img/icons/PSN_logo.png" class="iconMini">&nbsp;PSN</a></li>
                <li><a href="#"><img src="../img/icons/Xbox_logo.png" class="iconMini">&nbsp;XboxLive</a></li>
                <li><a href="#"><img src="../img/icons/Steam_logo.png" class="iconMini">&nbsp;Steam</a></li>
                <li><a href="#"><img src="../img/icons/battlenet_logo.png" class="iconMini">&nbsp;Battle.net</a></li>
                <li><a href="#"><img src="../img/icons/nintendo_logo.png" class="iconMini">&nbsp;Nintendo</a></li>
                <li><a href="#"><img src="../img/icons/origin1_logo.png" class="iconMini">&nbsp;Origin</a></li>
              </ul>
            </div>

            <!-- bouton réseaux pro -->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux pro. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="../img/icons/linkedin_logo.png" class="iconMini">&nbsp;LinkedIn</a></li>
                <li><a href="#"><img src="../img/icons/viadeo_logo.png" class="iconMini">&nbsp;Viadeo</a></li>
                <li><a href="#"><img src="../img/icons/xing_logo.png" class="iconMini">&nbsp;xing</a></li>
                <li><a href="#"><img src="../img/icons/muxi_logo.jpg" class="iconMini">&nbsp;Muxy</a></li>
                <li><a href="#"><img src="../img/icons/github_logo.png" class="iconMini">&nbsp;GitHub</a></li>
              </ul>
            </div>
            
            <!-- bouton réseaux sociaux-->
            <div class="btn-group">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Réseaux sociaux <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="../img/icons/FB_logo.png" class="iconMini">&nbsp;Facebook</a></li>
                <li><a href="#"><img src="../img/icons/Twitter-logo.png" class="iconMini">&nbsp;Twitter</a></li>
                <li><a href="#"><img src="../img/icons/YouTube-logo.png" class="iconMini">&nbsp;Youtube</a></li>
                <li><a href="#"><img src="../img/icons/googleplus_logo.png" class="iconMini">&nbsp;Google+</a></li>
                <li><a href="#"><img src="../img/icons/Skype_logo.png" class="iconMini">&nbsp;Skype</a></li>
                <li><a href="#"><img src="../img/icons/instagram_logo.png" class="iconMini">&nbsp;Instagram</a></li>
                <li><a href="#"><img src="../img/icons/pinterest-logo.png" class="iconMini">&nbsp;Pinterest</a></li>
                <li><a href="#"><img src="../img/icons/Deezer_logo.png" class="iconMini">&nbsp;Deezer</a></li>
                <li><a href="#"><img src="../img/icons/Spotify_logo.png" class="iconMini">&nbsp;Spotify</a></li>
                <li><a href="#"><img src="../img/icons/Viber-logo.png" class="iconMini">&nbsp;Viber</a></li>
              </ul>
            </div>
            
        </div><!-- Fin de menu navbar -->







        <div id="wrapper" class="col-md-8 col-md-offset-2">
            <form method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">  

                <div class="form-group col-md-12" >
                    
                    
                    

                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3"><img src="../img/Avatar-512.png" id="avatar" class="img-responsive img-circle" alt="Responsive image" ></div>
                    
                </div>

                <div class="row" id="espaceform">
                    <div class="form-group col-md-6">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="nom" name="nom" value="<?php  if ( !empty($_SESSION['inscription']['nom'])) {echo $_SESSION['inscription']['nom'];}  ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="firstname">Prenom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="prenom" name="prenom" value="<?php  if ( !empty($_SESSION['inscription']['prenom'])) {echo $_SESSION['inscription']['prenom'];}  ?>">
                    </div>
                    <div class="form-group col-md-6 col-md-offset-3">
                        <label for="password">Password</label>     <!-- Ajout d'un  champs confirmation mot de passe ? -->
                        <input type="text" class="form-control" id="password" placeholder="Paswword" name="mot_de_passe" value="">
                    </div>
                </div>
                

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="birthD">date de naissance</label>
                        <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="ddn" value="<?php  if ( !empty($_SESSION['inscription']['ddn'])) { echo $_SESSION['inscription']['ddn'];}  ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" placeholder="adresse" name="adresse" value="<?php  if ( !empty($_SESSION['inscription']['adresse'])) { echo $_SESSION['inscription']['adresse'];}  ?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cp">Code Postal</label>
                        <input type="text" class="form-control" id="cp" placeholder="code postal" name="cp" value="<?php  if ( !empty($_SESSION['inscription']['cp'])) { echo $_SESSION['inscription']['cp'];}  ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" placeholder="Ville" name="ville" value="<?php  if ( !empty($_SESSION['inscription']['ville'])) { echo $_SESSION['inscription']['ville'];}  ?>">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail" name="mail" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Téléphone mobile</label>
                        <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="phone" value="<?php  if ( !empty($_SESSION['inscription']['phone'])) { echo $_SESSION['inscription']['phone'];}  ?>">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="webSite">Site web-perso</label>
                        <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="siteWeb" value="<?php  if ( !empty($_SESSION['inscription']['siteWeb'])) { echo $_SESSION['inscription']['siteWeb'];}  ?>">
                    </div>
                    <label id="spanAvatar"for="pics" class=" col-md-3">Avatar</label>
                    <div class="col-md-6">
                        <input type="file" class="" id="pics" name="avatar" value="<?php  if ( !empty($_SESSION['inscription']['avatar'])) { echo $_SESSION['inscription']['avatar'];}  ?>">
                    </div>
                </div>
                
                <div id="bouton" class="row">
                    <div class="col-md-offset-9">
                        <input type="submit" class="btn btn-primary" name="submit" value="Page suivante" formaction="formulaire_post.php">
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