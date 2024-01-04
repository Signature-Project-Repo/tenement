<?php
require 'header.php';

$email = $_SESSION['email'];
$serviceid = $_GET['serviceid'];
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Services</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Book Services</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <?php

  $sql = "SELECT * FROM addservice WHERE serviceid='$serviceid'";

  $data = select_data($sql);



  $row = mysqli_fetch_assoc($data);
  $_SESSION['serviceid']=$row['serviceid'];


  ?>

<?php

$sql1 = "SELECT * FROM addservice a,employee_register r WHERE r.email=a.email";

$data1 = select_data($sql1);



$row1 = mysqli_fetch_assoc($data1)

?>




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
              <p class="card-text mb-2" style="text-align: justify;font-size:85%;color:#777;"><?php echo $row['description']; ?></p>




              <p class="card-text mb-2" style="text-transform: capitalize;color:#444;font-size:90%;"> <b>Service-charge: ₹<?php echo $row['rate'] ?></b></p>




            

              <div class="btn-group">
              <a href="php/fav.php?serviceid=<?php echo $row['serviceid']?>&services=<?php echo $row['services'] ?>&fname=<?php echo $row1['fname'] ?>&lname=<?php echo $row1['lname'] ?>&description=<?php echo $row['description'] ?>&rate=<?php echo $row['rate'] ?>"  class="btn btn-success btn-sm">Add To Favourites</a>
                    
              </div>
              <div class="btn-group">
                <a href="bookingaction.php?serviceid=<?php echo $serviceid ?>&services=<?php echo $row['services'] ?>&rate=<?php echo $row['rate'] ?>" class="btn btn-primary btn-sm"></i> Book Now</a>

              </div>
               



             



            </div>


          </div>
         

       
          
        </div>
        <!-- End Card with an image on top -->





      </div>
      
      <div class="col-md-6">
            <div class="card-body">

            <p class="card-title" style="padding-right:15%">Employee Details</p>
            <p class="card-text mb-2" ><b><i class="bi bi-person"></i></b> <?php echo $row1['fname']?> <?php echo $row1['lname']?></p>

            <p class="card-text mb-2" ><b><i class="bi bi-envelope"></i></b> <?php echo $row1['email']?></p>
            <p class="card-text mb-2" ><b><i class="bi bi-telephone"></i></b> <?php echo $row1['phonenumber']?></p>
            <p class="card-text mb-2" ><b><i class="bi bi-patch-check"></i></b> <?php echo $row1['experience']?> Years Of Experience</p>
            </div>

  </section>







</main><!-- End #main -->
<?php



require 'footer.html';

?>