<?php
// destruction de session inscription
require_once('php/function.php');
destructionSessionInscription();
// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

?>


<h2 id="titreProfilPerso" class="text-center"><b><u>Mon profil.</u></b></h2>

<div class="text-center">
    <a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 0 ; ?>" class="btn btn-success">Infos perso
            <!--<input type="button" class="btn btn-default">Parcours Pro.</input>-->
    </a>

    <a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 2 ; ?>" class="btn btn-success">Réseaux sociaux
            <!--<input type="button" class="">Réseaux sociaux</input>-->
    </a>
</div>


<h3 id="sousTitreProfilPerso" class="row col-md-6 col-md-offset-2"><b><u>Mon parcours pro : </u></b</h3>

<?php
//affichage des identifiant jeux online
$urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

$affichageXpPro = $db->query('SELECT * FROM diplomes WHERE id_membres =' . $urlId );
                
while ($value = $affichageXpPro->fetch()) { //debut de la boucle
    
    if ( !empty($value['annees_obt'] &&!empty($value['intitule'] && !empty($value['ecole']) ) )) {                                              
?>
<div class="row col-md-8 col-md-offset-2">
    <p class="col-md-2 col-md-offset-1">Années d'obt. <?php echo $value['annees_obt']; ?></p>
    <p class="col-md-2 col-md-offset-1">Intitulé <?php echo $value['intitule']; ?></p>
    <p class="col-md-2 col-md-offset-1">Ecole <?php echo $value['ecole']; ?></p>
</div>
<?php
    }
}// fin de la boucle
$affichageXpPro->closeCursor();
?>
<!-- A finir -->