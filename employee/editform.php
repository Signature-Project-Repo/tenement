<?php
require 'header.php';
session_start();
$_SESSION['serviceid']=$_POST['serviceid'];
$serviceid=$_POST['serviceid'];
$sql="SELECT * FROM `addservice`";
$data=select_data($sql);
$row=mysqli_fetch_assoc($data);

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


  <section class="section profile">
    <div class="row">
      <div class="col-xl-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">My Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="" method="post" enctype="multipart/form-data">

            <?php
            $sql1="SELECT * FROM `addservice`";
            $data=select_data($sql1);
            $row1=mysqli_fetch_assoc($data);
            ?>
              
            <div class="col-md-6">
          <div class="col-md-12">
          <div class="form-floating">
            <select class="form-select" id="services" aria-label="services" name="services" value="<?php echo $row1['services']; ?>">
  <option selected disabled>Services</option>
  <?php
  

  $sql = "SELECT services from items";
  $data = select_data($sql);
  while ($row = mysqli_fetch_assoc($data)) {
    echo '<option value="' . $row['services'] . '">' . $row['services'] . '</option>';
  }
  ?>
</select>

</div>
</div>
</div>
             
<div class="col-md-6">
                <div class="form-floating">
                  <input type="number" class="form-control" name="experience" placeholder="experience" value="<?php echo $row1['experience']; ?>">
                  <label for="experience">Year of Experience</label>
                </div>
              </div>



              <div class="col-12">
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="Description" name="description" style="height: 200px;"><?php echo $row1['description']; ?></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>
                
                

             

<div class="col-md-12">
                <div>
                <label for="rateperhour">Rate per Hour</label>
                  <input type="number" class="form-control" name="rate" placeholder="rate" value="<?php echo $row1['rate']; ?>">
                  
                </div>
              </div>

             
               
              <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add">

              </div>
            </form><!-- End floating Labels Form -->

          </div>
        </div>


      </div>

</div>
            
             
               
  </section>

</main><!-- End #main -->

<script>
document.getElementById("services").value="<?php echo $row1['services']?>";
  </script>

<?php

require 'footer.html';

?>