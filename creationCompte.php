<?php 
include_once '_debut.inc.php'; 
?>

<form method="POST" action="creationCompte.traitement.php">
    <div class="container">
        <div class="row ">
            <div class="col-md-3 border">
                <br />
                <div id="menuGauche" class="btn-group-vertical btn-block">

                    <a href="listeFormations.php" class="btn btn-primary ">
                        CONSULTER NOS FORMATIONS</a>
                    <a href="index.php" class="btn btn-primary btn-block">
                        ACCUEIL</a>
                </div> 
                <img src="img/crosl.png" class="img-responsive" alt="Responsive image">
            </div>

            <!-- Entre deux layout -->
            <div class="col-md-1 border">

            </div>

            <!-- Layout Droit -->
            <div class="col-md-8 border">
                <br />
                <article>

                    <!-- ligne NOM -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">Nom</span>
                                <input type="text" class="form-control" name="nom" id="nom" size="50" 
                                       maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir 1 caractères au minimum" required placeholder="Rentrez votre nom" required >
                            </div>
                        </div>
                    </div>
                  

                    <br /> 

                    <!-- ligne PRENOM -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox">Prénom</span>
                                <input type="text" class="form-control" name="prenom" id="prenom" size="50" 
                                       maxlength="45" pattern="^[-'çéèùa-zA-Z\s]{1,45}$" title="Saisir 1 caractères au minimum" required placeholder="Rentrez votre prénom" required >
                            </div>
                        </div>
                    </div>
                

                    <br /> 

                    <!-- ligne EMAIL -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Email
                                </span>
                                <input type="email" class="form-control"  name="mail" id="mail" title="Saisir un email valide" maxlength="70" placeholder="Rentrez votre email" required  />

                            </div>
                        </div>
                    </div>
             

                    <br />

                    <!-- ligne PASSWORD -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Mot de passe
                                </span>
                                <input type="password" class="form-control"  name="password" id="password" title="Saisir un mot de passe" minlength="4" placeholder="4 caractères minimum" required  />

                            </div>
                        </div>
                    </div>
                   
                    <br />

                     <!-- ligne TELEPHONE -->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-addon bgColorTheme minTextBox" >
                                    Téléphone
                                </span>
                                <input type="telephone" class="form-control"  name="telephone" id="telephone" title="Saisir un telephone" minlenght="10" placeholder="Rentrez votre numéro de tél." required  />

                            </div>
                        </div>
                    </div>
             
                    <br />
                    
                    <!-- statut -->
                    <div class="">
                        <select name="statut" id="statut">
                            <option value="">Sélectionner votre statut</option>
                            <option value="1">Bénévole</option>
                            <option value="2">Dirigeant</option>
                            <option value="3">Salarié</option>
                            <option value="4">Mouvement sportif</option>
                        </select>
                    </div>


                    <br />

                    <!-- Zone de validation -->
                    <div class="row">
                        <div class="col-lg-2">  
                            <input class="btn btn-primary btn-lg " name="submit" type="submit" value="Valider">
                        </div>
                        <div class="col-lg-2">
                            <input class="btn btn-primary btn-lg " type="reset" value="Réinitialiser">
                        </div>
                    </div>


                </article>
            </div><!-- /Layout Droit -->
        </div><!-- /row principale -->
    </div><!-- /container --> 
</form>

<?php include_once '_fin.inc.php'; ?>