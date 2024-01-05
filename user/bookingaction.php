<?php
// session_start();

include 'header.php';
$email=$_SESSION['email'];
$serviceid=$_GET['serviceid'];
$services=$_GET['services'];
$rate=$_GET['rate'];

$sql="SELECT status
FROM items
WHERE services = '$services'";
$data = select_data($sql);
$row = mysqli_fetch_assoc($data);

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
            
              <form class="row g-3" action="php/bookaction.php?status=<?php echo $row['status'] ?>&serviceid=<?php echo $serviceid ?>&rate=<?php echo $rate?>&services=<?php echo $services ?>" method="POST" enctype="multipart/form-data">
              <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="name" placeholder="Name"  pattern="[A-Z][a-z]+( [A-Z][a-z]+)*" required>
                    <label for="name">Name</label>  
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="number" class="form-control" name="phone" placeholder="phonenumber" pattern="[1-9][0-9]{9}" maxlength="12" minlength="10"  required>
                    <label for="phone">Phone</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="date" class="form-control" name="date" id="date" placeholder="Date" min="<?php echo date('Y-m-d'); ?>" required>
                    <label for="date">Date</label>  
                 </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time" ;>
                    <label for="time">Time</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" name="address" maxlength="200" style="height: 100px;" required></textarea>
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
 
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="instructions" name="instructions" maxlength="300" style="height: 100px;" required></textarea>
                    <label for="instructions">Instructions</label>
                  </div>
                </div>


                 
                <div class="col-md-6">
                  <div class="form-floating">
                  <input type="text" class="form-control" name="landmark" placeholder="Landmark" maxlength="100" required>
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
              <script>
    // Get the date input and time input elements
    const dateInput = document.getElementById('date');
    const timeInput = document.getElementById('time');

    // Add an event listener to the date input
    dateInput.addEventListener('input', function () {
      // Get the selected date value
      const selectedDate = this.value;

      // Get the current time in the format "HH:mm"
      const currentTime = new Date().toLocaleTimeString('en-US', { hour12: false });

      // If the selected date is today, set the min attribute to the current time
      // Otherwise, allow any time on future dates
      timeInput.min = (selectedDate === new Date().toISOString().slice(0, 10)) ? currentTime : null;
    });
  </script>

            </div>
          </div>


</main><!-- End #main -->


<?php

include 'footer.html';

?>