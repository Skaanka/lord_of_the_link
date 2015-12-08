<!doctype html>
<html lang="fr">


    <head>
        <meta charset="utf-8">
        <title>LOTL formulaire</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div id="connexionbar" class="col-md-8 col-md-offset-2">

            <form id="connexion" class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="email" class="" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                    <input type="password" class="" id="exampleInputPassword3" placeholder="Password">
                </div>

                <input type="submit" class="btn btn-default btn-xs" value="Connexion">
                <button type="submit" class="btn btn-default btn-xs" value="Inscription">
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
            <form class="col-md-6 col-md-offset-3">  


                <h1>Sociaux</h1><br/>


                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Divertissement</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/PSN_logo.png">
                            <label for="psn" class="col-sm-2 control-label celSoc">Id. PSN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="psn" placeholder="Identifiant PSN">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Xbox_logo.png">
                            <label for="xbox" class="col-sm-2 control-label celSoc">XboxLive</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xbox" placeholder="Identifiant XboxLive">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Steam_logo.png">
                            <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="steam" placeholder="Identifiant Steam">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/battlenet_logo.png">
                            <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="battlenet" placeholder="Identifiant Battle.net">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/nintendo_logo.png">
                            <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="nintendo" placeholder="Identifiant Nintendo">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/origin1_logo.png">
                            <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="origin" placeholder="Identifiant Origin">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Réseaux Pro.</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/linkedin_logo.png">
                            <label for="linkedin" class="col-sm-2 control-label celSoc">LinkedIn</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="linkedin" placeholder="LikedIn">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/viadeo_logo.png">
                            <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viadeo" placeholder="Viadeo">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/xing_logo.png">
                            <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="xing" placeholder="Xing">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/muxi_logo.jpg">
                            <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="muxy" placeholder="Muxy">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Réseaux Sociaux</h3></div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/FB_logo.png">
                            <label for="facebook" class="col-sm-2 control-label celSoc">Facebook</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="facebook" placeholder="Facebook">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Twitter-logo.png">
                            <label for="Twitter" class="col-sm-2 control-label celSoc">Twitter</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="twitter" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/YouTube-logo.png">
                            <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="youtube" placeholder="YouTube">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/googleplus_logo.png">
                            <label for="google" class="col-sm-2 control-label celSoc">Google+</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="google" placeholder="Google+">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Skype_logo.png">
                            <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="skype" placeholder="Skype">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/instagram_logo.png">
                            <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="instagram" placeholder="Instagram">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/pinterest-logo.png">
                            <label for="pinterest" class="col-sm-2 control-label celSoc">Pinterest</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="pinterest" placeholder="Pinterest">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Deezer_logo.png">
                            <label for="deezer" class="col-sm-2 control-label celSoc">Deezer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="deezer" placeholder="Deezer">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Spotify_logo.png">
                            <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="spotify" placeholder="Spotify">
                            </div>
                        </div>
                        <div class="row form-group">
                            <img class="icons col-sm-2" src="img/icons/Viber-logo.png">
                            <label for="Viber" class="col-sm-2 control-label celSoc">Viber</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control celSoc" id="viber" placeholder="Viber">
                            </div>
                        </div>

                    </div>
                </div>


                <div id="bouton" class="row">
                    <div class="">
                        <input type="submit" class="btn btn-primary col-md-offset-5" value="Valider">
                    </div>
                </div>

            </form>   

        </div>

        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>

    </body>
</html>