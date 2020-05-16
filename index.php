<?php
include_once '_debut.inc.php';

?>

<div class="container">
    <div class="row ">
        <div class="col-md-3 border">
            <div id="menuGauche" class="btn-group-vertical btn-block">

                <a href="listeFormations.php" class="btn btn-primary ">
                    VOIR FORMATIONS DISPONIBLE</a>
        </div> 
            <img src="img/crosl.png" class="img-responsive" alt="Responsive image">
        </div>
        <div class="col-md-7 border">
            <article>
                <header>
                    <p class="text-uppercase text-center bg-success">
                    <?php 
                    //Si l'utilisateur est connecté alors message de bienvenue
                        if(!(empty($_SESSION['idUtilisateur']))) {
                            echo $_SESSION["prenom"].", "; 
                        }
                    ?>
                    Bienvenue sur le site du CROSL 
                    </p>
                </header>
                <p>
                    <?php
                    //on affiche la possibilité de crée un compte si l'utilisateur n'est pas déjà connecté
                if((empty($_SESSION['idUtilisateur']))){
                    ?>
                    Sur ce site vous pourrez trouver les formations de votre choix!
                    <form  method="post" class="navbar-form navbar-right" role="form" 
                               action="creationCompte.php">

                            <button type="creerCompte" class="btn btn-success">S'inscrire</button>
                        </form>
                    <?php
                }
                    ?>
                </p>
            </article>
        </div>
    </div>
    <hr>
    
    <footer>
        <p>&copy; Tout droits réservés - 2020</p>
    </footer>
</div> <!-- /container -->



<?php include_once '_fin.inc.php'; ?>