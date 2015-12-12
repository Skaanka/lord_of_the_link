<?php
// detruit la session inscription si elle existe
if ( isset ($_SESSION["inscription"])) {
    unset($_SESSION["inscription"]);
}

// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

?>


<h2>Mon profil.</h2>

<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 0 ; ?>">
    <input type="button" class="btn btn-danger">Infos perso</input>
</a>
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 2 ; ?>">
    <input type="button" class="btn btn-danger">Réseaux sociaux</input>
</a>

<h3>Mon parcours pro.</h3>


<div class="row col-md-8 col-md-offset-2">
    <p class="col-md-2 col-md-offset-1">Années d'obt.</p>
    <p class="col-md-2 col-md-offset-1">Intitulé</p>
    <p class="col-md-2 col-md-offset-1">Ecole</p>
</div>

<!-- A finir -->