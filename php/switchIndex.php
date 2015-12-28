<?php

// TODO afficher un message d'erreur via php si le membre n'existe pas (si une personne malintentionnée modifie dans l'url le ?query=7 par exemple
// ou 7 est égal à l'id d'un membre dans la bdd par 25 ou 25 n'existe pas dans la bdd, une page s'affichera sans données.

//récuperation de l'url
$url = $_GET;
//print_r($url);

//print_r($url["query"]); 
//echo "<br/>";
//print_r($url["cat"]);

// affichage default, profil user, profil visited   
if  ( isset($_GET["query"]) && isset($url["cat"]) ) {
    $i = $url["cat"] ;
    switch ($url["cat"]) {
        case 0: // affiche le profil du membre clické
            $main = "pages/profil/pageProfil.php";
            break;
        case 2: // affiche les reseaux jeux du membre clické
            $main = "pages/profil/pageDivertissement.php";
            break;
        case 3: // affiche les reseaux pro du membre clické
            $main = "pages/profil/pageReseauxPro.php";
            break;
        case 4: // affiche les reseaux sociaux du membre clické
            $main = "pages/profil/pageReseauxSoc.php";
            break;
        default: // affiche le profil du membre par défaut clické
            $main = "pages/profil/pageProfil.php";
    } 
    include($main);  

} elseif ( isset($_GET["query"]) && isset($url["pCat"]) ) {
    $i = $url["pCat"] ;
    switch ($url["pCat"]) {
        case 0: // affiche le profil perso
            $main = "pages/profilPerso/pageProfilPerso.php";
            break;
        case 1: // affiche le parcour pro perso
            $main = "pages/profilPerso/pageProfilPersoPro.php";
            break;
        case 2: // affiche les reseaux sociaux perso
            $main = "pages/profilPerso/pageProfilPersoSoc.php";
            break;
        default: // affiche le profil perso par défaut
            $main = "pages/profilPerso/pageProfilPerso.php";
    } 
    include($main);

} elseif ( isset($url["divCat"]) ) {
    $i = $url["divCat"] ;
    switch ($url["divCat"]) {
        case 0: // affiche les profils perso psn
            $main = "pages/pagebouton2.php";
            break;
        case 1: // affiche les profils xboxlive
            $main = "pages/pagebouton2.php";
            break;
        case 2: // affiche les profils steam
            $main = "pages/pagebouton2.php";
            break;
        case 3: // affiche les profils battlenet
            $main = "pages/pagebouton2.php";
            break;
        case 4: // affiche les profils nintendo
            $main = "pages/pagebouton2.php";
            break;
        case 5: // affiche les profils origin
            $main = "pages/pagebouton2.php";
            break;
    } 
    include($main);

} elseif ( isset($url["resCat"]) ) {
    $i = $url["resCat"] ;
    switch ($url["resCat"]) {
        case 0: // affiche les profils facebook
            $main = "pages/pagebouton2.php";
            break;
        case 1: // affiche les profils twitter
            $main = "pages/pagebouton2.php";
            break;
        case 2: // affiche les profils youtube
            $main = "pages/pagebouton2.php";
            break;
        case 3: // affiche les profils google+
            $main = "pages/pagebouton2.php";
            break;
        case 4: // affiche les profils skype
            $main = "pages/pagebouton2.php";
            break;
        case 5: // affiche les profils instagram
            $main = "pages/pagebouton2.php";
            break;
        case 6: // affiche les profils pinterest
            $main = "pages/pagebouton2.php";
            break;
        case 7: // affiche les profils deezer
            $main = "pages/pagebouton2.php";
            break;
        case 8: // affiche les profils spotify
            $main = "pages/pagebouton2.php";
            break;
        case 9: // affiche les profils viber 
            $main = "pages/pagebouton2.php";
            break;
    } 
    include($main);

} elseif ( isset($url["proCat"]) ) {
    $i = $url["proCat"] ;
    switch ($url["proCat"]) {
        case 0: // affiche les profils linkedin
            $main = "pages/pagebouton2.php";
            break;
        case 1: // affiche les profils viadeo
            $main = "pages/pagebouton2.php";
            break;
        case 2: // affiche les profils xing
            $main = "pages/pagebouton2.php";
            break;
        case 3: // affiche les profils muxy
            $main = "pages/pagebouton2.php";
            break;
        case 4: // affiche les profils github
            $main = "pages/pagebouton2.php";
            break;
    } 
    include($main);
} else {
    include("pages/pageDefault.php"); // en cas d'erreur affiche la pageDefault
}