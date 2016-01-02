<?php
// destruction de session inscription
require_once('php/function.php');
destructionSessionInscription();

//print_r($params);
global $db, $params;

?>

<h2 id="titreProfilPerso" class="text-center"><b><u>Mon profil.</u></b></h2>


<!--
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 0 ; ?>">
<input type="button" class="btn btn-danger">Infos perso</input>
</a>
<a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 1 ; ?>">
<input type="button" class="btn btn-danger">Parcours pro</input>
</a>
-->


<div class="text-center">
    <a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 0 ; ?>" class="btn btn-success">Infos perso
        <!--<input type="button" class="btn btn-default">Parcours Pro.</input>-->
    </a>

    <a href="index.php<?php echo "?query=" . $_SESSION['user']['id'] . "&" . "pCat=" . 1 ; ?>" class="btn btn-success">Parcours pro
        <!--<input type="button" class="">Réseaux sociaux</input>-->
    </a>
</div>



<h3 id="sousTitreProfilPerso" class="row col-md-6 col-md-offset-2"><b><u>Mes réseaux sociaux : </u></b></h3>



<!-- Panel jeux online -->
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Jeux online</h3>
        </div>
        <div class="panel-body">
            <?php
            //affichage des identifiant jeux online
            $urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

            $affichageDivertissements = $db->query('SELECT * FROM divertissements WHERE id_membres =' . $urlId );

            while ($value = $affichageDivertissements->fetch()) { //debut de la boucle
            ?>

            <div class="col-md-12" id="">
                <?php
                if (!empty($value['psn'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/PSN_logo.png">
                    <label for="psn" class="control-label">PSN</label>
                    <div class="well well-sm"> <?php echo $value['psn']; ?> </div>
                </div>
                <?php
                }                                             

                if (!empty($value['xboxlive'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/Xbox_logo.png">
                    <label for="xboxlive" class="control-label">XboxLive</label>
                    <div class="well well-sm"> <?php echo $value['xboxlive']; ?> </div>
                </div>
                <?php
                }                                             
                ?>
            </div>

            <div class="col-md-12" id="">
                <?php
                if (!empty($value['steam'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/Steam_logo.png">
                    <label for="steam" class="control-label">Steam</label>
                    <div class="well well-sm"> <?php echo $value['steam']; ?> </div>
                </div>
                <?php
                }                                             

                if (!empty($value['battlenet'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/battlenet_logo.png">
                    <label for="battlenet" class="control-label">Battle.net</label>
                    <div class="well well-sm"> <?php echo $value['battlenet']; ?> </div>
                </div>
                <?php
                }                                             
                ?>
            </div>

            <div class="col-md-12" id="">
                <?php
                if (!empty($value['origin'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/origin1_logo.png">
                    <label for="origin" class="control-label">Origin</label>
                    <div class="well well-sm"> <?php echo $value['origin']; ?> </div>
                </div>
                <?php
                }                                             

                if (!empty($value['compte_nintendo'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/nintendo_logo.png">
                    <label for="nintendo" class="control-label">Nintendo.net</label>
                    <div class="well well-sm"> <?php echo $value['compte_nintendo']; ?> </div>
                </div>
                <?php
                }                                             
                ?>
            </div>
            <?php
            }// fin de la boucle
            $affichageDivertissements->closeCursor();
            ?>
        </div>
        <div class="panel-footer"><input type="button" class="btn btn-danger col-md-offset-9" value="modifier"></div>
    </div>
</div>
<!-- Fin panel jeux online -->




<!-- Panel reseaux pro -->
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Réseaux pro.</h3>
        </div>
        <div class="panel-body">
            <?php
            //affichage des reseaux sociaux pro
            $urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

            $affichageReseauxPro = $db->query('SELECT * FROM pro WHERE id_membres =' . $urlId );

            while ($value = $affichageReseauxPro->fetch()) { //debut de la boucle
            ?>

            <div class="col-md-12" id="">
                <?php
                if (!empty($value['linkedin'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/linkedin_logo.png">
                    <label for="linkedin" class="control-label">LinkedIn</label>
                    <div class="well well-sm"> <?php echo $value['linkedin']; ?> </div>
                </div>
                <?php
                }                                             

                if (!empty($value['viadeo'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/viadeo_logo.png">
                    <label for="viadeo" class="control-label">Viadeo</label>
                    <div class="well well-sm"> <?php echo $value['viadeo']; ?> </div>
                </div>
                <?php
                }                                             
                ?>
            </div>

            <div class="col-md-12" id="">
                <?php
                if (!empty($value['xing'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/xing_logo.png">
                    <label for="xing" class="control-label">Xing</label>
                    <div class="well well-sm"> <?php echo $value['xing']; ?> </div>
                </div>
                <?php
                }                                             

                if (!empty($value['muxi'])) {                                             
                ?>
                <div class="col-md-6">
                    <img class="iconMini" src="img/icons/muxi_logo.jpg">
                    <label for="muxy" class="control-label">Muxy</label>
                    <div class="well well-sm"> <?php echo $value['muxi']; ?> </div>
                </div>
                <?php
                }                                             
                ?>
            </div>
            <?php
            }// fin de la boucle
            $affichageReseauxPro->closeCursor();
            ?>
        </div>
        <div class="panel-footer"><input type="button" class="btn btn-danger col-md-offset-9" value="modifier"></div>
    </div>
</div>
<!-- Fin panel reseaux pro -->



<!-- Panel reseaux sociaux -->
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Réseaux sociaux</h3>
        </div>
        <div class="panel-body">
            <?php
//affichage des reseaux sociaux 
$urlId = $_SESSION['user']['id']; //recuperation de l'id de l'utilisateur 

$affichageReseauxSoc = $db->query('SELECT * FROM reseaux WHERE id_membres =' . $urlId );

while ($value = $affichageReseauxSoc->fetch()) { //debut de la boucle
?>
<div class="col-md-12" id="">
    <?php
    if (!empty($value['facebook'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/FB_logo.png">
        <label for="facebook" class="control-label">Facebook</label>
        <div class="well well-sm"> <?php echo $value['facebook']; ?> </div>
    </div>
    <?php
    }                                             

    if (!empty($value['twitter'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/Twitter-logo.png">
        <label for="twitter" class="control-label">Twitter</label>
        <div class="well well-sm"> <?php echo $value['twitter']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="col-md-12" id="">
    <?php
    if (!empty($value['youtube'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/YouTube-logo.png">
        <label for="youtube" class="control-label">YouTube</label>
        <div class="well well-sm"> <?php echo $value['youtube']; ?> </div>
    </div>
    <?php
    }                                             

    if (!empty($value['google'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/googleplus_logo.png">
        <label for="google+" class="control-label">Google+</label>
        <div class="well well-sm"> <?php echo $value['google']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="col-md-12" id="">
    <?php
    if (!empty($value['skype'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/Skype_logo.png">
        <label for="skype" class="control-label">Skype</label>
        <div class="well well-sm"> <?php echo $value['skype']; ?> </div>
    </div>
    <?php
    }                                             

    if (!empty($value['instagram'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/instagram_logo.png">
        <label for="instagram" class="control-label">Instagram</label>
        <div class="well well-sm"> <?php echo $value['instagram']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="col-md-12" id="">
    <?php
    if (!empty($value['pinterest'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/pinterest-logo.png">
        <label for="pinteret" class="control-label">Pinterest</label>
        <div class="well well-sm"> <?php echo $value['pinterest']; ?> </div>
    </div>
    <?php
    }                                             

    if (!empty($value['deezer'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/Deezer_logo.png">
        <label for="deezer" class="control-label">Deezer.net</label>
        <div class="well well-sm"> <?php echo $value['deezer']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>

<div class="col-md-12" id="">
    <?php
    if (!empty($value['spotify'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/Spotify_logo.png">
        <label for="spotify" class="control-label">Spotify</label>
        <div class="well well-sm"> <?php echo $value['spotify']; ?> </div>
    </div>
    <?php
    }                                             

    if (!empty($value['viber'])) {                                             
    ?>
    <div class="col-md-6">
        <img class="iconMini" src="img/icons/Viber-logo.png">
        <label for="viber" class="control-label">Viber</label>
        <div class="well well-sm"> <?php echo $value['viber']; ?> </div>
    </div>
    <?php
    }                                             
    ?>
</div>
<?php
}// fin de la boucle
$affichageReseauxSoc->closeCursor();
?>
        </div>
        <div class="panel-footer"><input type="button" class="btn btn-danger col-md-offset-9" value="modifier"></div>
    </div>
</div>
<!-- Fin panel reseaux sociaux -->











