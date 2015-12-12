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
$value1 = $affichageMembre->fetch();
?>



<div>
    <h2>Voici les réseaux sociaux que <?php echo htmlspecialchars($value1["prenom"])  ?> fréquente. </h2>
</div>

<?php
//affichage des identifiant jeux online
$urlId = $_GET['query']; //recuperation de l'id de l'utilisateur 

$affichageMembreReseauxSoc = $db->query('SELECT * FROM reseaux WHERE id_membres =' . $urlId );
                
while ($value = $affichageMembreReseauxSoc->fetch()) { //debut de la boucle
?>
<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/FB_logo.png">
        <label for="facebook" class="col-sm-2">Facebook</label>
        <div class="panel panel-default">
          <div class="panel-body" id="facebook">
            <?php echo $value['facebook']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/Twitter-logo.png">
        <label for="Twitter" class="col-sm-2">Twitter</label>
        <div class="panel panel-default">
          <div class="panel-body" id="twitter">
            <?php echo $value['twitter']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/YouTube-logo.png">
        <label for="Youtube" class="col-sm-2">YouTube</label>
        <div class="panel panel-default">
          <div class="panel-body" id="YouTube">
            <?php echo $value['youtube']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/googleplus_logo.png">
        <label for="google+" class="col-sm-2">Google+</label>
        <div class="panel panel-default">
          <div class="panel-body" id="ggogle+">
            <?php echo $value['google']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/Skype_logo.png">
        <label for="skype" class="col-sm-2">Skype</label>
        <div class="panel panel-default">
          <div class="panel-body" id="skype">
            <?php echo $value['skype']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/instagram_logo.png">
        <label for="instagram" class="col-sm-2">Instagram</label>
        <div class="panel panel-default">
          <div class="panel-body" id="instagram">
            <?php echo $value['instagram']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/pinterest-logo.png">
        <label for="printerest" class="col-sm-2">Pinterest</label>
        <div class="panel panel-default">
          <div class="panel-body" id="pinterest">
            <?php echo $value['pinterest']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/Deezer_logo.png">
        <label for="Deezer" class="col-sm-2">Deezer</label>
        <div class="panel panel-default">
          <div class="panel-body" id="deezer">
            <?php echo $value['deezer']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/Spotify_logo.png">
        <label for="spotify" class="col-sm-2">Spotify</label>
        <div class="panel panel-default">
          <div class="panel-body" id="spotify">
            <?php echo $value['spotify']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/Viber-logo.png">
        <label for="viber" class="col-sm-2">Viber</label>
        <div class="panel panel-default">
          <div class="panel-body" id="viber">
            <?php echo $value['viber']; ?>
          </div>
        </div>
    </div>
</div>
<?php
}// fin de la boucle
$affichageMembreReseauxSoc->closeCursor();
?>


