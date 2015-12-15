<?php

// affiche des membres ayant un compte linkedin
function appelLinkedin() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM pro, membres WHERE pro.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['linkedin'])) {
                include('pages/pageBouton.php');
                echo $value['linkedin']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}


// affiche des membres ayant un compte viadeo
function appelViadeo() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM pro, membres WHERE pro.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['viadeo'])) {
                include('pages/pageBouton.php');
                echo $value['viadeo']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}


// affiche des membres ayant un compte xing
function appelXing() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM pro, membres WHERE pro.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['xing'])) {
            include('pages/pageBouton.php');
                echo $value['xing']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte muxy
function appelMuxy() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM pro, membres WHERE pro.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['muxi'])) {
                include('pages/pageBouton.php');
                echo $value['muxi']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Github
function appelGithub() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * 
                                FROM pro, membres
                                WHERE pro.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['github'])) {
                include('pages/pageBouton.php');
                echo $value['github']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}