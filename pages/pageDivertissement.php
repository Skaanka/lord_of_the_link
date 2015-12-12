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


<div>
    <h2> <?php echo htmlspecialchars($value["prenom"])  ?> utilise ces plateformes de jeux online. </h2> <!-- TODO STYLE -->
</div>

<?php
//affichage des identifiant jeux online
$urlId = $_GET['query']; //recuperation de l'id de l'utilisateur 

$affichageMembreDivertissements = $db->query('SELECT * FROM divertissements WHERE id_membres =' . $urlId );
                
while ($value = $affichageMembreDivertissements->fetch()) { //debut de la boucle
?>
<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/PSN_logo.png">
        <label for="psn" class="col-sm-2">PSN</label>
        <div class="panel panel-default">
          <div class="panel-body" id="psn">
            <?php echo $value['psn']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/Xbox_logo.png">
        <label for="xbox" class="col-sm-2">XboxLive</label>
        <div class="panel panel-default">
          <div class="panel-body" id="xbox">
            <?php echo $value['xboxlive']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/Steam_logo.png">
        <label for="steam" class="col-sm-2">Steam</label>
        <div class="panel panel-default">
          <div class="panel-body" id="steam">
            <?php echo $value['steam']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/Xbox_logo.png">
        <label for="battlenet" class="col-sm-2">Battle.net</label>
        <div class="panel panel-default">
          <div class="panel-body" id="battlenet">
            <?php echo $value['battlenet']; ?>
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/PSN_logo.png">
        <label for="origin" class="col-sm-2">Origin</label>
        <div class="panel panel-default">
          <div class="panel-body" id="origin">
            <?php echo $value['origin']; ?>
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/Xbox_logo.png">
        <label for="nintendo" class="col-sm-2">Nintendo</label>
        <div class="panel panel-default">
          <div class="panel-body" id="nintendo">
            <?php echo $value['compte_nintendo']; ?>
          </div>
        </div>
    </div>
</div>
<?php
}// fin de la boucle
$affichageMembreDivertissements->closeCursor();
?>


