<link rel="stylesheet" href="<?php echo base_url('assets/perso/main.css'); ?>">
<main>    
<div class="container here">
                <div class="login_form_inner">
                    <form class="row login_form"  style="padding-bottom:5%;" action="<?php echo site_url('profil/confirmerFoyer'); ?>" method="get" id="contactForm" novalidate="novalidate">
                    <h3 class="titre">Première étape pour etre parmis nous!</h3>    
                    <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="nomFoyer" placeholder="Nom du foyer" >
                        </div>
                        <div class="col-md-12 form-group">
                            <select class="form-select nice-select" name="idEmplacement" placeholder="Emplacement" > 
                            <option value="">Votre emplacement</option>
                            <?php for($i=0;$i<count($all);$i++){?>
                                    <option value="<?php echo $all[$i]->idemplacement; ?>"><?php echo $all[$i]->nom; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="rempd" placeholder="reconfirmer votre mot de passe" >
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Enregistrer</button>
                        </div>
                    </form>
                </div>
    </div>
    </main>