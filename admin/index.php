
<?php 

include 'header.php';

?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section>
      <div class="container">



      



      <div class="row">

<div class="col-lg-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Line Chart</h5>

      <!-- Line Chart -->
      <div id="lineChart"></div>

      <script>
        document.addEventListener("DOMContentLoaded", () => {
          new ApexCharts(document.querySelector("#lineChart"), {
            series: [{
              name: "Desktops",
              data: [10, 41, 35, 51, 49, 62, 69]
            }],
            chart: {
              height: 350,
              type: 'line',
              zoom: {
                enabled: false
              }
            },
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'straight'
            },
            grid: {
              row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
              },
            },
            xaxis: {
              categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            }
          }).render();
        });
      </script>
      <!-- End Line Chart -->

    </div>
  </div>
</div>
        
    
      
      </div>
    </section>
   

   
  </main><!-- End #main -->


<?php 

include 'footer.html';

?>