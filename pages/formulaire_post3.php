<?php 
// connexion bdd
    session_start();
    require_once('../php/connexion.php');
    //print_r($_SESSION['inscription']);
    
    try { 
        if ($_POST) {
            //nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);
            
            // ajout de l'experience pro d'un membres
            $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
            $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
            $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
            $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt'], PDO::PARAM_STR); 
            $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule'], PDO::PARAM_STR); // n'ecrit rien dans la bdd
            $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole'], PDO::PARAM_STR); // n'ecrit rien dans la bdd
            
            $inscriptionDiplome->execute();
            print_r($inscriptionDiplome);
            header("Location: formulaire3.php");
        } else {
            header("Location: formulaire2.php");
            echo "Erreur : echec de l'inscription !";
        }
            
    } catch(PDOException $ex) {
        echo "erreur! !";
    }

// REQUETE INNER JOIN
//$InscriptionDiplome = $db->query("SELECT sujets.libelle_suj, membres.pseudo, messages.date_creation FROM messages 
//    INNER JOIN sujets ON messages.sujet_id = sujets.id_sujet 
//    INNER JOIN membres ON messages.membre_id = membres.id_membre
//    LIMIT 5"); // ORDER BY 
?>

