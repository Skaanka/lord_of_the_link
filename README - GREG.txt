les input des diplomes et xp pro ne sont pas responsive sur mon �cran (1600 * 900) 
si je saisi la date "2010", je ne vois que "010"

-----------------------------------------------------------------------------

Si lors de l'inscription l'utilistateur fais pr�c�dent, 
l'inscription est consid�r� comme terminer.

L'utilisateur qui va par exemple vouloir recommencer l'�tape 1,

va faire retour
va d'abord prendre une page d'erreur (puisque le compte est cr�e dans la db)
va de nouveau faire retour

ou revenir sur la page du formulaire1 si il clic sur l'input pr�c�dente

il va rentr� de nouveau ses coordonn�es mais sera confront� a une erreur puisque
son compte sera deja cr�er.


EDIT : solution php (surment la meilleur)
En �crivant ce petit pav�, l'id�e m'est venu de ne jamais cr�er de compte jusqu'a la fin du
formulaire mais de faire l'insertion dans la base de donn�e a la fin du formulaire
grace a la gestion de la $_SESSION[inscription].


J'�tais au d�but parti sur une piste en JavaScript, vu sur un forum (adapter a la situation?)

ou une solution en php, voir d�sormais ci dessus :)


(MEMO quand tout ne ce passe pas comme pr�vu) 
une question me viens �galement, que ce passe t-il si, un utilisateur "A" et un utilisateur "B"
s'inscrivent au m�me moment ?

----> Au niveau de la $_SESSION['inscription'] ? 
	possibilit� d'en avoir plusieurs activent en m�me temps ?
	---> solution possible : boucle qui cr�er une $_SESSION['inscription2']
				si isset($_SESSION['inscription']) qui s'increment 
				jusqu'a cr�er $_SESSION['inscriptionX'] ou x = ?
		---> r�alisable ?????

