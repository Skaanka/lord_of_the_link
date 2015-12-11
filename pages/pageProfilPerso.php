
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

<input type="button" class="btn btn-danger">Parcours Pro.</input>
<input type="button" class="btn btn-danger">Réseaux sociaux</input>

<h3>Mes informations personnelles.</h3>


<div class="row col-md-6 col-md-offset-3">
    <img src="img/Avatar-512.png" name="avatar" id="avatarProfil" class="col-md-2 col-md-offset-1">
</div>

<div class="row col-md-8 col-md-offset-2" id="rowName">
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["nom"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["prenom"])  ?></p>
    <p class="col-md-2 col-md-offset-1">age<?php echo htmlspecialchars($value["age"]) //TODO calcul age par rapport a date de naissance ?></p>
</div>

<div class="row col-md-8 col-md-offset-2">
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["adresse"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["cp"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["ville"])  ?></p>
</div>

<div>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["mail"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["phone"])  ?></p>
    <p class="col-md-2 col-md-offset-1"><?php echo htmlspecialchars($value["siteWeb"])  ?></p>
</div>


