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
    <img src="uploads/<?php echo $value['avatar']; ?>"  id="avatarPage">
    <h2> <?php echo htmlspecialchars($value["prenom"])  ?> utilise ces plateformes de jeux online : </h2> 
</div>

<div class="row rowPage col-md-10">
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/PSN_logo.png">
        <label for="psn" class="col-sm-6 labelPage">PSN</label>
        <div class="well well-sm col-md-8">
          <div class="" id="psn">
            adresse compte psn
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/Xbox_logo.png">
        <label for="xbox" class="col-sm-6 labelPage">XboxLive</label>
        <div class="well well-sm col-md-8">
          <div class="" id="xbox">
            adresse compte xboxlive
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10 col-md-offset-2">
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/Steam_logo.png">
        <label for="steam" class="col-sm-6 labelPage">Steam</label>
        <div class="well well-sm col-md-8">
          <div class="" id="steam">
            adresse compte Steam
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/battlenet_logo.png">
        <label for="battlenet" class="col-sm-6 labelPage">Battle.net</label>
        <div class="well well-sm col-md-8">
          <div class="" id="battlenet">
            adresse Battle.net
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10 col-md-offset-2">
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/origin1_logo.png">
        <label for="origin" class="col-sm-6 labelPage">Origin</label>
        <div class="well well-sm col-md-8">
          <div class="" id="origin">
            adresse compte Origin
          </div>
        </div>
    </div>
    
    <div class="col-md-5  col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/nintendo_logo.png">
        <label for="nintendo" class="col-sm-6 labelPage">Nintendo</label>
        <div class="well well-sm col-md-8">
          <div class="" id="nintendo">
            adresse compte Nintendo
          </div>
        </div>
    </div>
</div>



