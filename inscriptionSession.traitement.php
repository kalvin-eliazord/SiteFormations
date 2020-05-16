<?php
include_once '_debut.inc.php';

 
$idUtilisateur = $_SESSION['idUtilisateur'];


//on récupère la variable de SESSION qui stocke l'id de l'utilisateur ainsi que celle qui stocke le
//numéro de la session a laquelle l'utilisateur a choisit de s'inscrire via la variable POST
if (isset($_POST['valider'])){

	$numSession = $_POST['numSession'];
	echo $numSession;
	
	//on réalise l'inscription en base de données
        // puis l'utilisateur est redirigé vers la page des formations
	inscriptionSession($numSession, $idUtilisateur);
	header("location: traitementReussi.php");

}


?>