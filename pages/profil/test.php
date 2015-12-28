<?php

// Le morceau de code de l'explication commence ligne : 48


// destruction de session inscription
require_once('../../php/function.php');
destructionSessionInscription();
// appel du fichier connexion bdd
require_once('../../php/connexion.php');

//print_r($params);
global $db, $params;

//affichage des membres
$affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
$affichageMembre->execute(array(70));
$value = $affichageMembre->fetch();

?>

<!doctype html>
<html lang="fr">
    
    
    <head>
        <meta charset="utf-8">
        <title>LOTL home</title>
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower|Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        
<div class="col-md-10 col-md-offset-2" id="titrePage">
    <img src="../../uploads/<?php echo $value['avatar']; ?>"  id="avatarPage">
    <h2> <?php echo htmlspecialchars($value["prenom"])  ?> utilise ces plateformes de jeux online : </h2> 
</div>

<?php
//affichage des identifiant jeux online
$urlId = 70; //recuperation de l'id de l'utilisateur 

$affichageMembreDivertissements = $db->query('SELECT * FROM divertissements WHERE id_membres =' . $urlId );


// LE BOUT DE CODE AU DESSUS EST ICI POUR l'EXEMPLE.

$value = $affichageMembreDivertissements->fetch(); //creation d'un tableau 
//print_r($value); //enlever le commentaire pour voir le tableau

$tableauTitre = array('', '', 'Psn', 'Xbox-Live', 'Steam', 'Battle net', 'Nintendo', 'Origin'); // on créer un tableau pour le titre des section.

?>
<div class="row rowPage col-md-10"> <!-- la fameuse div que je souhaiterai unique -->
    
<?php
for ($i = 2; $i <= 7; $i++) { //la boucle qui va parcourir le tableau, ici $i est la valeur du tableau (2 pour psn, 3 pour xboxlive, ...? 7 pour origin)
    
    if (!empty($value[$i])) {  // si les données existe dans la bdd                                           
?>



    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="../../img/icons/<?php echo $value[$i]; ?>_logo.png">
        <label for="<?php echo $value[$i]; ?>" class="col-sm-6 labelPage"><?php echo ucfirst($tableauTitre[$i]); ?></label>
        <div class="well well-sm col-md-8">
          <div class="" id="<?php echo $value[$i]; ?>">
            <?php echo $value[$i]; ?>
          </div>
        </div>
    </div>



<?php
    } // fin du if
} //fin de la boucle

//note perso sur la proposition: necessite de renommer toute les image en psn_logo.png, xboxlive_logo.png, steam_logo.png, battlenet_png, ...
?>
</div><!-- fin de la fameuse div que je souhaiterai unique -->
        
        
        
    </body>
</html>