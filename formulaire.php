<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>LOTL formulaire</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <div id="header" class="col-md-8 col-md-offset-2">
            <h1 class="col-md-6 col-md-offset-2">Lord of the links</h1>
        
            <form class="connexion" id="connexion" class="form-inline">
              <div class="form-group col-md-2">
                <label class="sr-only " for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>
              <div class="form-group col-md-2">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-default">Sign in</button>
            </form>

                <!-------- MENU HEAD ----------->
                    <nav id="menu-nav" >
                    <!------- MENU NAV --------->
                        <ul class="navBeauty">
                            <button class="menu_str" ><a href="#">Accueil </a></button>
                            <button class="menu_str"><a href="#">Portail </a></button>
                            <button class="menu_str"><a href="#">Membres </a></button>
                            <button class="menu_str"><a href="#">s'enregistrer </a></button>
                        </ul>
                </nav>
                <!-------------- FIN MENU NAV ------------------------->

                </div>
        </div>
        
        
        
        
        <div id="wrapper" class="col-md-8 col-md-offset-2">
            <form class="col-md-6 col-md-offset-2">  
                <div class="form-group col-md-12 rows-4" >
                    <label for="pics ">Avatar</label>
                    <input type="file" class="form-control col-md-6" id="pics" name="avatar">
                    <img src="" id="avatar" class="img-responsive col-md-4 img-rounded" alt="Responsive image" >
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" placeholder="nom" name="nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="firstname">Prenom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="prenom" name="prenom">
                </div>
                <div class="form-group col-md-12">
                    <label for="birthD">date de naissance</label>
                    <input type="date" class="form-control" id="birthD" placeholder="date de naissance" name="ddn">
                </div>
                <div class="form-group col-md-12">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="adresse" name="adresse">
                </div>
                <div class="form-group col-md-6">
                    <label for="cp">Code Postal</label>
                    <input type="text" class="form-control" id="cp" placeholder="code postal" name="cp">
                </div>
                <div class="form-group col-md-6">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" id="city" placeholder="Ville" name="ville">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="mail">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Téléphone mobile</label>
                    <input type="text" class="form-control" id="phone" placeholder="Téléphone mobile" name="phone">
                </div>
                <div class="form-group col-md-12">
                    <label for="webSite">Site web-perso</label>
                    <input type="text" class="form-control" id="webSite" placeholder="Site web-perso" name="siteWeb">
                </div>
            </form>   
            
            
            
        </div>
        
    </body>
</html>