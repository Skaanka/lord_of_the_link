<?php
// detruit la session inscription si elle existe
if ( isset ($_SESSION["inscription"])) {
    unset($_SESSION["inscription"]);
}

// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

//affichage du profil perso debugage
//print_r($_SESSION['user']);

?>


<h2>Mon profil.</h2>
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 1 ; ?>">
    <input type="button" class="btn btn-danger">Parcours Pro.</input>
</a>
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 2 ; ?>">
    <input type="button" class="btn btn-danger">Réseaux sociaux</input>
</a>

<h3>Mes informations personnelles.</h3>


<div class="row col-md-6 col-md-offset-3">
    <img src="img/Avatar-512.png" name="avatar" id="avatarProfil" class="col-md-2 col-md-offset-1">
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["nom"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["prenom"])  ?></p>
    <p class="col-md-2 col-md-offset-1">age<?php //echo htmlspecialchars($_SESSION['user']["age"]) //TODO calcul age par rapport a date de naissance ?></p>
</div>

<div class="row col-md-8 col-md-offset-2">
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["adresse"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["cp"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["ville"])  ?></p>
</div>

<div>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["mail"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["phone"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($_SESSION['user']["siteWeb"])  ?></p>
</div>


