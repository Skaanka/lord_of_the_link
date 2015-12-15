
<?php
// destruction de session inscription
require_once('php/function.php');
destructionSessionInscription();
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

   
<div class="row col-md-8 col-md-offset-2" id="rowName">
    <img src="uploads/<?php echo $value['avatar']; ?>" name="avatar" id="avatarProfilName" class="col-md-5 col-md-offset-2"> <!-- TODO PHP renommer l'image dans la bdd et dossier -->
    <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["nom"])  ?></b></p>
    <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["prenom"])  ?></b></p>
    <p class="col-md-4 col-md-offset-2 rowProfil">age<?php //TODO calcul age par rapport a date de naissance ?></p>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowAdress">
    <h2 class="col-md-12 col-md-offset-1"><b><u>Adresse :</u></b></h2>
    <p class="col-md-12 col-md-offset-1 rowProfil"><?php echo htmlspecialchars($value["adresse"])  ?></p>
    <p class="col-md-2 col-md-offset-1 rowProfil"><?php echo htmlspecialchars($value["cp"])  ?></p>
    <p class="col-md-5 col-md-offset-0 rowProfil"><?php echo htmlspecialchars($value["ville"])  ?></p>
</div>

<div class="row col-md-8 col-md-offset-2" id="rowCom">
    <h2 class="col-md-12 col-md-offset-1"><b><u>Contact :</u></b></h2>
    <p class="col-md-12 col-md-offset-1 rowProfil">Mail : <?php echo htmlspecialchars($value["mail"])  ?></p>
    <p class="col-md-12 col-md-offset-1 rowProfil">Tel : <?php echo htmlspecialchars($value["phone"])  ?></p>
    <p class="col-md-12 col-md-offset-1 rowProfil">Site : <?php echo htmlspecialchars($value["siteWeb"])  ?></p>
</div>


