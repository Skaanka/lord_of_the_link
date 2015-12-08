<?php
    session_start();
    // connexion bdd
    require_once('../php/connexion.php');
    //print_r($_SESSION['inscription']);
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

            <form method="post" id="connexion" class="form-inline">
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
                        <label class="sr-only" for="email">Email address</label>
                        <input type="email" class="" id="email" placeholder="Email" name="mail">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="" id="password" placeholder="Password" name="mot_de_passe">
                    </div>
                
                    <input type="submit" class="btn btn-default btn-xs" name="connexion" value="connexion" formaction="login.php">
                    <button type="submit" class="btn btn-default btn-xs">Inscription</button>
                <?php
                    //echo $login_erreur; // TODO affiche message d'erreur : "erreur email ou mot de passe, veuillez réessayer" 
                }
                ?>  
            </form>
        </div>

        <div id="header" class="col-md-8 col-md-offset-2">

        </div>
        <!-------- MENU HEAD ----------->
        <nav class="col-md-8 col-md-offset-2"id="menu-nav" >
            <!------- MENU NAV --------->
            <ul class="navBeauty">
                <button class="menu_str" ><a href="#">Accueil </a></button>
                <button class="menu_str"><a href="#">Portail </a></button>
                <button class="menu_str"><a href="#">Membres </a></button>
                <button class="menu_str"><a href="#">s'enregistrer </a></button>
            </ul>
        </nav>
        <!-------------- FIN MENU NAV ------------------------->







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
                            <input type="text" name="annees_obt" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="intitule" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="ecole" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" name="annees_obt" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="intitule" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="ecole" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" name="annees_obt" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="intitule" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="ecole" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-md-2">
                            <input type="text" name="annees_obt" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="intitule" class="form-control">
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="ecole" class="form-control">
                        </div>
                    </div>
                      </div>
                    </div>
                

                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Experience pro.</h3></div>
                  <div class="panel-body">
                    
                    <div class="row" id="diplomes">
                        <div class="form-group col-md-4">
                            <label for="annees">Période</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Compagnie</label>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Intitulé du poste</label>
                        </div>
                    </div>

                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row cellule">
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-xs-2">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                  </div>
                </div>
                
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Compétences</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6"></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                    if (isset($_SESSION['user']) ) {
                ?>
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Fil d'actu.</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <textarea class="form-control" rows="6"></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                    }
                ?>
                <div class="panel panel-default">
                  <div class="panel-heading"><h3>Portfolio en ligne</h3></div>
                  <div class="panel-body">
                    
                    <div class="form-group col-xs-12">
                        <input type="text" class="form-control" rows="6" placeholder="http://...">
                    </div>
                  </div>
                </div>
                



                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" name="return" class="btn btn-default col-md-offset-1" value="Page précédente" formaction="formulaire.php">
                        <input type="submit" name="submit" class="btn btn-default col-md-offset-5" value="Page suivante" formaction="formulaire_post2.php">
                    </div>
                </div>

            </form>   

        </div>

        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>

    </body>
</html>