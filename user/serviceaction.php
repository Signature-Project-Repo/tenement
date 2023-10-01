
<?php


require 'header.php';
session_start();

$serviceid=$_GET['serviceid'];


$sql0="SELECT * from addservice where serviceid='$serviceid' ";
$data0=select_data($sql0);
$row=mysqli_fetch_assoc($data0);
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  
<?php

  $sql = "SELECT * FROM addservice a,items r where r.id=a.serviceid";

$data = select_data($sql);
$row1=mysqli_fetch_assoc($data);
?>

  







  <section class="section">
    <div class="row align-items-top">

     
    <div class="card mb-3">
     <div class="row g-0">

        <div class="col-lg-4">


          
        <div class="card">
            <img src="../upload/service/add_service_<?php echo $row['serviceid']; ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-title pb-1 mb-0"><?php echo $row['services'] ?></h5>
              <p class="card-text mb-1" style="font-size:85%;color:#444;text-align:justify;"><?php echo $description; ?><span class="text-primary" style="font-weight:600;">...Read More</p>



              <p style="margin-bottom:0px;">
                <span class="badge bg-success bg-xs" style="color:#fff;">4.5 <i class="bi bi-star-fill text-warning"></i></span> <span class="badge bg-success bg-xs" style="color:#fff;"> <?php echo $row['services'] ?></span>
              </p>

              <!-- <p>
                <?php echo "Year of Experience:" . " " . $row['experience'] ?>
              </p>

              <p>
                <?php echo "Rate:" . " " . $row['rate'] . "Rs." ?>
              </p> -->



              <div class="btn-group">
                        <a href="book1.php" class="btn btn-success btn-sm">Book Now</a>
                        
                      </div>




            </div>
          </div>
        </div>
        <!-- End Card with an image on top -->

     



    </div>

  </section>





</main><!-- End #main -->


<?php

require 'footer.html';

?>