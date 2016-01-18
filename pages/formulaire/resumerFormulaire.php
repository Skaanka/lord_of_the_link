<?php 
// creation de session
session_start();   
// connexion bdd
require_once('../php/connexion.php');

/* aide debug */
    //echo "<pre>";
    //print_r($_SESSION['inscription']);
    //echo "<pre>";



// INSERT des 3 pages de formulaire.


/************************
// INSERT Formulaire 1 //    --------> [OK]
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



// requete sql pour recuperer l'id crée ci-dessus a partir du mail (le mail est unique)
$inscriptionTemp = $db->prepare('SELECT id, mail FROM membres WHERE mail= ? ');
$inscriptionTemp->execute(array($_SESSION['inscription']['mail']));

while ($donnees = $inscriptionTemp->fetch()) {
    //print_r($donnees);
	$recupId = $donnees['0']; // contient l'id lié a la session inscription
}
$inscriptionTemp->closeCursor();


/************************
// INSERT formulaire 2 //     -------->  [OK]
************************/

/*******************
//    DIPLOMES    //    --------> [OK] [4/4]
*******************/

// INSERT Diplome ligne un
if(isset($_SESSION['inscription']['annees_obt'], $_SESSION['inscription']['intitule'], $_SESSION['inscription']['ecole'])) {  // empty ou isset ??
    $inscriptionDiplome = $db->prepare
    ("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
    VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
        $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionDiplome->bindValue(':id_membres' , $recupId, PDO::PARAM_INT);
        $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole'], PDO::PARAM_STR);
        $inscriptionDiplome->execute();
}

// INSERT Diplome ligne deux
if(isset($_SESSION['inscription']['annees_obt2'], $_SESSION['inscription']['intitule2'], $_SESSION['inscription']['ecole2'])) {
    $inscriptionDiplome = $db->prepare
    ("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
    VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
        $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionDiplome->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt2'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule2'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole2'], PDO::PARAM_STR);
        $inscriptionDiplome->execute();
}

// INSERT Diplome ligne trois
if(isset($_SESSION['inscription']['annees_obt3'], $_SESSION['inscription']['intitule3'], $_SESSION['inscription']['ecole3'])) {
    $inscriptionDiplome = $db->prepare
    ("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
    VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
        $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionDiplome->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt3'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule3'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole3'], PDO::PARAM_STR);
        $inscriptionDiplome->execute();
}

// INSERT Diplome ligne quatre
if(isset($_SESSION['inscription']['annees_obt4'], $_SESSION['inscription']['intitule4'], $_SESSION['inscription']['ecole4'])) {
    $inscriptionDiplome = $db->prepare
    ("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) 
    VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
        $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionDiplome->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionDiplome->bindValue(':annees_obt' , $_SESSION['inscription']['annees_obt4'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':intitule' , $_SESSION['inscription']['intitule4'], PDO::PARAM_STR); 
        $inscriptionDiplome->bindValue(':ecole' , $_SESSION['inscription']['ecole4'], PDO::PARAM_STR);
        $inscriptionDiplome->execute();
}



/*******************
//     XP PRO     //    --------> [OK][6/6]
*******************/

// INSERT XP PRO ligne un
if(isset($_SESSION['inscription']['periode_debut'], $_SESSION['inscription']['periode_fin'], $_SESSION['inscription']['compagnie'], $_SESSION['inscription']['poste'])) {
    $inscriptionXpPro = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
    VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
        $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie'], PDO::PARAM_STR);
        $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste'], PDO::PARAM_STR);
        $inscriptionXpPro->execute();
}

// INSERT XP PRO ligne deux
if(isset($_SESSION['inscription']['periode_debut2'], $_SESSION['inscription']['periode_fin2'], $_SESSION['inscription']['compagnie2'], $_SESSION['inscription']['poste2'])) {
    $inscriptionXpPro = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
    VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
        $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut2'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin2'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie2'], PDO::PARAM_STR);
        $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste2'], PDO::PARAM_STR);
        $inscriptionXpPro->execute();
}

// INSERT XP PRO ligne trois
if(isset($_SESSION['inscription']['periode_debut3'], $_SESSION['inscription']['periode_fin3'], $_SESSION['inscription']['compagnie3'], $_SESSION['inscription']['poste3'])) {
    $inscriptionXpPro = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
    VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
        $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut3'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin3'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie3'], PDO::PARAM_STR);
        $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste3'], PDO::PARAM_STR);
        $inscriptionXpPro->execute();
}

// INSERT XP PRO ligne quatre
if(isset($_SESSION['inscription']['periode_debut4'], $_SESSION['inscription']['periode_fin4'], $_SESSION['inscription']['compagnie4'], $_SESSION['inscription']['poste4'])) {
    $inscriptionXpPro = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
    VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
        $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut4'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin4'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie4'], PDO::PARAM_STR);
        $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste4'], PDO::PARAM_STR);
        $inscriptionXpPro->execute();
}

// INSERT XP PRO ligne cinq
if(isset($_SESSION['inscription']['periode_debut5'], $_SESSION['inscription']['periode_fin5'], $_SESSION['inscription']['compagnie5'], $_SESSION['inscription']['poste5'])) {
    $inscriptionXpPro = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
    VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
        $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut5'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin5'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie5'], PDO::PARAM_STR);
        $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste5'], PDO::PARAM_STR);
        $inscriptionXpPro->execute();
}

// INSERT XP PRO ligne six
if(isset($_SESSION['inscription']['periode_debut6'], $_SESSION['inscription']['periode_fin6'], $_SESSION['inscription']['compagnie6'], $_SESSION['inscription']['poste6'])) {
    $inscriptionXpPro = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) 
    VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
        $inscriptionXpPro->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionXpPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionXpPro->bindValue(':periode_debut' , $_SESSION['inscription']['periode_debut6'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':periode_fin' , $_SESSION['inscription']['periode_fin6'], PDO::PARAM_STR); 
        $inscriptionXpPro->bindValue(':compagnie' , $_SESSION['inscription']['compagnie6'], PDO::PARAM_STR);
        $inscriptionXpPro->bindValue(':poste' , $_SESSION['inscription']['poste6'], PDO::PARAM_STR);
        $inscriptionXpPro->execute();
}


/*******************
//   COMPETENCES  //    --------> [OK]   [NOTE ce contenu necessitera surment une table personnelle, sinon je pense que des conflit peuvent avoir lieu dans les requetes A VOIR]
*******************/

if(isset($_SESSION['inscription']['competences'])) {
    $competences = $db->prepare
    ("INSERT INTO experience_pro (id, id_membres, competences) 
    VALUES (:id, :id_membres, :competences) ");
        $competences->bindValue(':id' , '', PDO::PARAM_INT);
        $competences->bindValue(':id_membres' , $recupId, PDO::PARAM_INT);
        $competences->bindValue(':competences' , $_SESSION['inscription']['competences'], PDO::PARAM_STR); 
        $competences->execute();
}



/*******************
//   FIL D'ACTU   //    --------> A TESTER 
*******************/

if(isset($_SESSION['inscription']['messages'])) {
    $file_actu = $db->prepare
        ("INSERT INTO actu_perso (id, id_membres, messages) 
        VALUES (:id, :id_membres, :messages) ");
        $file_actu->bindValue(':id' , '', PDO::PARAM_INT);
        $file_actu->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $file_actu->bindValue(':messages' , $_SESSION['inscription']['messages'], PDO::PARAM_STR); 
        $file_actu->execute();
}


/*******************
//    PORTFOLIO   //    --------> [OK]  [NOTE ce contenu necessitera surment une table personnelle, sinon je pense que des conflit peuvent avoir lieu dans les requetes A VOIR]
*******************/
if(isset($_SESSION['inscription']['porte_folio'])) {
    $portfolio = $db->prepare
        ("INSERT INTO experience_pro (id, id_membres, porte_folio)  
        VALUES (:id, :id_membres, :porte_folio) ");
        $portfolio->bindValue(':id' , '', PDO::PARAM_INT);
        $portfolio->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $portfolio->bindValue(':porte_folio' , $_SESSION['inscription']['porte_folio'], PDO::PARAM_STR); 
        $portfolio->execute();
}





/************************
// INSERT Formulaire 3 //    --------> [OK]
************************/


/*******************
// DIVERTISSEMENT //    --------> [OK]
*******************/

if(isset($_SESSION['inscription']['psn'], $_SESSION['inscription']['xboxlive'], $_SESSION['inscription']['steam'], $_SESSION['inscription']['battlenet'], $_SESSION['inscription']['nintendo'], $_SESSION['inscription']['origin'])) {
    
    $inscriptionDiv = $db->prepare
        ("INSERT INTO divertissements (id, id_membres, psn, xboxlive, steam, battlenet, compte_nintendo, origin)  
        VALUES (:id, :id_membres, :psn, :xboxlive, :steam, :battlenet, :compte_nintendo, :origin) ");
        $inscriptionDiv->bindValue(':id' , '', PDO::PARAM_INT);
        $inscriptionDiv->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $inscriptionDiv->bindValue(':psn' , $_SESSION['inscription']['psn'], PDO::PARAM_STR); 
        $inscriptionDiv->bindValue(':xboxlive' , $_SESSION['inscription']['xboxlive'], PDO::PARAM_STR); 
        $inscriptionDiv->bindValue(':steam' , $_SESSION['inscription']['steam'], PDO::PARAM_STR); 
        $inscriptionDiv->bindValue(':battlenet' , $_SESSION['inscription']['battlenet'], PDO::PARAM_STR); 
        $inscriptionDiv->bindValue(':compte_nintendo' , $_SESSION['inscription']['nintendo'], PDO::PARAM_STR); 
        $inscriptionDiv->bindValue(':origin' , $_SESSION['inscription']['origin'], PDO::PARAM_STR); 
        $inscriptionDiv->execute();
}



/*******************
//   RESEAUX PRO  //    --------> [OK]
*******************/

if(isset($_SESSION['inscription']['linkedin'], $_SESSION['inscription']['viadeo'], $_SESSION['inscription']['xing'], $_SESSION['inscription']['muxy'])) {
    
    $reseauxPro = $db->prepare
        ("INSERT INTO pro (id, id_membres, linkedin, viadeo, xing, muxi)  
        VALUES (:id, :id_membres, :linkedin, :viadeo, :xing, :muxi) ");
        $reseauxPro->bindValue(':id' , '', PDO::PARAM_INT);
        $reseauxPro->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $reseauxPro->bindValue(':linkedin' , $_SESSION['inscription']['linkedin'], PDO::PARAM_STR); 
        $reseauxPro->bindValue(':viadeo' , $_SESSION['inscription']['viadeo'], PDO::PARAM_STR); 
        $reseauxPro->bindValue(':xing' , $_SESSION['inscription']['xing'], PDO::PARAM_STR); 
        $reseauxPro->bindValue(':muxi' , $_SESSION['inscription']['muxy'], PDO::PARAM_STR); 
        $reseauxPro->execute();
}



/*******************
//   RESEAUX SOC  //    --------> [OK]
*******************/

if(isset($_SESSION['inscription']['facebook'], $_SESSION['inscription']['twitter'], $_SESSION['inscription']['youtube'], $_SESSION['inscription']['google'], $_SESSION['inscription']['skype'], $_SESSION['inscription']['instagram'], $_SESSION['inscription']['pinterest'], $_SESSION['inscription']['deezer'], $_SESSION['inscription']['spotify'], $_SESSION['inscription']['viber'])) {
    
    $reseauxSoc = $db->prepare
        ("INSERT INTO reseaux (id, id_membres, facebook, twitter, youtube, google, skype, instagram, pinterest, deezer, spotify, viber)  
        VALUES (:id, :id_membres, :facebook, :twitter, :youtube, :google, :skype, :instagram, :pinterest, :deezer, :spotify, :viber) ");
        $reseauxSoc->bindValue(':id' , '', PDO::PARAM_INT);
        $reseauxSoc->bindValue(':id_membres' , $recupId, PDO::PARAM_INT); 
        $reseauxSoc->bindValue(':facebook' , $_SESSION['inscription']['facebook'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':twitter' , $_SESSION['inscription']['twitter'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':youtube' , $_SESSION['inscription']['youtube'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':google' , $_SESSION['inscription']['google'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':skype' , $_SESSION['inscription']['skype'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':instagram' , $_SESSION['inscription']['instagram'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':pinterest' , $_SESSION['inscription']['pinterest'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':deezer' , $_SESSION['inscription']['deezer'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':spotify' , $_SESSION['inscription']['spotify'], PDO::PARAM_STR); 
        $reseauxSoc->bindValue(':viber' , $_SESSION['inscription']['viber'], PDO::PARAM_STR); 
        $reseauxSoc->execute();
}


//un fois le traitement du formulaire enregistrer dans la BDD, on peut détruire la session inscription et rediriger l'utilisateur sur la page index.ph
unset($_SESSION["inscription"]);
header('location: ../index.php'); // TODO page de validation du formulaire exemple : index.php?return=succes ou succes sera un "case: succes " dans la boucle switch

