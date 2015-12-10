<?php 
// connexion bdd
    session_start();
    require_once('../php/connexion.php');
    //print_r($_SESSION['inscription']);
    
    //try { 
        if ( isset($_POST['submit']) ) {
            //TODO nettoyer les espace non voulue 
            //$nom = trim($_POST["nom"]);            



            /*******************
            //    DIPLOMES    //    --------> Fonctionne à 100%
            *******************/
            if(!empty($_POST['annees_obt'] && $_POST['intitule'] && $_POST['ecole'])) {
    
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
            
            
            if(!empty($_POST['annees_obt2'] && $_POST['intitule2'] && $_POST['ecole2'])) {
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt2'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule2'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole2'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
            
            
            if(!empty($_POST['annees_obt3'] && $_POST['intitule3'] && $_POST['ecole3'])) {
                
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt3'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule3'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole3'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }


            if(!empty($_POST['annees_obt4'] && $_POST['intitule4'] && $_POST['ecole4'])) {
                
                $inscriptionDiplome = $db->prepare("INSERT INTO diplomes (id, id_membres, annees_obt, intitule, ecole) VALUES (:id, :id_membres, :annees_obt, :intitule, :ecole) ");
                $inscriptionDiplome->bindValue(':id' , '', PDO::PARAM_INT);
                $inscriptionDiplome->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $inscriptionDiplome->bindValue(':annees_obt' , $_POST['annees_obt4'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':intitule' , $_POST['intitule4'], PDO::PARAM_STR); 
                $inscriptionDiplome->bindValue(':ecole' , $_POST['ecole4'], PDO::PARAM_STR);
                $inscriptionDiplome->execute();
            }
    
    
    
            /*******************
            //     XP PRO     //    --------> EN COURS [3/6]
            *******************/
            if(!empty($_POST['periode_debut'] && $_POST['periode_fin'] && $_POST['compagnie'] && $_POST['poste'])) {
                $ex_pro = $db->prepare("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
                $ex_pro->bindValue(':id' , '', PDO::PARAM_INT);
                $ex_pro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $ex_pro->bindValue(':periode_debut' , $_POST['periode_debut'], PDO::PARAM_STR); 
                $ex_pro->bindValue(':periode_fin' , $_POST['periode_fin'], PDO::PARAM_STR); 
                $ex_pro->bindValue(':compagnie' , $_POST['compagnie'], PDO::PARAM_STR);
                $ex_pro->bindValue(':poste' , $_POST['poste'], PDO::PARAM_STR);
                $ex_pro->execute();
            }  


            if(!empty($_POST['periode_debut2'] && $_POST['periode_fin2'] && $_POST['compagnie2'] && $_POST['poste2'])) {
                $ex_pro = $db->prepare("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
                $ex_pro->bindValue(':id' , '', PDO::PARAM_INT);
                $ex_pro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $ex_pro->bindValue(':periode_debut' , $_POST['periode_debut2'], PDO::PARAM_STR); 
                $ex_pro->bindValue(':periode_fin' , $_POST['periode_fin2'], PDO::PARAM_STR); 
                $ex_pro->bindValue(':compagnie' , $_POST['compagnie2'], PDO::PARAM_STR);
                $ex_pro->bindValue(':poste' , $_POST['poste2'], PDO::PARAM_STR);
                $ex_pro->execute();
            }

            if(!empty($_POST['periode_debut3'] && $_POST['periode_fin3'] && $_POST['compagnie3'] && $_POST['poste2'])) {
                $ex_pro = $db->prepare("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) VALUES (:id, :id_membres, :periode_debut, :periode_fin, :compagnie, :poste) ");
                $ex_pro->bindValue(':id' , '', PDO::PARAM_INT);
                $ex_pro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $ex_pro->bindValue(':periode_debut' , $_POST['periode_debut3'], PDO::PARAM_STR); 
                $ex_pro->bindValue(':periode_fin' , $_POST['periode_fin3'], PDO::PARAM_STR); 
                $ex_pro->bindValue(':compagnie' , $_POST['compagnie3'], PDO::PARAM_STR);
                $ex_pro->bindValue(':poste' , $_POST['poste3'], PDO::PARAM_STR);
                $ex_pro->execute();
            }
            
            /* A FAIRE (Normalement OK)
            
            if(!empty($_POST['periode_debut5'] && $_POST['periode_fin5'] && $_POST['compagnie5'] && $_POST['poste5'])) {
                $experience_pro = $db->prepare("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, postes) VALUES (:id, :id_membres, :periode_debut, :periode_fin,: compagnie,:poste ) ");
                $experience_pro->bindValue(':id' , '', PDO::PARAM_INT);
                $experience_pro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $experience_pro->bindValue(':periode_debut' , $_POST['periode_debut5'], PDO::PARAM_STR); 
                $experience_pro->bindValue(':periode_fin' , $_POST['periode_fin5'], PDO::PARAM_STR); 
                $experience_pro->bindValue(':compagnie' , $_POST['compagnie5'], PDO::PARAM_STR); 
                $experience_pro->bindValue(':poste' , $_POST['poste5'], PDO::PARAM_STR); 
                $experience_pro->execute();
            }
                if(!empty($_POST['periode_debut6'] && $_POST['periode_fin6'] && $_POST['compagnie6'] && $_POST['poste6'])) {
                $experience_pro = $db->prepare("INSERT INTO experience_pro (id, id_membres, periode_debut, periode_fin, compagnie, poste) VALUES (:id, :id_membres, :periode_debut, :periode_fin,: compagnie,:poste ) ");
                $experience_pro->bindValue(':id' , '', PDO::PARAM_INT);
                $experience_pro->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $experience_pro->bindValue(':periode_debut' , $_POST['periode_debut6'], PDO::PARAM_STR); 
                $experience_pro->bindValue(':periode_fin' , $_POST['periode_fin6'], PDO::PARAM_STR); 
                $experience_pro->bindValue(':compagnie' , $_POST['compagnie6'], PDO::PARAM_STR); 
                $experience_pro->bindValue(':poste' , $_POST['poste6'], PDO::PARAM_STR); 
                $experience_pro->execute();
            }
            */
            
            
            
            /*******************
            //   COMPETENCES  //    --------> A FAIRE
            *******************/
            
            /*******************
            //   FIL D'ACTU   //    --------> Fonctionne à 100%
            *******************/
            if(!empty($_POST['messages'])) {                    
             $file_actu = $db->prepare("INSERT INTO actu_perso (id, id_membres, messages) VALUES (:id, :id_membres, :messages) ");
                $file_actu->bindValue(':id' , '', PDO::PARAM_INT);
                $file_actu->bindValue(':id_membres' , $_SESSION['inscription']['id'], PDO::PARAM_INT); 
                $file_actu->bindValue(':messages' , $_POST['messages'], PDO::PARAM_STR); 
                $file_actu->execute();
            }

            /*******************
            //    PORTFOLIO   //    --------> A FAIRE
            *******************/
            
            

            //header("Location: formulaire3.php");  // supprimer le mode commentaire lorsque page OK
            
        } else {
            //header("Location: formulaire2.php"); // supprimer le mode commentaire lorsque page OK
            echo "Erreur : echec de l'inscription !";
        }



        
    /*catch(PDOException $ex) {
      echo "erreur! !";
    }

    }*/
