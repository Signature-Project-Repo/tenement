
<?php


require 'header.php';

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
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  







  <section class="section">
    <div class="row align-items-top">

     
    <div class="card mb-3">
     <div class="row g-0">

        <div class="col-lg-4">


          
            <img src="../upload/service/add_service_<?php echo $row['serviceid']; ?>.jpg" class="card-img-top" alt="..." height="">
</div>
<div class="col-md-8">
            <div class="card-body">

              <p class="card-title" style="font-size: 25px;padding-bottom:0px;margin-bottom:0px"><?php echo $row['services'] ?></p>
              <p style="font-size: large;margin:0 0 5px;"> <span class="badge bg-success">4.5 <i class="bi bi-star-fill text-warning"></i></span></p>
              <p class="card-text mb-2" style="text-align: justify;font-size:85%;color:#777;"><?php echo $row['description'];?></p>


              <p class="card-text mb-2" style="text-transform: capitalize;color:#444;font-size:90%;"><i class="bi bi-person-square"></i><b> <?php echo $row1['fname'] ?> <?php echo $row1['lname'] ?></b> <br><i class="ri-star-fill"> <?php echo $row['experience'] ?> years</i></p>


                <p class="card-text mb-2" style="text-transform: capitalize;color:#444;font-size:90%;"> <b>₹<?php echo $row['rate'] ?></b></p>
              
             
              



              <div class="btn-group">
                        <a href="#" class="btn btn-success btn-sm"><i class="bi bi-lightning-fill"></i> Book Now</a>   
                        
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