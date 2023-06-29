<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/fontawesome-5/css/all.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/news/css/index.css'); ?>" rel="stylesheet" type="text/css" />
    <title>Index</title>
  </head>
  <body>
    <header>
      <img src="<?php echo base_url('assets/logo0.svg'); ?>" alt="" srcset="" />
      <ul>
        <a href="<?php echo site_url('debut/premierepage');?>">
          <li>Accueil</li>
          <span></span>
        </a>
        <a href="<?php echo site_url('profil/articles'); ?>">
          <li>Panier</li>
          <span></span>
        </a>
        <a href="<?php echo site_url('Analyse/consommationGen'); ?>">
          <li>Dashboard</li>
          <span></span>
        </a>
        <a href="<?php echo site_url('mysession/mesappareils'); ?>">
          <li>Mes appareils</li>
          <span></span>
        </a>
        <a href="<?php echo site_url('mysession/profil'); ?>">
          <li>Profil</li>
          <span></span>
        </a>
      </ul>
      <div class="icon-bars">
        <span></span>
      </div>
      <div class="login">
          <ul>
          <li><a href="<?php echo site_url('aide/com/id/0'); ?>"><i class="fas fa-capsules"></i></a></li>
              <li><a href="#"><i class="fas fa-bell"></i></a></li>
              <?php if(!isset($_SESSION['utilisateur'])){  ?>
                  <li><a href="<?php echo site_url('mysession/profil'); ?>"><i class="fas fa-file-signature"></i></a></li>
                  <?php } else { ?> 
                  <li><a href="<?php echo site_url('mysession/logout'); ?>"><i class="fas fa-sign-out-alt"></i></a></li>
                  <?php } ?> 
          </ul>
         
      </div>
    </header>
  <script src="<?php echo base_url('assets/news/js/index.js'); ?>"></script>
  

