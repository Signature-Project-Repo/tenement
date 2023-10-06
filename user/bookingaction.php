<?php
session_start();

include 'header.php';
$email=$_SESSION['email'];


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Book Service</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Book Service</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
    <div class=col-md-12>
   
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Book service</h5>

              <!-- Floating Labels Form -->
            
              <form class="row g-3" action="php/bookaction.php" method="POST" enctype="multipart/form-data">
              <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="name" placeholder="Name" ;>
                    <label for="name">Name</label>  
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" name="phone" placeholder="phonenumber" $pattern ='';>
                    <label for="phone">Phone</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="date" class="form-control" name="date" placeholder="Date" ;>
                    <label for="date">Date</label>  
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" name="time" placeholder="Time" ;>
                    <label for="time">Time</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="address" style="height: 100px;"></textarea>
                    <label for="address">Address</label>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-floating">
                  <select name="district" id="district" class="form-select" required>
                      <option value="" disabled selected>District</option>
                      <option value="kasaragod">Kasaragod</option>
                      <option value="kannur">Kannur</option>
                      <option value="kozhikode">Kozhikode</option>
                      <option value="wayanad">Wayanad</option>
                      <option value="malappuram">Malappuram</option>
                      <option value="palakkad">Palakkad</option>
                      <option value="thrissur">Thrissur</option>
                      <option value="ernakulam">Ernakulam</option>
                      <option value="idukki">Idukki</option>
                      <option value="kottayam">Kottayam</option>
                      <option value="alapuzha">Alappuzha</option>
                      <option value="pathanamthitta">Pathanamthitta</option>
                      <option value="kollam">Kollam</option>
                      <option value="thiruvanathupuram">Thiruvananthupuram</option>
 

                    </select>
                  </div>
                </div>
                   
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="city" placeholder="City">
                    <label for="city">City</label>
                  </div>
                </div>
 
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="instructions" name="instructions" style="height: 100px;"></textarea>
                    <label for="instructions">Instructions</label>
                  </div>
                </div>


                 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="landmark" placeholder="Landmark">
                    <label for="landmark">Landmark</label>
                  </div>
                </div>


             
 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="url" class="form-control" name="url" placeholder="Loctation URL">
                    <label for="url">Location URL</label>
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