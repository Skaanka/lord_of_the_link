<?php
// detruit la session inscription si elle existe
if ( isset ($_SESSION["inscription"])) {
    unset($_SESSION["inscription"]);
}

// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

//affichage des membres
$affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
$affichageMembre->execute(array($_GET['query']));
$value = $affichageMembre->fetch();
?>



<div class="col-md-10 col-md-offset-2" id="titrePage">
    <img src="uploads/<?php echo $value['avatar']; ?>" id="avatarPage">
    <h2>Les réseaux sociaux que <?php echo htmlspecialchars($value["prenom"])  ?> fréquente : </h2>
</div>

<?php
//affichage des identifiant jeux online
$urlId = $_GET['query']; //recuperation de l'id de l'utilisateur 

$affichageMembreReseauxSoc = $db->query('SELECT * FROM reseaux WHERE id_membres =' . $urlId );
                
while ($value = $affichageMembreReseauxSoc->fetch()) { //debut de la boucle
?>
<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/FB_logo.png">
        <label for="facebook" class="col-sm-6 labelPage">Facebook</label>
        <div class="well well-sm col-md-8">
          <div class="" id="facebook">
            <?php echo $value['facebook']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/twitter-logo.png">
        <label for="twitter" class="col-sm-6 labelPage">Twitter</label>
        <div class="well well-sm col-md-8">
          <div class="" id="twitter">
            <?php echo $value['twitter']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/YouTube-logo.png">
        <label for="youtube" class="col-sm-6 labelPage">Youtube</label>
        <div class="well well-sm col-md-8">
          <div class="" id="youtube">
            <?php echo $value['youtube']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/googleplus_logo.png">
        <label for="google+" class="col-sm-6 labelPage">Google+</label>
        <div class="well well-sm col-md-8">
          <div class="" id="google+">
            <?php echo $value['google']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/skype_logo.png">
        <label for="skype" class="col-sm-6 labelPage">Skype</label>
        <div class="well well-sm col-md-8">
          <div class="" id="skype">
            <?php echo $value['skype']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/instagram_logo.png">
        <label for="instagram" class="col-sm-6 labelPage">Instagram</label>
        <div class="well well-sm col-md-8">
          <div class="" id="instagram">
            <?php echo $value['instagram']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/pinterest-logo.png">
        <label for="pinterest" class="col-sm-6 labelPage">Pinterest</label>
        <div class="well well-sm col-md-8">
          <div class="" id="pinterest">
            <?php echo $value['pinterest']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/deezer_logo.png">
        <label for="deezer" class="col-sm-6 labelPage">Deezer</label>
        <div class="well well-sm col-md-8">
          <div class="" id="deezer">
            <?php echo $value['deezer']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/spotify_logo.png">
        <label for="spotify" class="col-sm-6 labelPage">Spotify</label>
        <div class="well well-sm col-md-8">
          <div class="" id="spotify">
            <?php echo $value['spotify']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/viber-logo.png">
        <label for="viber" class="col-sm-6 labelPage">Viber</label>
        <div class="well well-sm col-md-8">
          <div class="" id="viber">
            <?php echo $value['viber']; ?>
          </div>
        </div>
    </div>
</div>
<?php
}// fin de la boucle
$affichageMembreReseauxSoc->closeCursor();
?>
