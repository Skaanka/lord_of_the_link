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

<h2> <?php echo htmlspecialchars($value["prenom"])  ?> est présent(e) sur ces réseaux professionnel. </h2> <!-- TODO inserer en PHP le nom d'utilisateur -->


<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/linkedin_logo.png">
        <label for="linkedin" class="col-sm-2">LinkedIn</label>
        <div class="panel panel-default">
          <div class="panel-body" id="linkedin">
            adresse compte LinkedIn
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/viadeo_logo.png">
        <label for="viadeo" class="col-sm-2">Viadeo</label>
        <div class="panel panel-default">
          <div class="panel-body" id="viadeo">
            adresse compte Viadeo
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/xing_logo.png">
        <label for="xing" class="col-sm-2">Xing</label>
        <div class="panel panel-default">
          <div class="panel-body" id="xing">
            adresse compte Xing
          </div>
        </div>
    </div>
    
    <div>
        <img class="icons col-sm-2" src="img/icons/muxi_logo.jpg">
        <label for="muxy" class="col-sm-2">Muxy</label>
        <div class="panel panel-default">
          <div class="panel-body" id="muxy">
            adresse compte Muxy
          </div>
        </div>
    </div>
</div>

<div class="row col-md-6 col-md-offset-3" id="rowName">
    <div>
        <img class="icons col-sm-2" src="img/icons/github_logo.png">
        <label for="github" class="col-sm-2">GitHub</label>
        <div class="panel panel-default">
          <div class="panel-body" id="github">
            adresse compte Github
          </div>
        </div>
    </div>    
</div>
