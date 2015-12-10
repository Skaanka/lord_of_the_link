<?php

// Gestion des pages a afficher section forum
function affichageCat($main) {
        
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case "form1":
            $main = "formulaire.php";
            break;
        case "form2":
            $main = "formulaire2.php";
            break;
        case "form3":
            $main = "formulaire3.php";
            break;
        case "form4":
            $main = "formulaire4.php";
            break;
        default:
            $main = "formulaire.php";
            
    } 
    include($main); 
    } else {
    include("../index.php");
    }
}