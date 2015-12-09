<?php
    if ( isset ($_SESSION["inscription"])) {
        unset($_SESSION["inscription"]);
    }
    session_start();
    // connexion bdd
    require_once('../php/connexion.php');
    print_r($_SESSION["inscription"]);
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
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="mail" id="exampleInputEmail3" placeholder="Email" name="mail">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword3">Password</label>
                        <input type="password" class="" id="exampleInputPassword3" placeholder="Password" name="mot_de_passe">
                    </div>

                     <input type="submit" class="btn btn-default btn-xs" name="connexion" value="connexion" formaction="login.php">
                    <input type="submit" class="btn btn-default btn-xs" name="" formaction="" value="Inscription">
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
            
            <button type="button" class="btn btn-success" href="index.php">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button>
            
            <!-- bouton divertissement -->
            <div class="btn-group" >
              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <form method="POST" class="col-md-6 col-md-offset-3">  

                
                <h1>Parcour pro.</h1><br/>

                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Diplomes</h3></div>
                    <div class="panel-body">
                    <div class="row" id="diplomes">
                        
                        <div class="form-group col-md-2">
                            <label for="annees">Années d'obt.</label>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="intitule">Intitulé</label>

                        </div>
                        <div class="form-group col-md-5">
                            <label for="ecole">Ecole</label>
                        </div>
                    </div>
                            
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text"name="intitule" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="ecole">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt2">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule2">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control"  name="ecole2">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt3">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule3">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="ecole3">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" class="form-control" name="annees_obt4">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="intitule4">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="ecole4">
                        </div>
                    </div>
                      </div>
                    </div>
                

                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Experience pro.</h3></div>
                  <div class="panel-body">
                    
                    <div class="row" id="diplomes">
                        <div class="form-group col-md-4">
                            <label for="periode">Période</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="compagnie">Compagnie</label>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="intitulePoste">Intitulé du poste</label>
                        </div>
                    </div>

                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut2">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin2">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie2">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste2">
                        </div>
                    </div>
                   <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut3">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin3">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie3">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste3">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut4">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin4">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie4">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste4">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut5">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin5">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie5">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste5">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text"  class="form-control" name="periode_debut6">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control" name="periode_fin6">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="compagnie6">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="poste6">
                        </div>
                    
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Compétences</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="competences"></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                    //if (isset($_SESSION['user']) ) {
                ?>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Fil d'actu.</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6" name="messages"></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                   // }
                ?>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Portfolio en ligne</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <input type="text" class="form-control" rows="6" placeholder="http://..." name="porte_folio">
                    </div>
                  </div>
                </div>
                



                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" class="btn btn-default col-md-offset-1" value="Page précédente" formaction="formulaire.php" name="">
                        <input type="submit" class="btn btn-default col-md-offset-5" value="Page suivante" formaction="formulaire_post2.php" name="submit2">
                    </div>
                </div>

            </form>   

        </div>

        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>

    </body>
</html>