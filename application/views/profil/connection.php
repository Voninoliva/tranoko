<link rel="stylesheet" href="<?php echo base_url('assets/perso/main.css'); ?>">
<main>
<div class="container">
                <div class="login_form_inner">
                    <form class="row login_form" style="padding-bottom:5%;" action="<?php echo site_url('profil/confirmerConnection'); ?>" method="get" id="contactForm" novalidate="novalidate">
                    <h3 class="titre">Connectez-Vous</h3>    
                    <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="nomFoyer" placeholder="Nom du foyer" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="email" placeholder="Votre email" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="mdp" placeholder="Votre mot de passe" >
                        </div>
                        <div class="row col-md-12">
                        <a class="monlien" href="<?php echo site_url('profil/sinscrire'); ?>">Pas encore parmis nous,inscrivez-vous!</a>
                        </div> 
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Se connecter</button>
                        </div>
                    </form>
                </div>
    </div>
</main>
    