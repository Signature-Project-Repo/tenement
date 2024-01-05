<?php 

require 'header.php';


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/default.png" alt="Profile" class="rounded-circle">
              
              <h2>Administrator</h2>
              <h3>Admin</h3>
              <div class="social-links mt-2">
                <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" class="instagram"><i class="bi bi-instagram"></i></a>
                <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                

               

                

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                
                   
</div>

               
                  <!-- Profile Edit Form -->
                 

                    
                   
                       
                     

                  

               

                <div class="tab-pane fade show active profile-overview" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="php/passwordaction.php" method="POST">

<div class="row mb-3">
  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
  <div class="col-md-8 col-lg-9">
    <input name="password" type="password" class="form-control" id="currentpassword">
  </div>
</div>

<div class="row mb-3">
  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
  <div class="col-md-8 col-lg-9">
    <input name="newpassword" type="password" class="form-control" id="newpassword">
  </div>
</div>

<div class="row mb-3">
  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
  <div class="col-md-8 col-lg-9">
    <input name="renewpassword" type="password" class="form-control" id="renewpassword">
  </div>
</div>

<div class="text-center">
  <button type="submit" class="btn btn-primary">Change Password</button>
</div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

       
    </section>

  </main><!-- End #main -->

<?php 

require 'footer.html';

?>