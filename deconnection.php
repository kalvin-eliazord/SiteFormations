<?php
include_once '_debut.inc.php';


if(isset($_POST['deconnection'])){
    
	// On détruit les variables de notre session
	session_unset ();

	// On détruit notre session
	session_destroy ();

	// On redirige le visiteur vers la page d'accueil
	header ('location: index.php');
}





?>