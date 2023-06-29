<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/perso/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/perso/features.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/fontawesome-5/css/all.min.css'); ?>" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<style>
    .fas{
        color:#ecd508;
    }
</style>
<body>
<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div>
                        <a href="./index.html"><img src="<?php echo base_url('assets/logo0.png'); ?>" alt=""  class="logo" width="35%" height="25%"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="#">Acceuil</a></li>
                            <li><a href="<?php echo site_url('profil/articles'); ?>">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="#">Mon panier</a></li>
                                    <li><a href="<?php echo site_url('profil/seconnecter'); ?>">Connexion</a></li>
                                    <li><a href="<?php echo site_url('profil/sinscrire'); ?>">Inscription</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Discussions</a></li>
                            <li><a href="<?php echo site_url('mysession/profil'); ?>">Profil</a>
                                <ul class="dropdown">
                                    <li><a href="#">Mon foyer</a></li>
                                    <li><a href="#">Mes produits</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Aide</a>
                                <ul class="dropdown">
                                    <li><a href="#">Qui sommes nous ?</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                    <li><a href="#">Service client</a></li>
                                    <li><a href="#">Signaler probleme</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a class="btn btn-light rounded-pill shadow fw-bold" style="color:black;" href="<?php echo site_url('profil/seconnecter'); ?>" role="button">Se Connecter
                                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                                </svg></a>
                        </div>
                        <ul class="header__right__widget">
                            <!-- Notification -->
                            <li><a href="#"><i class="fas fa-bell"></i></span>
                                    <div class="tip" style="background-color:white; color:#ca1515;">2</div>
                                </a></li>
                            <!-- Panier / Nos produits -->
                            <li><a href="#"><i class="fas fa-sign-out-alt"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
</body>
</html>