<?php
//session_start();

include 'header.php';
$email=$_SESSION['email'];
$serviceid=$_GET['serviceid'];



$sql1 = "SELECT * FROM addservice WHERE serviceid='$serviceid'";

$data1= select_data($sql1);
$row1 = mysqli_fetch_assoc($data1);


$sql3= "SELECT * FROM addservice";

$data3 = select_data($sql3);
$row3 = mysqli_fetch_assoc($data3);


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Service</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Edit Service</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
    <div class=col-md-12>
   
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service</h5>

              <!-- Floating Labels Form -->
            
              <form class="row g-3" action="php/editaction.php?serviceid=<?php echo $serviceid ?>" method="POST" enctype="multipart/form-data">
            
 
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="description" style="height: 100px;" maxlength="500" required><?php echo $row1['description']?></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" name="experience" value="<?php echo $row1['experience'];?>" placeholder="Experience" $pattern ='/^\d+$/' required>
                    <label for="experience">Year Of Experience</label>
                  </div>
                </div>
 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="number" class="form-control" name="rate" value="<?php echo $row1['rate'];?>" pattern="^\d+(\.\d{1,2})?$" placeholder="Rate" required>
                    <label for="rate">Rate</label>
                  </div>
                </div>

            
            
            

 

                <!--
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City">
                      <label for="floatingCity">City</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Zip</label>
                  </div>
                </div>
-->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>


</main><!-- End #main -->


<?php

include 'footer.html';

?>