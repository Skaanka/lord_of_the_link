<?php

// detruire une session
function destructionSessionInscription() {
    // detruit la session inscription si elle existe
    if ( isset ($_SESSION["inscription"])) {
        unset($_SESSION["inscription"]);
    }
}



