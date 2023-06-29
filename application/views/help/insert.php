<link rel="stylesheet" href="<?php echo base_url('assets/perso/main.css'); ?>">
<main>
<div class="container">
                <div class="login_form_inner">
                    <form class="row login_form" style="padding-bottom:5%;" action="<?php echo site_url('mysession/disfonc'); ?>" method="get" id="contactForm" novalidate="novalidate">
                    <h3 class="titre">Des problemes? Nous sommes ici pour vous</h3>    
                    <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="nomFoyer" placeholder="Nom du foyer" >
                        </div>
                        <div class="col-md-12 form-group">
                            <select name="idproduit" class="form-select nice-select">
                                <option value="*">le pack en entier</option>
                                <?php for($i=0;$i<count($all['allapp']);$i++){ ?>
                                    <option value="<?php echo $all['allapp'][$i]['idproduit'];?>"><?php echo $all['allapp'][$i]['emplacement'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="textes" placeholder="le probleme">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Envoyer</button>
                        </div>
                    </form>
                </div>
    </div>
</main>
    