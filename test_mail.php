<?php
require 'vendor/autoload.php';
//$sendgrid = new SendGrid('username', 'password');
// OR
$sendgrid = new SendGrid('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');

$email = new SendGrid\Email();
$email
    ->addTo('kangni.devis@yahoo.fr') // destinataire 
    //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves. We are now using our Web API parameters instead of the X-SMTPAPI header. What this means is that if you call `addTo()` multiple times for an email, **ONE** email will be sent with each email address visible to everyone.
    ->setFrom('nepasrepondre@lordoflinks.com') // expéditeur
    ->setSubject('Réinitialisation du mot de passe') // sujet
    ->setText('Hello World!') // version texte
    ->setHtml('<strong>Hello World!</strong>'); // version html

$sendgrid->send($email);
