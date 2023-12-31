
<?php 

include 'header.php';

?>
<head>
  <style>
    #section {
  width: 100%;
  height: 0vh;
  background: transparent;
  background-size:auto;
  position: relative;
}

#section:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#section .container {
  position: relative;
  padding-top: 0px;
  padding-bottom: 100px;
  text-align: auto;
}

#section h1 {
  margin: 0;
  font-size: 56px;
  font-weight: 700;
  line-height: 64px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#section h1 span {
  color: #ffc451;
}

#section h2 {
  color: rgba(255, 255, 255, 0.9);
  margin: 10px 0 0 0;
  font-size: 24px;
}

#section .icon-box {
  padding: 20px 20px;
  transition: ease-in-out 0.3s;
  border: 1px solid rgba(0, 0, 0, 0.6);
  height: 100%;
  text-align: center;
}

#section .icon-box i {
  font-size: 32px;
  line-height: 1;
  color: blue;
}

#section .icon-box h3 {
  font-weight: 700;
  margin: 10px 0 0 0;
  padding: 0;
  line-height: 1;
  font-size: 20px;
  line-height: 26px;
}

#section .icon-box h3 a {
  color: black;
  transition: ease-in-out 0.3s;
}

#section .icon-box h3 a:hover {
  color: blue;
}

#section .icon-box:hover {
  border-color: blue;
}

@media (min-width: 1024px) {
  #section {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #section {
    height: auto;
  }

  #section h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #section h2 {
    font-size: 20px;
    line-height: 24px;
  }
}
    </style>
</head>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Most Used Services</h1>
      <nav>
        <ol class="breadcrumb">
         
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section" id="section">
    <div class="row align-items-top">
        
      <?php
    
    $sql = "SELECT * FROM items LIMIT 3";

    $data = select_data($sql);
    while($row = mysqli_fetch_assoc($data)) 
    {
      ?>
     <div class="col-lg-4">


<div class="card">
  
  <div class="card-body">
<center>
    <h5 class="card-title pb-1 mb-0"><?php echo $row['services'] ?></h5>
</center>
    <br>
        <p>
     <?php echo "" . " " . $row['description'] ?>
    <br>
    <br>
    <div class="row mt-2">
                
                <div class=" btn-group">
                <a href="services.php" class="btn btn-primary btn-sm"> Book Now</a>
                </div>
    </div>

    
  </div>
</div>
<!-- End Card with an image on top -->

</div>
<?php
}

?>


</div>




    <div class="container" data-aos="fade-up">
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-screwdriver"></i>
            <h3><a href="services.php">Appliance Repair</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-trash"></i>
            <h3><a href="services.php">Cleaning And Pest Control</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-tools"></i>
            <h3><a href="services.php">Electrician , Plumber & Carpenter</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="services.php">Painting , Wallpapers & Wall Panels</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bx bx-shield"></i>
            <h3><a href="services.php">HVAC Service</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi-flower3"></i>
            <h3><a href="services.php">Gardening</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi-house"></i>
            <h3><a href="services.php">Renovation and Remodeling</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi-arrow-right-square"></i>
            <h3><a href="services.php">More</a></h3>
          </div>
        </div>
       
      </div>

    </div>
  </section><!-- End Hero -->
   
  </main><!-- End #main -->
  <?php



require 'footer.html';

?>


