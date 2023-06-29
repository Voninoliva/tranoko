<link rel="stylesheet" href="<?php echo base_url('assets/perso/main.css'); ?>">
<main>
<div class="container">
                <div class="login_form_inner">
                    <form class="row login_form" style="padding-bottom:5%;" action="<?php echo site_url('mysession/turnoff'); ?>" method="get" id="contactForm" novalidate="novalidate">
                    <h3 class="titre">Changement pour le produit <?php echo $id; ?></h3>    
                    <div class="col-md-12 form-group">
                            <input type="hidden" class="form-control" name="idproduit" value="<?php echo $id; ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="datetime" class="form-control" name="datedebut" placeholder="date debut" >
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="datetime" class="form-control" name="datefin" placeholder="date fin" >
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Changer</button>
                        </div>
                    </form>
                </div>
    </div>
</main>
    