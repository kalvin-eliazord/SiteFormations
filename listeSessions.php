<?php
include_once '_debut.inc.php';

//on récupère le numéro de la formation, son intitulé et l'idLieu dans l'URL via la variable $_GET
$numFormation = $_GET['numFormation'];
$objectif = $_GET['objectif'];
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
                <a href="listeFormations.php" class="btn btn-primary ">
                    CONSULTER NOS FORMATIONS</a>
                    </div> 
            <img src="img/crosl.png" class="img-responsive" alt="Responsive image">
        </div>
        <h1 class="text-uppercase text-center bg-success">Sessions pour la formation <?php echo $objectif ?></h1>
				<?php
				//on accède aux sessions disponibles pour chaque formation et on affiche leurs détails
				$sessions = listeSessions($numFormation);
				foreach ($sessions as $session) {
					?>
					<article class="panel panel-default articleEtablissemnt bgColorTheme" border=1>
						<form method="POST" action="inscriptionSession.traitement.php">
							<!-- le input hidden sert a envoyer de manière dissimulé le numéro de la session choisie
							afin de réaliser l'inscription a la formation dans la page de destination -->
							<input type="hidden" name="numSession" value="<?php echo $session['numSession']; ?>">

							<p>Numéro de la session : <?php echo $session['numSession']; ?></p>

							<p>Date limite d'inscription : <?php echo $session['dateLimiteInscription']; ?></p>

							<p>Date de début de la session : <?php echo $session['dateSession']; ?></p>

							<p>Date de fin de la session : <?php echo $session['dateFinSession']; ?></p>
                                                        		
							<p>Nombre de places disponibles : <?php echo $session['nbPlaces']; ?></p>
                                                        
                                                        <p>Lieu de la session : <?php echo $session['nomLieu']; ?></p>
                                                        
                                                        <p>Nom de l'intervenant : <?php echo $session['nom']; ?></p>
                                                        
							<input type="submit" name="valider" value="S'inscrire">
					</form>
					</article>
					
				
				<?php
				}
				?>
			</table>
		</div>
    <hr>
</div> <!-- /container -->
                        

