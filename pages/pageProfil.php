
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
<img src="uploads/<?php echo $value['avatar']; ?>" name="avatar" id="avatarProfil">

<div class="row" id="rowName">
    <p>Nom <?php echo htmlspecialchars($value["nom"])  ?></p>
    <p>Prenom <?php echo htmlspecialchars($value["prenom"])  ?></p>
    <p>age <?php  //TODO calcul age par rapport a date de naissance ?></p>
</div>

<div class="row">
    <p>Adresse <?php echo htmlspecialchars($value["adresse"])  ?></p>
    <p>code postal <?php echo htmlspecialchars($value["cp"])  ?></p>
    <p>ville <?php echo htmlspecialchars($value["ville"])  ?></p>
    <p>email <?php echo htmlspecialchars($value["mail"])  ?></p>
    <p>telephone <?php echo htmlspecialchars($value["phone"])  ?></p>
    <p>Site web <?php echo htmlspecialchars($value["siteWeb"])  ?></p>
</div>

<div id="miniNavbar">
    <p>Divertissement</p> 

</div>
