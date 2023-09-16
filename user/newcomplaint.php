<?php
session_start();

include 'header.php';
$email=$_SESSION['email'];


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Register Complaint</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Complaints</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
    <div class=col-md-12>
   
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Complaint</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" action="php/newcomplaintaction.php" method="POST">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                    <label for="title">Title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="description" style="height: 100px;"></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>
     
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" name="priority" aria-label="priority">
                      <option value="low">Low</option>
                      <option value="medium">Medium</option>
                      <option value="high">High</option>
                    </select>
                    <label for="priority">Priority</label>
                  </div>
                </div>
 
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" name="date" value="<?php echo date('Y-m-d');?>" readonly/>
                    <label for="date">Date</label>
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