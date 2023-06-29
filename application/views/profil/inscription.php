<link rel="stylesheet" href="<?php echo base_url('assets/perso/main.css'); ?>">
<main >
    <div class="container here">
                <div class="login_form_inner">   
                    <form class="row login_form"  style="padding-bottom:5%;" action="<?php echo site_url('profil/confirmerInscription'); ?>" method="get" novalidate="novalidate">
                    <h3 class="titre">Inscrivez-Vous</h3>   
                    <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="nomFoyer" placeholder="Nom de votre foyer" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="nom" placeholder="Nom" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="prenom" placeholder="Prenom" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="date" class="form-control" name="dtn" placeholder="Date de naissance" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="numero" placeholder="Telephone" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="motDePasse" placeholder="Mot de passe" >
                        </div>
                        <div class="row">
                        <a class="monlien" href="<?php echo site_url('profil/inscriptionFoyer'); ?>">Pas encore de foyer configurer?Inscrivez votre foyer tout d'abord!</a>
                        </div> 
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">S'inscrire</button>
                        </div>
                    </form>
                </div>
    </div>
    </main>