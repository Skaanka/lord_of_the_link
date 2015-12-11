<?php 

    // creation de session
    session_start();
    
    // connexion bdd
    require_once('../php/connexion.php');

    /* aide debug */
    echo "<pre>";
    print_r($_SESSION['inscription']);
    echo "<pre>";



// INSERT des 3 pages de formulaire.

//Probleme numero 1 : Comment faire comprendre a l'insert la bonne id membre

/************************
// INSERT Formulaire 1 //    --------> 
************************/

$inscription = $db->prepare
("INSERT INTO membres (id, nom, prenom, ddn, avatar, adresse, cp, ville, mail, phone, siteWeb, mot_de_passe) 
VALUES (:id, :nom, :prenom, :ddn, :avatar, :adresse, :cp, :ville, :mail, :phone, :siteWeb, :mot_de_passe)");

    $inscription->bindValue(':id' , '', PDO::PARAM_INT);
    $inscription->bindValue(':nom' , $_SESSION['inscription']['nom'], PDO::PARAM_STR);
    $inscription->bindValue(':prenom', $_SESSION['inscription']['prenom'], PDO::PARAM_STR);
    $inscription->bindValue(':ddn', $_SESSION['inscription']['ddn'], PDO::PARAM_STR);
    $inscription->bindValue(':avatar', $_SESSION['inscription']['avatar'], PDO::PARAM_STR);
    $inscription->bindValue(':adresse', $_SESSION['inscription']['adresse'], PDO::PARAM_STR);
    $inscription->bindValue(':cp', $_SESSION['inscription']['cp'], PDO::PARAM_STR);
    $inscription->bindValue(':ville', $_SESSION['inscription']['ville'], PDO::PARAM_STR);
    $inscription->bindValue(':mail', $_SESSION['inscription']['mail'], PDO::PARAM_STR);
    $inscription->bindValue(':phone', $_SESSION['inscription']['phone'], PDO::PARAM_STR);
    $inscription->bindValue(':siteWeb', $_SESSION['inscription']['siteWeb'], PDO::PARAM_STR);
    $inscription->bindValue(':mot_de_passe', $_SESSION['inscription']['mot_de_passe'], PDO::PARAM_STR);
    $inscription->execute();

// faire une requete qui va chercher le membres créer dans la DB via le mail pour recuperer l'id (devrait résoude le pb id_membres)

/************************
// INSERT formulaire 2 //     --------> 
************************/



/*******************
//    DIPLOMES    //    --------> A TESTER [4/4] quand probleme id-membre résolu
*******************/

// INSERT Diplome ligne un
$inscriptionDiplome = $db->prepare
("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
    $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole'], PDO::PARAM_STR);
    $inscriptionDiplome->execute();


// INSERT Diplome ligne deux
$inscriptionDiplome = $db->prepare
("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
    $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt2'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule2'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole2'], PDO::PARAM_STR);
    $inscriptionDiplome->execute();

// INSERT Diplome ligne trois
$inscriptionDiplome = $db->prepare
("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
    $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt3'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule3'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole3'], PDO::PARAM_STR);
    $inscriptionDiplome->execute();

// INSERT Diplome ligne quatre
$inscriptionDiplome = $db->prepare
("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
    $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt4'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule4'], PDO::PARAM_STR); 
    $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole4'], PDO::PARAM_STR);
    $inscriptionDiplome->execute();



/*******************
//     XP PRO     //    --------> A TESTER [6/6] quand probleme id-membre résolu  
*******************/

// INSERT XP PRO ligne un
$inscriptionXpPro = $db->prepare
("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
    $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionXpPro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie'], PDO::PARAM_STR);
    $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste'], PDO::PARAM_STR);
    $inscriptionXpPro->execute();

// INSERT XP PRO ligne deux
$inscriptionXpPro = $db->prepare
("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
    $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionXpPro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut2'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin2'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie2'], PDO::PARAM_STR);
    $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste2'], PDO::PARAM_STR);
    $inscriptionXpPro->execute();

// INSERT XP PRO ligne trois
$inscriptionXpPro = $db->prepare
("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
    $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionXpPro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut3'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin3'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie3'], PDO::PARAM_STR);
    $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste3'], PDO::PARAM_STR);
    $inscriptionXpPro->execute();

// INSERT XP PRO ligne quatre
$inscriptionXpPro = $db->prepare
("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
    $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionXpPro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut4'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin4'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie4'], PDO::PARAM_STR);
    $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste4'], PDO::PARAM_STR);
    $inscriptionXpPro->execute();

// INSERT XP PRO ligne cinq
$inscriptionXpPro = $db->prepare
("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
    $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionXpPro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut5'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin5'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie5'], PDO::PARAM_STR);
    $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste5'], PDO::PARAM_STR);
    $inscriptionXpPro->execute();

// INSERT XP PRO ligne six
$inscriptionXpPro = $db->prepare
("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
    $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
    $inscriptionXpPro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut6'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin6'], PDO::PARAM_STR); 
    $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie6'], PDO::PARAM_STR);
    $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste6'], PDO::PARAM_STR);
    $inscriptionXpPro->execute();



/*******************
//   COMPETENCES  //    --------> A FINIR quand probleme id-membre résolu
*******************/
//créer une table perso pour competences
$competences = $db->prepare
("INSERT INTO actu_perso (id, id_membres, messages) 
VALUES (:id, :id_membres, :messages) ");
    $competences->bindValue(':id' , '', PDO::PARAM_INT);
    $competences->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $competences->bindValue(':messages' , $_SESSION['inscription']['competences'], PDO::PARAM_STR); 
    $competences->execute();



/*******************
//   FIL D'ACTU   //    --------> A TESTER quand probleme id-membre résolu
*******************/
$file_actu = $db->prepare
    ("INSERT INTO actu_perso (id, id_membres, messages) 
    VALUES (:id, :id_membres, :messages) ");
    $file_actu->bindValue(':id' , '', PDO::PARAM_INT);
    $file_actu->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); // param 2 = ???
    $file_actu->bindValue(':messages' , $_SESSION['inscription']['porte_folio'], PDO::PARAM_STR); 
    $file_actu->execute();



/*******************
//    PORTFOLIO   //    -------->A TESTER quand probleme id-membre résolu
*******************/
