<?php
require 'header.php';

$email_id = $_SESSION['email_id'];
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>My Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">My Form</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row align-items-top">

      <?php

      $sql = "SELECT * FROM addservice";

      $data = select_data($sql);



      while ($row = mysqli_fetch_assoc($data)) {
      ?>
        <div class="col-lg-4">


          <div class="card">
            <img src="../upload/service/add_service_<?php echo $row['serviceid']; ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">

              <h5 class="card-title"><?php echo $row['services'] ?></h5>
              <p class="card-text"><?php echo $row['description'] ?></p>



              <p style="margin-bottom:0px;">
                <span class="badge bg-success bg-xs" style="color:#fff;">4.5 <i class="bi bi-star-fill text-warning"></i></span> <?php echo $row['services'] ?>
              </p>

              <?php echo "Year of Experience:" . " " . $row['experience'] ?>
              <br>

              <?php echo "Rate Per Hour:" . " " . $row['rate'] ?>
              <br>
              <br>








              <div class="row">
                <div class="col-6">
                  <p class="card-text"><a href="#" class="btn btn-primary">Edit</a></p>
                </div>


              </div>

            </div>
          </div><!-- End Card with an image on top -->

        </div>
      <?php
      }

      ?>


    </div>


  </section>



</main><!-- End #main -->
<?php



require 'footer.html';

?>