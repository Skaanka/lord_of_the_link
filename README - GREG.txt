les input des diplomes et xp pro ne sont pas responsive sur mon écran (1600 * 900) 
si je saisi la date "2010", je ne vois que "010"

-----------------------------------------------------------------------------

Si lors de l'inscription l'utilistateur fais précédent, 
l'inscription est considéré comme terminer.

L'utilisateur qui va par exemple vouloir recommencer l'étape 1,

va faire retour
va d'abord prendre une page d'erreur (puisque le compte est crée dans la db)
va de nouveau faire retour

ou revenir sur la page du formulaire1 si il clic sur l'input précédente

il va rentré de nouveau ses coordonnées mais sera confronté a une erreur puisque
son compte sera deja créer.


EDIT : solution php (surment la meilleur)
En écrivant ce petit pavé, l'idée m'est venu de ne jamais créer de compte jusqu'a la fin du
formulaire mais de faire l'insertion dans la base de donnée a la fin du formulaire
grace a la gestion de la $_SESSION[inscription].


J'étais au début parti sur une piste en JavaScript, vu sur un forum (adapter a la situation?)

ou une solution en php, voir désormais ci dessus :)


(MEMO quand tout ne ce passe pas comme prévu) 
une question me viens également, que ce passe t-il si, un utilisateur "A" et un utilisateur "B"
s'inscrivent au même moment ?

----> Au niveau de la $_SESSION['inscription'] ? 
	possibilité d'en avoir plusieurs activent en même temps ?
	---> solution possible : boucle qui créer une $_SESSION['inscription2']
				si isset($_SESSION['inscription']) qui s'increment 
				jusqu'a créer $_SESSION['inscriptionX'] ou x = ?
		---> réalisable ?????

