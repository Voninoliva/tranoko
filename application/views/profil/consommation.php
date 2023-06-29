<style>
    .recherches{
        margin-bottom:5%;
        padding:3%;
        text-align:center;
        box-shadow:0 10px 30px rgba(0, 0, 0, 0.1);
        border-radius:30px;
    }
    .recherches{
        display:block;
    }
    .recherches input,select{
        border:1px solid white;
    }
    .sub{
        padding: 2%;
        background: linear-gradient(152deg,rgb(12, 29, 122),#108AEF,#7510EF);
        border-radius: 7px;
        color: white;
        padding-left: 5%;
        padding-right: 5%;
    }
</style>
<div class="row" style="margin-left:5%;margin-top:2%;">
    <div class="col-md-3">
        <h3 style="color:rgb(12, 29, 122);">Triez vos analyses </h3>
        <div class="row recherches">
        <p>Par vos produits</p>
            <form action=" <?php echo site_url('analyse/getConsommationJourParProduit'); ?> " method="get">
            <select name="idproduit">
                <option value="">Vos produits</option>
            <?php for($i=0;$i<count($allproduits);$i++){  ?> 
                <option value="<?php echo $allproduits[$i]['idproduit']; ?>"><?php echo $allproduits[$i]['emplacement']; ?></option>
                <?php } ?> 
            </select>
            <input type="submit" value="rechercher" class="sub">
            </form>
        </div>
        <div class="row recherches">
        <p>Par mois,années</p>
            <form action=" <?php echo site_url('analyse/getConsommationJourParProduit'); ?> " method="get">
            <select name="mois">
                <option value="">Mois</option>
            <?php for($i=1;$i<13;$i++){  ?> 
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?> 
            </select>
            <select name="annee">
                <option value="">Années</option>
            <?php for($i=2023;$i>2013;$i--){  ?> 
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?> 
            </select>
            <input type="submit" value="rechercher"  class="sub">
            </form>
        </div>
    </div>
    <div class="col-md-7 grid-margin stretch-card" style="margin-left:5%; border-radius: 37px;">
            <div class="card">
                <div class="card-body" style="box-shadow:0 10px 30px rgba(0, 0, 0, 0.1);">
                  <p class="card-title">Analyses</p>
                  <p class="font-weight-500">Observez a tout moment votre consommation !</p>
                  <canvas id="order-chart"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="<?php echo base_url('assets/perso/chart.js'); ?>"></script>
    <script>
  var ctx = document.getElementById('order-chart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [<?php for($i=0;$i<count($all);$i++){ echo "'".$all[$i]['jour']."',";} ?>],
      datasets: [{
        label: 'Consommation',
        data: [<?php for($i=0;$i<count($all);$i++){ echo $all[$i]['consommation'].",";} ?>],
        backgroundColor: ['#7510EF', '#108AEF', 'rgb(12, 29, 122)'],
        borderColor: ['#7510EF', '#108AEF', 'rgb(12, 29, 122)'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
  
