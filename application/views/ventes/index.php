<link rel="stylesheet" href="<?php echo base_url('assets/news/css/style.css'); ?>">
<style>

</style>
<div id="page">
	<div id="fh5co-product" style="padding-bottom:3%;">
		<div class="container">
            <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center titres">
                        <span> Shop </span>
                        <h2> Nos produits </h2>
                        <p>Les produits disponibles chez nous</p>
                    </div>
                </div>
               
                <div class="row">
                    <?php for($t=0;$t<count($all);$t++){ ?>
                    <div class="col-md-4 text-center animate-box">
                        <div class="product">
                            <div class="product-grid" style="background-image:url(<?php echo base_url('assets/images/adapteur.jpg'); ?>);">
                                <div class="inner">
                                    <p>
                                        <a href="<?php echo site_url('mysession/acheter?id='.$all[$t]['idproduitsdevente']); ?>" class="icon"><i class="fas fa-shopping-bag"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><?php echo $all[$t]['nom']; ?></h3>
                                <span class="price">Ar <?php echo $all[$t]['prixunitaire']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>	
                </div>
               
            </div>
	</div>
</div>
