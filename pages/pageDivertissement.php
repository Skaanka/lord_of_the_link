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

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/PSN_logo.png">
        <label for="psn" class="col-sm-2">PSN</label>
        <div class="panel panel-default">
          <div class="panel-body" id="psn">
            adresse compte psn
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Xbox_logo.png">
        <label for="xbox" class="col-sm-2">XboxLive</label>
        <div class="panel panel-default">
          <div class="panel-body" id="xbox">
            adresse compte xboxlive
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/Steam_logo.png">
        <label for="steam" class="col-sm-2">Steam</label>
        <div class="panel panel-default">
          <div class="panel-body" id="steam">
            adresse compte steam
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Xbox_logo.png">
        <label for="battlenet" class="col-sm-2">Battle.net</label>
        <div class="panel panel-default">
          <div class="panel-body" id="battlenet">
            adresse compte Battle.net
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="../img/icons/PSN_logo.png">
        <label for="origin" class="col-sm-2">Origin</label>
        <div class="panel panel-default">
          <div class="panel-body" id="origin">
            adresse compte Origin
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="../img/icons/Xbox_logo.png">
        <label for="nintendo" class="col-sm-2">Nintendo</label>
        <div class="panel panel-default">
          <div class="panel-body" id="nintendo">
            adresse compte Nintendo
          </div>
        </div>
    </div>
</div>



