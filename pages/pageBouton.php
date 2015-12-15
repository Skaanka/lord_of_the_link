<?php
    // connexion bdd
    require_once('php/connexion.php');

?>


<?php 

// recuperation de tout les utilisateurs avec un compte psn

    global $db;
    $affichagePsn = $db->query('SELECT * 
                                FROM divertissements, membres
                                WHERE divertissements.id_membres = membres.id');
    while ($value = $affichagePsn->fetch() ) {
    ?> 
        <div class="row col-md-8 col-md-offset-2" id="rowName">
            <img src="uploads/<?php echo $value['avatar']; ?>" name="avatar" id="avatarProfilName" class="col-md-5 col-md-offset-2"> <!-- TODO PHP renommer l'image dans la bdd et dossier -->
            <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["nom"])  ?> </b></p>
            <p class="col-md-4 col-md-offset-2 rowProfil name"><b><?php echo htmlspecialchars($value["prenom"])  ?></b></p>
            <div class="well well-sm"> <?php if ( !empty($value['psn'])) {echo $value['psn'];}  ?> </div>
        </div>
    <?php
    }
    $affichagePsn->closeCursor();



//    if ( isset($url["divCat"]) ) {
//        $i = $url["divCat"] ;
//        switch ($url["divCat"]) {
//            case 0: // affiche le profil perso
//                $main = appelPsn();
//                break;
//            case 1: // affiche le parcour pro
//                $main = appelXboxlive();
//                break;
//            case 2: // affiche les reseaux sociaux
//                $main = appelPsn();
//                break;
//            case 3: // affiche le parcour pro
//                $main = appelPsn();
//                break;
//            case 4: // affiche les reseaux sociaux
//                $main = appelPsn();
//                break;
//            default: // la page par défaut
//                $main = appelPsn();
//        } 
//            include($main);
//    }

