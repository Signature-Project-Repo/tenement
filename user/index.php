
<?php 

include 'header.php';

?>
<head>
  <style>
    #hero {
  width: 100%;
  height: 0vh;
  background: transparent;
  background-size:auto;
  position: relative;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  position: relative;
  padding-top: 250px;
  text-align: auto;
}

#hero h1 {
  margin: 0;
  font-size: 56px;
  font-weight: 700;
  line-height: 64px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#hero h1 span {
  color: #ffc451;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.9);
  margin: 10px 0 0 0;
  font-size: 24px;
}

#hero .icon-box {
  padding: 20px 20px;
  transition: ease-in-out 0.3s;
  border: 1px solid rgba(0, 0, 0, 0.6);
  height: 100%;
  text-align: center;
}

#hero .icon-box i {
  font-size: 32px;
  line-height: 1;
  color: blue;
}

#hero .icon-box h3 {
  font-weight: 700;
  margin: 10px 0 0 0;
  padding: 0;
  line-height: 1;
  font-size: 20px;
  line-height: 26px;
}

#hero .icon-box h3 a {
  color: black;
  transition: ease-in-out 0.3s;
}

#hero .icon-box h3 a:hover {
  color: blue;
}

#hero .icon-box:hover {
  border-color: blue;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero {
    height: auto;
  }

  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
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


    <section class="section">
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
                <a href="serviceaction.php" class="btn btn-primary btn-sm"> Book Now</a>
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


</section>
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-screwdriver"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">Appliance Repair</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-trash"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">Cleaning And Pest Control</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi bi-tools"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">Electrician , Plumber & Carpenter</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">Painting , Wallpapers & Wall Panels</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bx bx-shield"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">HVAC Service</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi-flower3"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">Gardening</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi-house"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">Renovation and Remodeling</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <i class="bi-arrow-right-square"></i>
            <h3><a href="loginpage/Login_v16/loginpage.html">More</a></h3>
          </div>
        </div>
       
      </div>

    </div>
  </section><!-- End Hero -->
   
  </main><!-- End #main -->
  <?php



require 'footer.html';

?>


