<?php
include_once '_debut.inc.php';
?>

<!-- Une div contenant la class "container" préfixe obligatoirement les lignes (div de class=row) -->
<div class="container">
    <!-- ligne principale -->
    <div class="row "> 
        <!-- première colonne (s'étend sur de 3 colonnes sur 12 possibles) -->
        <div class="col-md-3 border">
            <br />
            <div id="menuGauche" class="btn-group-vertical btn-block">
                <a href="index.php" class="btn btn-primary btn-block">
                    ACCUEIL</a>
                <a href="index.php" class="btn btn-primary ">
                    ACCUEIL</a>
                    </div> 
            <img src="img/crosl.png" class="img-responsive" alt="Responsive image">
        </div>

        <!-- deuxième colonne (s'étend sur 7 colonnes sur 12 possibles à partir de la 3) -->
        <div class="col-md-7 border">
            <br />
            <!-- une ligne dans une colonne -->
            <div class="row">
                <?php
                //on affiche la liste formations proposées
                    $listeFormations = listeFormations();
                    foreach ($listeFormations as $formation):
                ?>
                <div class="col-md-6">
                    <article class="panel panel-default articleEtablissemnt bgColorTheme">
                        <p> Objectif : <?php echo $formation["objectif"]; ?> </p>
                        <p> Coût: <?php echo $formation["couts"]; ?> € </p>
                        <?php
                        //Si l'utilisateur ne s'est pas authentifié il ne peut pas accéder aux sessions
                        // disponibles pour chaque formation et on le redirige vers l'accueil pour lui 
                        // proposer de creer un commpte
                        if(empty($_SESSION['idUtilisateur'])){
                            ?>
                            <p> Veuillez <a href="index.php">vous connecter</a> pour accéder aux sessions disponibles pour cette formation </p>
                        <?php
                        }
                        else {
                        //s'il est authentifié il peut accéder aux détails des formations;
                        //on envoie dans l'URL de la page de destination le numero de la formation ainsi que son intitulé
                            ?>
                            <p><a href="listeSessions.php?numFormation=<?php echo $formation["numFormation"]; ?>&objectif=<?php echo $formation["objectif"] ?>">Accéder aux sessions disponibles pour cette formation</a></p>
                        <?php
                        }
                        ?>
                    </article>
                </div>

                <?php endforeach;?>

            </div>
        </div>
    </div>
</div> <!-- /container -->


