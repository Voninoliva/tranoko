<main>
    <style>
        a{
            color: black;
        }
        .ici{
            width: 100%;
            background-repeat: no-repeat;
            background-color: #f1f1ea;
            background-blend-mode: color-burn;
            background-position-x:center;
            background-position-y: center;
            width:100%;
            overflow: hidden;
        }
        nav li{
            padding-bottom: 19%;
        }
        main{
            color:black;
            font-weight: bolder;
        }
    </style>
    <div class="row ici">
    <nav id="sidebarMenu" class="col-md-4 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('aide/com?id=0'); ?>">
              <span data-feather="home"></span>
                CGV
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('aide/com?id=1'); ?>">
              <span data-feather="file"></span>
              Disfonctionnement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('aide/com?id=2'); ?>">
              <span data-feather="shopping-cart"></span>
              Ventes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('aide/com?id=3'); ?>">
              <span data-feather="shopping-cart"></span>
              Nous contactez
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Manuel d'utilisation</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('aide/com?id=4'); ?>">
              <span data-feather="file-text"></span>
              site Tranoko
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('aide/com?id=5'); ?>">
              <span data-feather="file-text"></span>
             Nos produits
            </a>
          </li>
        </ul>
      </div>
    </nav>