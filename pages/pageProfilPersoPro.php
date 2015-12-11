
<?php
if ( isset ($_SESSION["inscription"])) {
    unset($_SESSION["inscription"]);
}
// connexion bdd
require_once('php/connexion.php');


?>

<?php
//affichage des membres
    //print_r($params);
    global $db, $params;

    $affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
    $affichageMembre->execute(array($_GET['query']));
    $value = $affichageMembre->fetch();
?>


<h2>Mon profil.</h2>

<input type="button" class="btn btn-danger">Infos perso</input>
<input type="button" class="btn btn-danger">Réseaux sociaux</input>

<h3>Mon parcours pro.</h3>


<div class="row col-md-8 col-md-offset-2">
    <p class="col-md-2 col-md-offset-1">Années d'obt.</p>
    <p class="col-md-2 col-md-offset-1">Intitulé</p>
    <p class="col-md-2 col-md-offset-1">Ecole</p>
</div>

<!-- A finir -->