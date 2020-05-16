<?php
session_start();
include_once '_fonctionsBDD.inc.php';

//on vérifie les identifiants entrées par l'utilisateur lors de la tentative de connexion
if(isset($_POST['envoyer'])) {            
    $identifiants = connexion($_POST["mail"], $_POST["password"]);
    foreach ($identifiants as $identifiant) {
        $_SESSION['prenom'] = $identifiant['prenom'];
        $_SESSION['idUtilisateur'] = $identifiant['idUtilisateur'];
    }
    
}

//cette variable permet de savoir si l'utilisateur est connecté
// et modifie l'affichage des page en conséquence


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Le CROSL</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="bootstrap/css/theme.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
           
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div id="navbar" class="navbar-collapse collapse">

                    </div>
                        <form  method="post" class="navbar-form navbar-right" role="form" 
                               action="index.php">

                            <div class="form-group">
                                <?php if(empty($_SESSION["idUtilisateur"])){
                                    ?>
                                    <input name="mail" type="text" placeholder="Email" class="form-control" required>
                                <?php
                                } 
                                ?>
                                    
                                
                            </div>
                            <div class="form-group">
                                <?php if(empty($_SESSION["idUtilisateur"])){
                                    ?>
                                    <input name="password" type="password" placeholder="Mot de passe" class="form-control" required>
                                <?php
                                } 
                                ?>
                            </div>
                            <?php if(empty($_SESSION["idUtilisateur"])){
                                    ?>
                            <button name="envoyer" type="submit" class="btn btn-success">Connexion</button>
                            <?php
                            } 
                            ?>
                        </form>
                        <!--bouttons déconecté ne se voit pas si l'utilisateur n'est pas connecté--> 
                        <?php if(isset($_SESSION["idUtilisateur"])){
                                    ?>
                        <form  method="post" class="navbar-form navbar-right" role="form" 
                               action="deconnection.php">
                               <button style='color:red'; name="deconnection" type="submit" class="btn btn-success">Se déconnecter</button>
                               <?php
                            } 
                            ?>
                        </form>


                  
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <br />

        



