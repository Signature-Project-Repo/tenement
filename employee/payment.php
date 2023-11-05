<?php
include 'header.php';


$email = $_SESSION['email'];

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Service Requests</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Service Requests</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Service requests</h5>



                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Sl No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Service</th>
                      <!--<th scope="col">Phone</th>-->
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <!--<th scope="col">Address</th>-->
                      <th scope="col">District</th>
                      <!--<th scope="col">City</th>-->
                      <!--<th scope="col">Instructions</th>
                    <th scope="col">Landmark</th>-->
                      <th scope="col">Location URL</th>
                      <th scope="col">View Details</th>

                      


                    </tr>
                  </thead>
                  <tbody>
                  
                 

                    <?php
                                            
                                        
                                                  date_default_timezone_set('Asia/Kolkata'); // Set your desired timezone here
                                                  $time = date("H"); 
          
          
                                                  date_default_timezone_set('Asia/Kolkata');
                                                  $date = date("Y-m-d");
          
                  


                    $sql1 = "SELECT b.*,a.services from booking b,addservice a where  a.serviceid=b.serviceid  and status ='2'";

                    $data1 = select_data($sql1);
                    


                  
           

                    $n = 1;

                    while ($row = mysqli_fetch_assoc($data1)) {

                    ?>
                      <tr>
                        <th scope='row'><?php echo $n++; ?></th>
                        <td><?php echo  $row['name'] ?></td>
                        <td><?php echo  $row['services'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['time'] ?></td>
                        <td> <?php echo $row['district']  ?></td>
                        


                        <td> <a class="btn btn-secondary btn-sm" target="_blank" href="<?php echo $row['url']  ?>"><i class="  ri-map-pin-2-fill"></i> View in Map</a></td>
                        <td>
                          <div class="btn-group">
                            <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2" onclick="passdes('<b>Name: </b><?php echo $row['name']; ?><br><b>Phone: </b><?php echo $row['phone']; ?><br><b>Service: </b><?php echo $row['services']; ?><br><b>Date: </b><?php echo $row['date']; ?><br><b>Time: </b><?php echo $row['time']; ?><br><b>Address: </b><?php echo $row['address']; ?><br><b>District: </b><?php echo $row['district']; ?><br><b>City: </b><?php echo $row['city']; ?><br><b>Instructions: </b><?php echo $row['instructions']; ?><br><b>Landmark: </b><?php echo $row['landmark']; ?><br><b>Email: </b><?php echo $row['email']; ?>')">View Details</a>


                          </div>
                        </td>
                 
                    </tr>

                    <?php
                    }
                    ?>

                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
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






        <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Complaints</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                    <form action="#" method="POST">
                    
                    <label>ID</label>
                        <input type="textx" name="id" id="id">
                        <br>  
                        <label>Reply</label>
                        <input type="text" class="form-control"  name="reply">
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Send Reply</button>
                    </div>
                </form>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

      <!--

      <div class="modal fade" id="verticalycentered1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>Payment Details</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <form action="php/payaction.php" method="POST">
         
            </div>
            <div class="modal-body">
              <p>Service Charge :</p>
              <p>Instructions:</p>
              
              

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Pay ₹</button>
            </div>
                  </form>
          </div>
        </div>
      </div>
                  -->
                  <!-- End Vertically centered Modal-->

      

</main><!-- End #main -->


<?php

echo "admin :";
echo $email;

?>




</div>
</section>

</main><!-- End #main -->
<script>
    function passid(id)
    {
      //alert(id);

      document.getElementById('id').value=id;
    }
  </script>

<script>
     function passdes(valuee) {
    // alert(valuee)
    document.getElementById("mod").innerHTML = valuee;
  }
  </script>

<?php


include 'footer.html';

?>