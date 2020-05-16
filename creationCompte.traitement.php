<?php

include_once '_debut.inc.php';

//si les données proviennent bien de notre formulaire
//on crée le compte utilisateur 
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    $idStatus = $_POST['statut'];
    
    creerCompte($nom, $prenom, $mail, $password, $idStatus, $telephone);
}


header("Location:index.php")


    
?>

