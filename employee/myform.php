<?php
require 'header.php';

$email_id = $_SESSION['email'];
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>My Services</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">My Services</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row align-items-top">

      <?php

      $sql = "SELECT * FROM addservice";

      $data = select_data($sql);



      while ($row = mysqli_fetch_assoc($data)) {
        $description = substr($row['description'], 0, 100);
      ?>
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




              <div class="row mt-2">
                <div class="col-6 btn-group">
                 <a href="editform.php" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit </a>
                  <a href="#" class="btn btn-danger btn-sm"><i class=" ri-delete-bin-5-fill"></i> Remove </a>
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