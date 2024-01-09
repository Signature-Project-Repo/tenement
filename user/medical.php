<?php
// session_start();

include 'header.php';
$email=$_SESSION['email'];


?>
    <style>
        .hidden {
            display: none;
        }
    </style>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Medical Service</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Medical Service</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->
  
  <section class="section">
    <div class="row">
    <div class=col-md-12>
   
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Medical service</h5>

              <!-- Floating Labels Form -->
            
              <form class="row g-3" action="php/medaction.php" method="POST" enctype="multipart/form-data">
              <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="name" placeholder="Name" pattern="[A-Z][a-z]+( [A-Z][a-z]+)*" maxlength="50" required>
                    <label for="name">Name</label>  
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="phone" placeholder="phonenumber" pattern="[7-9][0-9]{9}" maxlength="12" minlength="10" required>
                    <label for="phone">Phone</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="age" placeholder="Age" pattern="[0-9]{1,2}" maxlength="2" required>
                    <label for="age">Age</label>  
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="date" class="form-control" name="dob" placeholder="Date Of Birth" required>
                    <label for="dob">Date Of Birth</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="address" style="height: 100px;" required></textarea>
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
                  <input type="text" class="form-control" name="city" placeholder="City" required>
                    <label for="city">City</label>
                  </div>
                </div>
 <!--
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="instructions" name="instructions" style="height: 100px;"></textarea>
                    <label for="instructions">Instructions</label>
                  </div>
                </div>

-->
                 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="height" pattern="[0-9]{2,3}" placeholder="Height" maxlength="3">
                    <label for="Height">Height</label>
                  </div>
                </div>


             
 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="weight" pattern="[0-9]{2,3}" placeholder="Loctation Weight" maxlength="3">
                    <label for="Weight"> Weight</label>
                  </div>
                </div>

                
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="hypertension" placeholder="Hypertension">
                    <label for="hypertension">Hypertension</label>
                  </div>
                </div>

                
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="diabetesmellitus" placeholder="Diabetes Mellitus">
                    <label for="diabetesmellitus">Diabetes Mellitus</label>
                  </div>
                </div>

                
                <label>
                  Herditary Diseases If Any ?
      
   
        <input type="radio" name="yes-no" value="yes" onclick="toggleForm()"> Yes
        <input type="radio" name="yes-no" value="no" onclick="toggleForm()"> No
    </label>

    <div id="additional-form" class="hidden">
        <!-- Additional form fields go here -->
        <textarea class="form-control" placeholder="Disease" name="disease" style="height: 100px;"></textarea>
                    <label for="disease"></label>
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

<script>
    function toggleForm() {
        var additionalForm = document.getElementById("additional-form");
        var yesRadio = document.querySelector('input[value="yes"]');

        if (yesRadio.checked) {
            additionalForm.classList.remove("hidden");
        } else {
            additionalForm.classList.add("hidden");
        }
    }

    function validateForm() {
        // Add your form validation logic here
        return true; // Return false to prevent form submission
    }
</script>



<?php

include 'footer.html';

?>