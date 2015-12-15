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

print_r($_GET["query"]);
?>


<div class="col-md-10 col-md-offset-2" id="titrePage">
    <img src="uploads/<?php echo $value['avatar']; ?>"  id="avatarPage">
    <h2> <?php echo htmlspecialchars($value["prenom"])  ?> utilise ces plateformes de jeux online : </h2> 
</div>

<?php
//affichage des identifiant jeux online
$urlId = $_GET['query']; //recuperation de l'id de l'utilisateur 

$affichageMembreDivertissements = $db->query('SELECT * FROM divertissements WHERE id_membres =' . $urlId );
                
while ($value = $affichageMembreDivertissements->fetch()) { //debut de la boucle
?>

<div class="row rowPage col-md-10">
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/PSN_logo.png">
        <label for="psn" class="col-sm-6 labelPage">PSN</label>
        <div class="well well-sm col-md-8">
          <div class="" id="psn">
            <?php echo $value['psn']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/Xbox_logo.png">
        <label for="xbox" class="col-sm-6 labelPage">XboxLive</label>
        <div class="well well-sm col-md-8">
          <div class="" id="xbox">
            <?php echo $value['xboxlive']; ?>
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
            <?php echo $value['steam']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/battlenet_logo.png">
        <label for="battlenet" class="col-sm-6 labelPage">Battle.net</label>
        <div class="well well-sm col-md-8">
          <div class="" id="battlenet">
            <?php echo $value['battlenet']; ?>
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
            <?php echo $value['origin']; ?>
          </div>
        </div>
    </div>
    
    <div class="col-md-5  col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/nintendo_logo.png">
        <label for="nintendo" class="col-sm-6 labelPage">Nintendo</label>
        <div class="well well-sm col-md-8">
          <div class="" id="nintendo">
            <?php echo $value['compte_nintendo']; ?>
          </div>
        </div>
    </div>
</div>
<?php
}// fin de la boucle
$affichageMembreDivertissements->closeCursor();
?>


