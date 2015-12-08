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

                    <button type="submit" class="btn btn-default btn-xs">Connexion</button>
                    <button type="submit" class="btn btn-default btn-xs">Inscription</button>
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

                <div class="form-group col-md-12" >
                    
                    
                    

                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3"><img src="img/1449593217_girl.png" id="avatar" class="img-responsive img-circle" alt="Responsive image" ></div>
                    
                </div>

                <div class="row" id="espaceform">
                    <div class="form-group col-md-6">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="nom" name="nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="firstname">Prenom</label>
                        <input type="text" class="form-control" id="firstname" placeholder="prenom" name="prenom">
                    </div>
                    <div class="form-group col-md-6 col-md-offset-3">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Paswword" name="password">
                    </div>
                </div>
                

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="birthD">date de naissance</label>
                        <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="ddn">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" placeholder="adresse" name="adresse">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cp">Code Postal</label>
                        <input type="text" class="form-control" id="cp" placeholder="code postal" name="cp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" placeholder="Ville" name="ville">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail" name="mail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Téléphone mobile</label>
                        <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="phone">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="webSite">Site web-perso</label>
                        <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="siteWeb">
                    </div>
                    <label id="spanAvatar"for="pics" class=" col-md-3">Avatar</label>
                    <div class="col-md-6">
                        <input type="file" class="" id="pics" name="avatar">
                    </div>
                </div>
                
                <div id="bouton" class="row">
                    <div class="col-md-offset-9">
                        <input type="button" class="btn btn-default" value="Page suivante">
                    </div>
                </div>
                
            </form>   

        </div>

        <div id="footer" class="col-md-8 col-md-offset-2">
        </div>

    </body>
</html>