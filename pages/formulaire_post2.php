<?php 
// connexion bdd
    session_start();
    require_once('../php/connexion.php');
    print_r($_SESSION['inscription']);
    
    try { 
        if ($_POST['submit2']) {
            //nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);
            for ($i = 1; $i <= 4; $i++) {
                // ajout des diplomes d'un membres
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule'], PDO::PARAM_STR); // n'ecrit rien dans la bdd
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole'], PDO::PARAM_STR); // n'ecrit rien dans la bdd

                //TODO table xp pro

                //TODO table competences

                // TODO FIL D'ACTU (HIDDEN SI 1er INSCRIPTION ?)

                $inscriptionDiplome->execute();
            } else {
                print_r($inscriptionDiplome);
                print_r($_POST['submit2']);
                //header("Location: formulaire3.php");
            
        } else {
            header("Location: formulaire2.php");
            echo "Erreur : echec de l'inscription !";
        }
        }
    } catch(PDOException $ex) {
        echo "erreur! !";
    }
        

?>

