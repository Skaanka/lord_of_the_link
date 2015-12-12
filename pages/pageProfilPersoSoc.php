<?php
// detruit la session inscription si elle existe
if ( isset ($_SESSION["inscription"])) {
    unset($_SESSION["inscription"]);
}

// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

//affichage des membres TODO
$affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
$affichageMembre->execute(array($_SESSION['user']));
$value = $affichageMembre->fetch();
?>


<h2>Mon profil.</h2>

<input type="button" class="btn btn-danger">Infos perso</input>
<input type="button" class="btn btn-danger">Parcours pro</input>

<h3>Mes réseaux sociaux.</h3>

<h4>Jeux online</h4>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/PSN_logo.png">
        <label for="psn" class="col-sm-2 control-label celSoc">PSN</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Xbox_logo.png">
        <label for="xboxlive" class="col-sm-2 control-label celSoc">XboxLive</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/Steam_logo.png">
        <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Xbox_logo.png">
        <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/origin1_logo.png">
        <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/nintendo_logo.png">
        <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo.net</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>


<h4>Réseaux pro.</h4>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/linkedin_logo.png">
        <label for="linkedin" class="col-sm-2 control-label celSoc">LinkedIn</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/viadeo_logo.png">
        <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/xing_logo.png">
        <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/muxi_logo.jpg">
        <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>


<h4>Réseaux sociaux</h4>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/FB_logo.png">
        <label for="facebook" class="col-sm-2 control-label celSoc">Facebook</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Twitter-logo.png">
        <label for="twitter" class="col-sm-2 control-label celSoc">Twitter</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/YouTube-logo.png">
        <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/googleplus_logo.png">
        <label for="google+" class="col-sm-2 control-label celSoc">Google+</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/Skype_logo.png">
        <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/instagram_logo.png">
        <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/pinterest-logo.png">
        <label for="pinteret" class="col-sm-2 control-label celSoc">Pinterest</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Deezer_logo.png">
        <label for="deezer" class="col-sm-2 control-label celSoc">Deezer.net</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/Spotify_logo.png">
        <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Viber-logo.png">
        <label for="viber" class="col-sm-2 control-label celSoc">Viber</label>
        <div class="well well-sm col-md-2"> [IDENTIFIANT] </div>
    </div>
</div>












