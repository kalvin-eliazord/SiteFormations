<?php

/**
 * Retourne un gestionnaire de connexion.
 *
 * Se connecte à la base de données "formations" 
 * du serveur de bases de données MYSQL et retourne un gestionnaire de connexion
 * 
 * @return PDO|null Un objet PDO en cas de succès, "null" en cas d'echec
 */
function connexionBDD() {
    $pdo = null;
    try {
        $pdo = new PDO(
                'mysql:host=localhost;dbname=croslformations', 'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}

function listeFormations() {
    $lesFormations = array();
    $pdo = connexionBDD();
    if ($pdo != NULL) {
        $req = "select * from formation";
        $pdoStatement = $pdo->query($req);
        $lesFormations = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesFormations;
}

function connexion($mail, $password){
	$identifiants = array();
	$pdo = connexionBDD();
	if ($pdo != NULL) {
    	$req = "select * from utilisateur where password='$password' and mail='$mail'";
    	$pdoStatement = $pdo->query($req);
	    $identifiants = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
	}
	return $identifiants;
}

function creerCompte($nom, $prenom, $mail, $password, $idStatus, $telephone) {
    $pdo = connexionBDD();
    if ($pdo != null) {
        $nom = $pdo->quote($nom);
        $prenom = $pdo->quote($prenom);
        $mail = $pdo->quote($mail);
        $password = $pdo->quote($password);
        $idStatus = $pdo->quote($idStatus);
        $req = "insert into utilisateur (nom, prenom, mail, password, idPublic, telephone) values ($nom, $prenom, $mail, $password, $idStatus, $telephone)";

        $pdo->exec($req);
    }
}

function listeSessions($numFormation){
	$sessions = array();
	$pdo = connexionBDD();
	if ($pdo != null){
		$req = "SELECT `numSession`, `dateLimiteInscription`, `dateSession`, "
                        . "`dateFinSession`,`numFormation`, "
                        . "`nbPlaces`, lieu.nomLieu, intervenant.nom from session, lieu, intervenant where numFormation='$numFormation' AND session.idLieu = lieu.idLieu AND session.idIntervenant = intervenant.idIntervenant";
		$pdoStatement = $pdo->query ($req);
		$sessions = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
	}
	return $sessions;
}

function inscriptionSession($numSession, $idUtilisateur) {
	$pdo = connexionBDD();
    if ($pdo != null) {
        $numSession = $pdo->quote($numSession);
        $idUtilisateur = $pdo->quote($idUtilisateur);
        $req = "insert into inscription (numSession, idUtilisateur) values ($numSession, $idUtilisateur)";
        $pdo->exec($req);
    }
}

