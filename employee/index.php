<?php
require 'header.php';

$email = $_SESSION['email'];

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <br>
      <h1>Service Requests</h1>
    </nav>
  </div><!-- End Page Title -->


<br>

  <section class="section">
    <div class="row align-items-top">

      <?php
                    $sql1 = "SELECT b.*,a.services from booking b,addservice a where a.serviceid=b.serviceid and a.email='$email' and status='0'";

                    $data1 = select_data($sql1);
                    


                  
           

                    $n = 1;

                    while ($row = mysqli_fetch_assoc($data1)) {

                    ?>
    
        <div class="col-lg-4">


          <div class="card">
            
            <div class="card-body">

              <h5 class="card-title pb-1 mb-0"><?php echo $row['services'] ?></h5>
              <br>
                  <p>
                  <i class="bi bi-person-fill"></i> <?php echo "" . " " . $row['name'] ?>
              <br>
          
              <i class="bi bi-calendar-fill"></i><?php echo "" . " " . $row['date'] ?>
                  <br>
                  <i class="bi bi-clock-fill"></i><?php echo "" . " " . $row['time'] ?>
                  <br>
                  <i class="bi bi-geo-alt-fill"></i><?php echo "" . " " . $row['district'] ?>
              </p>



        

              <!-- <p>
                <?php echo "Year of Experience:" . " " . $row['experience'] ?>
              </p>

              <p>
                <?php echo "Rate:" . " " . $row['rate'] . "Rs." ?>
              </p> -->




              <div class="row mt-2">
                
                <div class="col-6 btn-group">
                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2" onclick="passdes('<b>Name: </b><?php echo $row['name']; ?><br><b>Phone: </b><?php echo $row['phone']; ?><br><b>Service: </b><?php echo $row['services']; ?><br><b>Date: </b><?php echo $row['date']; ?><br><b>Time: </b><?php echo $row['time']; ?><br><b>Address: </b><?php echo $row['address']; ?><br><b>District: </b><?php echo $row['district']; ?><br><b>City: </b><?php echo $row['city']; ?><br><b>Instructions: </b><?php echo $row['instructions']; ?><br><b>Landmark: </b><?php echo $row['landmark']; ?><br><b>Email: </b><?php echo $row['email']; ?>')">View Details</a>
                </div>
                <div class="col-6 btn-group">
                <a href="php/serviceaction.php?email=<?php echo $row['email'];?>&serviceid=<?php echo $row['serviceid'];?>&bookingid=<?php echo $row['bookingid'];?>&status=1 " class="btn btn-success btn-sm">Accept</a>
                            <a href="php/serviceaction.php?email=<?php echo $row['email'];?>&serviceid=<?php echo $row['serviceid'];?>&bookingid=<?php echo $row['bookingid'];?>&status=-1 " class="btn btn-danger btn-sm">Reject</a>
                </div>

              


              </div>

            </div>
          </div><!-- End Card with an image on top -->

        </div>
      <?php
      }

      ?>


    </div>


  </section>
  <div class="modal fade" id="verticalycentered2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>Details</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         
            </div>
            <div class="modal-body" id="mod">
         
              
              

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!-- End Vertically centered Modal-->



</main><!-- End #main -->

<script>
  function passdes(valuee) {
    // alert(valuee)
    document.getElementById("mod").innerHTML = valuee;
  }
</script>
<?php



require 'footer.html';

?>