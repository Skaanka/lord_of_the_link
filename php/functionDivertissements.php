<?php

// affiche des membres ayant un identifiant PSN
function appelPsn() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM divertissements, membres WHERE divertissements.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['psn'])) {
            include('pages/pageBouton.php');
            echo $value['psn']; ?></div>
        </div>
<?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un identifiant Xboxlive
function appelXboxlive() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM divertissements, membres WHERE divertissements.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['xboxlive'])) {
            include('pages/pageBouton.php');
            echo $value['xboxlive'];  ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}


// affiche des membres ayant un identifiant Steam
function appelSteam() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM divertissements, membres WHERE divertissements.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['steam'])) {
            include('pages/pageBouton.php');
            echo $value['steam'];  ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un identifiant Battlenet
function appelBattlenet() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM divertissements, membres WHERE divertissements.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['battlenet'])) {
            include('pages/pageBouton.php');
            echo $value['battlenet'];  ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un identifiant Nintendo
function appelNintendo() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM divertissements, membres WHERE divertissements.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['compte_nintendo'])) {
            include('pages/pageBouton.php');
            echo $value['compte_nintendo'];  ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un identifiant Origin
function appelOrigin() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM divertissements, membres WHERE divertissements.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['origin'])) {
            include('pages/pageBouton.php');
            echo $value['origin'];  ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}