<?php

// affiche des membres ayant un compte facebook
function appelFacebook() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['facebook'])) {
            include('pages/pageBouton.php');
                echo $value['facebook']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Twitter
function appelTwitter() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['twitter'])) {
            include('pages/pageBouton.php');
                echo $value['twitter']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Youtube
function appelYoutube() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['youtube'])) {
            include('pages/pageBouton.php');
                echo $value['youtube']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Google
function appelGoogle() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['google'])) {
            include('pages/pageBouton.php');
                echo $value['google']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Skype
function appelSkype() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['skype'])) {
            include('pages/pageBouton.php');
                echo $value['skype']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Instagram
function appelInstagram() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['instagram'])) {
            include('pages/pageBouton.php');
                echo $value['instagram']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Pinterest
function appelPinterest() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['pinterest'])) {
            include('pages/pageBouton.php');
                echo $value['pinterest']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Deezer
function appelDeezer() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['deezer'])) {
            include('pages/pageBouton.php');
                echo $value['deezer']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Spotify
function appelSpotify() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['spotify'])) {
            include('pages/pageBouton.php');
                echo $value['spotify']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}

// affiche des membres ayant un compte Viber
function appelViber() {
    global $db;
    // recuperation de tout les utilisateurs avec un compte
    $affichage = $db->query('SELECT * FROM reseaux, membres WHERE reseaux.id_membres = membres.id');
    while ($value = $affichage->fetch() ) {
        if ( !empty($value['viber'])) {
            include('pages/pageBouton.php');
                echo $value['viber']; 
                ?> </div>
            </div>
    <?php
        }
    }
    $affichage->closeCursor();
}