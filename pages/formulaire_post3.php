<?php 
// A FAIRE ENTIEREMENT

    // creation de session 
    session_start();

    // connexion bdd
    require_once('../php/connexion.php');
    
    try { 
        if ($_POST) {
            //nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);
            
            // ajout de l'experience pro d'un membres     [A MODIFIER ENTIEREMENT POUR CE FORMULAIRE (exemple du formulaire 1)]
            $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
            $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
            $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
            $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt'], PDO::PARAM_STR); 
            $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule'], PDO::PARAM_STR); 
            $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole'], PDO::PARAM_STR); 
            
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



