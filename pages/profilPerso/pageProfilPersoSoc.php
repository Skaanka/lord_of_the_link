<?php
// destruction de session inscription
require_once('php/function.php');
destructionSessionInscription();

//print_r($params);
global $db, $params;

?>

<h2>Mon profil.</h2>
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 0 ; ?>">
    <input type="button" class="btn btn-danger">Infos perso</input>
</a>
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 1 ; ?>">
    <input type="button" class="btn btn-danger">Parcours pro</input>
</a>

<h3>Mes réseaux sociaux.</h3>

<h4>Jeux online</h4>

<?php
//affichage des identifiant jeux online
$urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

$affichageDivertissements = $db->query('SELECT * FROM divertissements WHERE id_membres =' . $urlId );
                
while ($value = $affichageDivertissements->fetch()) { //debut de la boucle
?>
              
<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['psn'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/PSN_logo.png">
        <label for="psn" class="col-sm-2 control-label celSoc">PSN</label>
        <div class="well well-sm col-md-2"> <?php echo $value['psn']; ?> </div>
    </div>
    <?php
    }                                             
   
    if (!empty($value['xboxlive'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Xbox_logo.png">
        <label for="xboxlive" class="col-sm-2 control-label celSoc">XboxLive</label>
        <div class="well well-sm col-md-2"> <?php echo $value['xboxlive']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['steam'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Steam_logo.png">
        <label for="steam" class="col-sm-2 control-label celSoc">Steam</label>
        <div class="well well-sm col-md-2"> <?php echo $value['steam']; ?> </div>
    </div>
    <?php
    }                                             
   
    if (!empty($value['battlenet'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Xbox_logo.png">
        <label for="battlenet" class="col-sm-2 control-label celSoc">Battle.net</label>
        <div class="well well-sm col-md-2"> <?php echo $value['battlenet']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['origin'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/origin1_logo.png">
        <label for="origin" class="col-sm-2 control-label celSoc">Origin</label>
        <div class="well well-sm col-md-2"> <?php echo $value['origin']; ?> </div>
    </div>
    <?php
    }                                             
   
    if (!empty($value['compte_nintendo'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/nintendo_logo.png">
        <label for="nintendo" class="col-sm-2 control-label celSoc">Nintendo.net</label>
        <div class="well well-sm col-md-2"> <?php echo $value['compte_nintendo']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>
<?php
}// fin de la boucle
$affichageDivertissements->closeCursor();
?>



<h4>Réseaux pro.</h4>

<?php
//affichage des reseaux sociaux pro
$urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

$affichageReseauxPro = $db->query('SELECT * FROM pro WHERE id_membres =' . $urlId );
                
while ($value = $affichageReseauxPro->fetch()) { //debut de la boucle
?>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['linkedin'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/linkedin_logo.png">
        <label for="linkedin" class="col-sm-2 control-label celSoc">LinkedIn</label>
        <div class="well well-sm col-md-2"> <?php echo $value['linkedin']; ?> </div>
    </div>
    <?php
    }                                             
   
    if (!empty($value['compte_nintendo'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/viadeo_logo.png">
        <label for="viadeo" class="col-sm-2 control-label celSoc">Viadeo</label>
        <div class="well well-sm col-md-2"> <?php echo $value['viadeo']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['xing'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/xing_logo.png">
        <label for="xing" class="col-sm-2 control-label celSoc">Xing</label>
        <div class="well well-sm col-md-2"> <?php echo $value['xing']; ?> </div>
    </div>
    <?php
    }                                             
   
    if (!empty($value['muxi'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/muxi_logo.jpg">
        <label for="muxy" class="col-sm-2 control-label celSoc">Muxy</label>
        <div class="well well-sm col-md-2"> <?php echo $value['muxi']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>
<?php
}// fin de la boucle
$affichageReseauxPro->closeCursor();
?>



<h4>Réseaux sociaux</h4>

<?php
//affichage des reseaux sociaux 
$urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

$affichageReseauxSoc = $db->query('SELECT * FROM reseaux WHERE id_membres =' . $urlId );
                
while ($value = $affichageReseauxSoc->fetch()) { //debut de la boucle
?>
<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['facebook'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/FB_logo.png">
        <label for="facebook" class="col-sm-2 control-label celSoc">Facebook</label>
        <div class="well well-sm col-md-2"> <?php echo $value['facebook']; ?> </div>
    </div>
    <?php
    }                                             
   
    if (!empty($value['twitter'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Twitter-logo.png">
        <label for="twitter" class="col-sm-2 control-label celSoc">Twitter</label>
        <div class="well well-sm col-md-2"> <?php echo $value['twitter']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['youtube'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/YouTube-logo.png">
        <label for="youtube" class="col-sm-2 control-label celSoc">YouTube</label>
        <div class="well well-sm col-md-2"> <?php echo $value['youtube']; ?> </div>
    </div>
    <?php
    }                                             
    
    if (!empty($value['google'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/googleplus_logo.png">
        <label for="google+" class="col-sm-2 control-label celSoc">Google+</label>
        <div class="well well-sm col-md-2"> <?php echo $value['google']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['skype'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Skype_logo.png">
        <label for="skype" class="col-sm-2 control-label celSoc">Skype</label>
        <div class="well well-sm col-md-2"> <?php echo $value['skype']; ?> </div>
    </div>
    <?php
    }                                             
    
    if (!empty($value['instagram'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/instagram_logo.png">
        <label for="instagram" class="col-sm-2 control-label celSoc">Instagram</label>
        <div class="well well-sm col-md-2"> <?php echo $value['instagram']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['pinterest'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/pinterest-logo.png">
        <label for="pinteret" class="col-sm-2 control-label celSoc">Pinterest</label>
        <div class="well well-sm col-md-2"> <?php echo $value['pinterest']; ?> </div>
    </div>
    <?php
    }                                             
    
    if (!empty($value['deezer'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Deezer_logo.png">
        <label for="deezer" class="col-sm-2 control-label celSoc">Deezer.net</label>
        <div class="well well-sm col-md-2"> <?php echo $value['deezer']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <?php
    if (!empty($value['spotify'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Spotify_logo.png">
        <label for="spotify" class="col-sm-2 control-label celSoc">Spotify</label>
        <div class="well well-sm col-md-2"> <?php echo $value['spotify']; ?> </div>
    </div>
    <?php
    }                                             
    
    if (!empty($value['viber'])) {                                             
    ?>
    <div>
        <img class="icons col-sm-2" src="img/icons/Viber-logo.png">
        <label for="viber" class="col-sm-2 control-label celSoc">Viber</label>
        <div class="well well-sm col-md-2"> <?php echo $value['viber']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>
<?php
}// fin de la boucle
$affichageReseauxSoc->closeCursor();
?>











