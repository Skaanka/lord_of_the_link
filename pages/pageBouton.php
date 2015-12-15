<?php
    // destruction de $_SESSION["inscription"] si elle existe
    if ( isset ($_SESSION["inscription"])) {
        unset($_SESSION["inscription"]);
    }
    
    //creation de session
    session_start();

    // connexion bdd
    require_once('php/connexion.php');
?>

   
<div class="row col-md-8 col-md-offset-2" id="rowName">
    <img src="uploads/<?php echo $value['avatar']; ?>" name="avatar" id="avatarProfilName" class="col-md-5 col-md-offset-2"> <!-- TODO PHP renommer l'image dans la bdd et dossier -->
    <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["nom"])  ?></b></p>
    <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["prenom"])  ?></b></p>
    <div class="well well-sm"> [ID du compte] </div>
</div>



