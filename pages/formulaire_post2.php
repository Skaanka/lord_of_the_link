<?php 
// connexion bdd
    session_start();
    require_once('../php/connexion.php');
    //print_r($_SESSION['inscription']);
    
    try { 
        if ($_POST['submit2']) {

            //nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);
            // ajout des diplomes d'un membres
            
            // vérifier que années est non vide ET intitulé est non vide ET ecole non vide
            // alors on insère dans la table diplôme
            if(!empty($_POST['annees_obt']) && $_POST['intitule'] && $_POST['ecole']) {
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
            if(!empty($_POST['annees_obt2']) && $_POST['intitule2'] && $_POST['ecole2']) {
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt2'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule2'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole2'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
            if(!empty($_POST['annees_obt3']) && $_POST['intitule3'] && $_POST['ecole3']) {
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt3'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule3'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole3'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
            if(!empty($_POST['annees_obt4']) && $_POST['intitule4'] && $_POST['ecole4']) {
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt4'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule4'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole4'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
 $file_actu = $db->prepare("INSERT INTO actu_perso (id, id_membres, messages) VALUES (:id, :id_membres, :messages) ");
                $file_actu->bindValue(':id' , '', PDO::PARAM_INT);
                $file_actu->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $file_actu->bindValue(':messages' , $_POST['messages'], PDO::PARAM_STR); 

                $file_actu->execute();
            
                // TODO FIL D'ACTU (HIDDEN SI 1er INSCRIPTION ?) DONE!!!           
             $file_actu = $db->prepare("INSERT INTO actu_perso (id, id_membres, messages) VALUES (:id, :id_membres, :messages) ");
                $file_actu->bindValue(':id' , '', PDO::PARAM_INT);
                $file_actu->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $file_actu->bindValue(':messages' , $_POST['messages'], PDO::PARAM_STR); 

                $file_actu->execute();
            
                //TODO table competences (DONE!!!!)
             $experience_pro = $db->prepare("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste, competences, porte_folio) VALUES (:id, :id_membres, :messages) ");
                $experience_pro->bindValue(':id' , '', PDO::PARAM_INT);
                $experience_pro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $experience_pro->bindValue(':messages' , $_POST['messages'], PDO::PARAM_STR); 

                experience_pro->execute();
            
                //TODO table xp pro (DONE!!!!)


                // TODO FIL D'ACTU (HIDDEN SI 1er INSCRIPTION ?)

           
                //print_r($inscriptionDiplome);
                //print_r($_POST['submit2']);
                //header("Location: formulaire3.php");
            
        } else {
            header("Location: formulaire2.php");
            echo "Erreur : echec de l'inscription !";
        }
        
    } catch(PDOException $ex) {
        echo "erreur! !";
    }
        

?>

