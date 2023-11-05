<?php
include 'header.php';
$apikey="rzp_test_A7MhIwolurtBfu";


$email = $_SESSION['email'];

?>

<style>
  .paybtn
  {
    width:135px;
  }
</style>

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
                      <th scope="col">Payment</th>



                    </tr>
                  </thead>
                  <tbody>



                    <?php


                    date_default_timezone_set('Asia/Kolkata'); // Set your desired timezone here
                    $time = date("H");


                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("Y-m-d");




                    $sql1 = "SELECT b.*,a.services,a.rate from booking b,addservice a where  a.serviceid=b.serviceid  and  status IN('0','1','2') order by date desc";
                    echo $sql1;
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
                        <!-- <td> <?php echo $row['bookingid'];?></td> -->



                        <td> <a class="btn btn-secondary btn-sm" target="_blank" href="<?php echo $row['url']  ?>"><i class="  ri-map-pin-2-fill"></i> View in Map</a></td>
                        <td>
                          <div class="btn-group">
                            <a class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2" onclick="passdes('<b>Name: </b><?php echo $row['name']; ?><br><b>Phone: </b><?php echo $row['phone']; ?><br><b>Service: </b><?php echo $row['services']; ?><br><b>Date: </b><?php echo $row['date']; ?><br><b>Time: </b><?php echo $row['time']; ?><br><b>Address: </b><?php echo $row['address']; ?><br><b>District: </b><?php echo $row['district']; ?><br><b>City: </b><?php echo $row['city']; ?><br><b>Instructions: </b><?php echo $row['instructions']; ?><br><b>Landmark: </b><?php echo $row['landmark']; ?><br><b>Email: </b><?php echo $row['email']; ?>')">View Details</a>


                          </div>
                        </td>
                        <td>
                          <?php
                          $status = $row['status'];

                          if ($status == '1') {
                          ?>



                            <div class="btn-group">
                              <a class="btn btn-primary btn-sm paybtn" onclick="(pay(' <?php echo $row['rate'];?>', <?php echo $row['bookingid'];?>))">Pay ₹<?php echo $row['rate'];?></a>


                            </div>
                          <?php
                          } 
                          elseif ($status == '2') {
                          ?>
                            <div class="btn-group">
                              <a href="#" class="btn btn-success btn-sm">Download Invoice</a>


                            </div>
                          <?php
                          }
                          elseif ($status == '0') {
                            ?>
                              <div class="btn-group">
                                <p href="#" class="btn btn-warning btn-sm paybtn mb-0">Pending</a>
  
  
                              </div>
                            <?php
                            }
                          ?>
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
      </section>
      <div class="modal fade" id="verticalycentered2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>Details</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body" id="mod">
              <p>Service:</p>
              <p>Instructions:</p>



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
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
  function passdes(valuee) {
    // alert(valuee)
    document.getElementById("mod").innerHTML = valuee;
  }
</script>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>

    function pay(amt,bkid){
      // alert(bkid);
      var options = {
      "key": "<?php echo $apikey?>", //Enter the Key ID generated from the Dashboard
      "amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
      "currency": "INR",
      "name": "Tenement",
      "description": "Payment",
      "image": "../images/car.ico",
      //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
      "callback_url": "php/success.php?&amt="+amt+"&bkid="+bkid,
      "prefill": {
        "name": "biby",
        "email": "biby@gmail.com",
        "contact": "7034813307"
      },
      "notes": {
        "address": "Razorpay Corporate Office"
      },
      "theme": {
        "color": "#3399cc"
      }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
  }
  </script>

<?php


include 'footer.html';

?>