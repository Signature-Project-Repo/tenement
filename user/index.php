
<?php 

include 'header.php';

?>



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

    <h5 class="card-title pb-1 mb-0"><?php echo $row['services'] ?></h5>
    <br>
        <p>
     <?php echo "" . " " . $row['description'] ?>
    <br>
    <br>
    <div class="row mt-2">
                
                <div class=" btn-group">
                <a class="btn btn-primary btn-sm">Book Now</a>
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
   
  </main><!-- End #main -->


<?php 

include 'footer.html';

?>