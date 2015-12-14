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

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/FB_logo.png">
        <label for="facebook" class="col-sm-6 labelPage">Facebook</label>
        <div class="well well-sm col-md-8">
          <div class="" id="facebook">
            compte Facebook
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/twitter-logo.png">
        <label for="twitter" class="col-sm-6 labelPage">Twitter</label>
        <div class="well well-sm col-md-8">
          <div class="" id="twitter">
            compte Twitter
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
            compte Youtube
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/googleplus_logo.png">
        <label for="google+" class="col-sm-6 labelPage">Google+</label>
        <div class="well well-sm col-md-8">
          <div class="" id="google+">
            compte Google+
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
            compte Skype
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/instagram_logo.png">
        <label for="instagram" class="col-sm-6 labelPage">Instagram</label>
        <div class="well well-sm col-md-8">
          <div class="" id="instagram">
            compte Instagram
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
            compte Pinterest
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/deezer_logo.png">
        <label for="deezer" class="col-sm-6 labelPage">Deezer</label>
        <div class="well well-sm col-md-8">
          <div class="" id="deezer">
            compte Deezer
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
            compte Spotify
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/viber-logo.png">
        <label for="viber" class="col-sm-6 labelPage">Viber</label>
        <div class="well well-sm col-md-8">
          <div class="" id="viber">
            compte Twitter
          </div>
        </div>
    </div>
</div>

