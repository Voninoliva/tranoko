<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .col{
          margin-top:2%;
      }
      .card-cover.maty{
        background-color: #0b0b0c;
        background-blend-mode: overlay;
        color: lightsteelblue;
      }
      .rounded-circle{
          background-color:white;
      }
      a{
        text-decoration: none;
      }
      .ons{
        background-color: lightsteelblue;
        background-blend-mode:multiply;
      }
      .oft{
        backdrop-filter: blur(5px);
      }
    </style>
    <main>
    <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Vos pieces</h2>
        
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-2">
    <?php for($i=0;$i<count($all['allapp']);$i++){ ?>
      <div class="col">
    <?php if($all['detail'][$i]=='on'){ ?> 
        <a class="monblock" href="<?php echo site_url('mysession/turnoffrequest?id='.$all['allapp'][$i]['idproduit']); ?>"> 
        <div class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-lg ons" style="background-image: url('<?php echo base_url('assets/images/'.$all['allapp'][$i]['sary']); ?>');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 oft">
    <?php } else {  ?> 
        <a class="monblock" href="<?php echo site_url('mysession/turnon?id='.$all['allapp'][$i]['idproduit']); ?>"> 
        <div class="card card-cover h-100 overflow-hidden rounded-5 shadow-lg maty" style="background-image: url('<?php echo base_url('assets/images/'.$all['allapp'][$i]['sary']); ?>');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 ">    
    <?php } ?>   
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo $all['allapp'][$i]['emplacement']; ?></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="<?php echo base_url('assets/images/avatar.svg'); ?>" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
                <small> <?php echo $all['allapp'][$i]['nom']; ?></small>
              </li>
              <li class="d-flex align-items-center">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
              <?php if($all['detail'][$i]=='on'){ ?>
                <small><i class="fas fa-toggle-on"></i></small>
                <?php } else {  ?>
                <small><i class="fas fa-toggle-off"></i></small>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="row" style="margin-left:10%;font-weight:bold;">
    <p>*Pour les disfonctionnement,veuillez remplir le formulaire d'aide ou contactez le service client de Tranoko</p>
  </div>
    </main>