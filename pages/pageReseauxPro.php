<?php
// detruit la session inscription si elle existe
if ( isset ($_SESSION["inscription"])) {
    unset($_SESSION["inscription"]);
}

// appel du fichier connexion bdd
require_once('php/connexion.php');

//print_r($params);
global $db, $params;

//affichage des membres
$affichageMembre = $db->prepare('SELECT * FROM membres WHERE id = ? ');
$affichageMembre->execute(array($_GET['query']));
$value = $affichageMembre->fetch();
?>


<div class="col-md-10 col-md-offset-2" id="titrePage">
    <img src="uploads/<?php echo $value['avatar']; ?>" id="avatarPage">
    <h2> <?php echo htmlspecialchars($value["prenom"])  ?> est présent(e) sur ces réseaux pro. </h2>
</div>


<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/linkedin_logo.png">
        <label for="linkedin" class="col-sm-6 labelPage">LinkedIn</label>
        <div class="well well-sm col-md-8">
          <div class="" id="linkedin">
            adresse compte LinkedIn
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/viadeo_logo.png">
        <label for="viadeo" class="col-sm-6 labelPage">Viadeo</label>
        <div class="well well-sm col-md-8">
          <div class="" id="viadeo">
            adresse compte Viadeo
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/xing_logo.png">
        <label for="xing" class="col-sm-6 labelPage">Xing</label>
        <div class="well well-sm col-md-8">
          <div class="" id="xing">
            adresse compte Xing
          </div>
        </div>
    </div>
    
    <div class="col-md-5 col-md-offset-1 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/muxi_logo.jpg">
        <label for="muxy" class="col-sm-6 labelPage">Muxy</label>
        <div class="well well-sm col-md-8">
          <div class="" id="muxy">
            adresse compte Muxy
          </div>
        </div>
    </div>
</div>

<div class="row rowPage col-md-10" >
    <div class="col-md-5 infoPage">
        <img class="iconsPage col-md-2" src="img/icons/github_logo.png">
        <label for="github" class="col-sm-6 labelPage">GitHub</label>
        <div class="well well-sm col-md-8">
          <div class="" id="github">
            adresse compte Github
          </div>
        </div>
    </div>    
</div>
