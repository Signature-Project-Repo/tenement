<?php
session_start();

include 'header.php';
$email=$_SESSION['email'];


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Form</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
    <div class=col-md-12>
   
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Form</h5>

              <!-- Floating Labels Form -->
            
              <form class="row g-3" action="php/formaction.php" method="POST" enctype="multipart/form-data">
              <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <select class="form-select" name="services" aria-label="services" id="services">
                    <option selected disabled>Services</option>
                    <?php
  

                     $sql = "SELECT services from items";
                     $data = select_data($sql);
                     while ($row = mysqli_fetch_assoc($data)) 
                     {
                     echo '<option value="' . $row['services'] . '">' . $row['services'] . '</option>';
                     }
                     ?>
                    </select>

                    
                  </div>
                </div>
 
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="description" style="height: 100px;"></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="experience" placeholder="Experience">
                    <label for="experience">Year Of Experience</label>
                  </div>
                </div>
 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="rate" placeholder="Rate">
                    <label for="rate">Rate</label>
                  </div>
                </div>

                <div class="col-6">
                  <div>
                  <label for="floatingSelect">Upload Licence</label>
                  <input type="file" class="form-control" id="image" placeholder="image" name="fileToUpload" id="fileToUpload" accept="imgae/*" required>
                    
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