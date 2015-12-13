
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

    $affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? '); /* TODO (pour Greg) Je te laisse le soin de modifier la requète pour la bonne table (François 13/12/15) */
    $affichageMembre->execute(array($_GET['query']));
    $value = $affichageMembre->fetch();
?>

   
<div class="row col-md-8 col-md-offset-2" id="rowName">
    <img src="uploads/<?php echo $value['avatar']; ?>" name="avatar" id="avatarProfilName" class="col-md-5 col-md-offset-2"> <!-- TODO PHP renommer l'image dans la bdd et dossier -->
    <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["nom"])  ?></b></p>
    <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["prenom"])  ?></b></p>
    <div class="well well-sm"> [ID du compte] </div>
</div>



