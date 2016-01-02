<?php
// destruction de session inscription
require_once('php/function.php');
destructionSessionInscription();
// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

//affichage du profil perso debugage
//print_r($_SESSION['user']);

?>


<h2 id="titreProfilPerso" class="text-center"><b><u>Mon profil.</u></b></h2>

<div class="text-center">
    <a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 1 ; ?>" class="btn btn-success">Parcours Pro.
            <!--<input type="button" class="btn btn-default">Parcours Pro.</input>-->
    </a>

    <a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 2 ; ?>" class="btn btn-success">Réseaux sociaux
            <!--<input type="button" class="">Réseaux sociaux</input>-->
    </a>
</div>


<h3 id="sousTitreProfilPerso" class="row col-md-6 col-md-offset-2"><b><u>Mes informations personnelles:</u></b></h3>


<div class="row col-md-8 col-md-offset-2" id="rowNamePP"> <!-- encart infos persos civilité -->
    <div class="panel panel-default "> <!-- Début du panel -->
      <div class="panel-body">
        <div class="text-center">
            <img src="img/Avatar-512.png" name="avatar" id="avatarPP" class="text-center"> <!-- TODO afficher l'avatar du profil corespondant -->
        </div>
        <p class="col-md-8 col-md-offset-2">
            <b>Nom: </b><?php echo htmlspecialchars($_SESSION['user']["nom"])  ?><br/>
            <b>Prénom: </b><?php echo htmlspecialchars($_SESSION['user']["prenom"])  ?><br/>
            <b>Age: </b><?php //echo htmlspecialchars($_SESSION['user']["age"]) //TODO calcul age par rapport a date de naissance ?>
        </p>
      </div>
      <div class="panel-footer"><input type="button" class="btn btn-danger col-md-offset-9" value="modifier" data-toggle="modal" data-target="#myModal1"></div>
        
        <!-- Modal modif -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modif infos perso...</h4>
              </div>
              <div class="modal-body">
                test1<br/>
                <b>Nom: </b><?php echo htmlspecialchars($_SESSION['user']["nom"])  ?><br/>
                <b>Prénom: </b><?php echo htmlspecialchars($_SESSION['user']["prenom"])  ?><br/>
                <b>Age: </b><?php //echo htmlspecialchars($_SESSION['user']["age"]) //TODO calcul age par rapport a date de naissance ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin modal modif-->
    </div><!-- Fin du panel -->
</div><!-- Fin encart infos persos civilité -->



<div class="row col-md-8 col-md-offset-2" id="rowAdressPP"><!-- encart infos persos adresse -->
    <div class="panel panel-default "><!-- Début du panel -->
      <div class="panel-body">
        <p class="col-md-8 col-md-offset-2">
            <b>Adresse: </b><?php echo htmlspecialchars($_SESSION['user']["adresse"])  ?><br/>
            <b>Code Postal: </b><?php echo htmlspecialchars($_SESSION['user']["cp"])  ?><br/>
            <b>Ville: </b><?php echo htmlspecialchars($_SESSION['user']["ville"])  ?>
        </p>
      </div>
      <div class="panel-footer"><input type="button" class="btn btn-danger col-md-offset-9" value="modifier" data-toggle="modal" data-target="#myModal2"></div>
        
        <!-- Modal modif -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modif infos perso...</h4>
              </div>
              <div class="modal-body">
                <b>test2</b><br/>
                <b>Adresse: </b><input value="<?php echo htmlspecialchars($_SESSION['user']["adresse"])  ?>"><br/>
                <b>Code Postal: </b><input value="<?php echo htmlspecialchars($_SESSION['user']["cp"])  ?>"><br/>
                <b>Ville: </b><input value="<?php echo htmlspecialchars($_SESSION['user']["ville"])  ?>">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin modal modif-->
    </div><!-- Fin du panel -->
</div><!-- Fin encart infos persos civilité -->



<div class="row col-md-8 col-md-offset-2" id="rowComPP"><!-- encart infos persos contact -->
    <div class="panel panel-default "><!-- Début du panel -->
      <div class="panel-body">
        <p class="col-md-8 col-md-offset-2">
            <b>Email: </b><?php echo htmlspecialchars($_SESSION['user']["mail"])  ?><br/>
            <b>Telephone: </b><?php echo htmlspecialchars($_SESSION['user']["phone"])  ?><br/>
            <b>Site Web: </b><?php echo htmlspecialchars($_SESSION['user']["siteWeb"])  ?>
          </p>
      </div>
      <div class="panel-footer"><input type="button" class="btn btn-danger col-md-offset-9" value="modifier" data-toggle="modal" data-target="#myModal3"></div>
        
        <!-- Modal modif -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modif infos perso...</h4>
              </div>
              <div class="modal-body">
                test3<br/>
                <b>Email: </b><input value="<?php echo htmlspecialchars($_SESSION['user']["mail"])  ?>"><br/>
                <b>Telephone: </b><input value="<?php echo htmlspecialchars($_SESSION['user']["phone"])  ?>"><br/>
                <b>Site Web: </b><input value="<?php echo htmlspecialchars($_SESSION['user']["siteWeb"])  ?>">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin modal modif-->
    </div><!-- Fin du panel -->
</div><!-- Fin encart infos persos contact -->
