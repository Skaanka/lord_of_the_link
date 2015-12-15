<?php
// connexion bdd
require_once('php/connexion.php');


// choix du fichier function
if ( isset($url["divCat"]) ) {
    require_once('php/functionDivertissements.php');
    
} elseif ( isset($url["proCat"]) ) {
    require_once('php/functionResPro.php');
    
} elseif ( isset($url["resCat"]) ) {
    require_once('php/functionResSoc.php');
    
} 



// fonction switch categorie recherche

    //affiche les divertissements
    if ( isset($url["divCat"]) ) {
        $i = $url["divCat"] ;
        switch ($url["divCat"]) {
            case 0: // affiche le profil perso
                $main = appelPsn();
                break;
            case 1: // affiche le parcour pro
                $main = appelXboxlive();
                break;
            case 2: // affiche les reseaux sociaux
                $main = appelSteam();
                break;
            case 3: // affiche le parcour pro
                $main = appelBattlenet();
                break;
            case 4: // affiche les reseaux sociaux
                $main = appelNintendo();
                break;
            case 5: // affiche les reseaux sociaux
                $main = appelOrigin();
                break;
        } 
            echo $main;
    
    //affiche les réseaux pro
    }  elseif ( isset($url["proCat"]) ) {
                $i = $url["proCat"] ;
                switch ($url["proCat"]) {
                    case 0: 
                        $main = appelLinkedin();
                        break;
                    case 1: 
                        $main = appelViadeo();
                        break;
                    case 2:
                        $main = appelXing();
                        break;
                    case 3:
                        $main = appelMuxy();
                        break;
                    case 4: 
                        $main = appelGithub();
                        break;
                } 
                    echo $main;
        
    //affiche les réseaux sociaux
    }  elseif ( isset($url["resCat"]) ) {
                $i = $url["resCat"] ;
                switch ($url["resCat"]) {
                    case 0: // affiche les profils facebook
                        $main = appelFacebook();
                        break;
                    case 1: // affiche les profils twitter
                        $main = appelTwitter();
                        break;
                    case 2: // affiche les profils youtube
                        $main = appelYoutube();
                        break;
                    case 3: // affiche les profils google+
                        $main = appelGoogle();
                        break;
                    case 4: // affiche les profils skype
                        $main = appelSkype();
                        break;
                    case 5: // affiche les profils instagram
                        $main = appelInstagram();
                        break;
                    case 6: // affiche les profils pinterest
                        $main = appelPinterest();
                        break;
                    case 7: // affiche les profils deezer
                        $main = appelDeezer();
                        break;
                    case 8: // affiche les profils spotify
                        $main = appelSpotify();
                        break;
                    case 9: // affiche les profils viber 
                        $main = appelViber();
                        break;
                } 
                    echo $main;
                
            }
