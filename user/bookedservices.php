<?php
include 'header.php';
$apikey = "rzp_test_A7MhIwolurtBfu";


$email = $_SESSION['email'];

?>

<style>
  .paybtn {
    width: 135px;
  }


  .rate:not(:checked)>input {
    position: absolute;
    top: -9999px;
  }

  .rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 50px;
    color: #ccc;
    
  }

  .rate:not(:checked)>label:before {
    content: '★ ';
  }

  .rate>input:checked~label {
    color: #ffc700;
  }

  .rate:not(:checked)>label:hover,
  .rate:not(:checked)>label:hover~label {
    color: #deb217;
  }

  .rate>input:checked+label:hover,
  .rate>input:checked+label:hover~label,
  .rate>input:checked~label:hover,
  .rate>input:checked~label:hover~label,
  .rate>label:hover~input:checked~label {
    color: #c59b08;
  }

  /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */


</style>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Booked Services</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Booked Services</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <section class="section">
        <div class="row">
          <div class="col-lg-12">





            <?php


            date_default_timezone_set('Asia/Kolkata'); // Set your desired timezone here
            $time = date("H");


            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d");




            $sql1 = "SELECT b.*,a.*,e.*  from booking b,addservice a,employee_register e where a.serviceid=b.serviceid and e.email=a.email and status IN('0','1','2') order by date desc;";
            // echo $sql1;
            $data1 = select_data($sql1);

            $n = 1;

            while ($row = mysqli_fetch_assoc($data1)) {
              $formattedDate = date("d M Y", strtotime($row['date']));

            ?>



              <div class="card" style="padding:5px 0 !important;">
                <div class="row g-0">



                  <div class="col-md-5">
                    <div class="card-body pb-0">
                      <p class="card-text mt-1" style="font-size:80%;font-color:#444;">Booking No <?php echo $row['bookingid']; ?> </p>
                      <h5 class="card-title pb-0 pt-2 " style="text-transform:capitalize;font-size:150%;"> <?php echo $row['services'] ?></h5>
                      <!-- <p class="card-text mb-1" style="font-size:80%;">Category: <?php echo $row['services'] ?> </p> -->
                      <!-- <p class="card-text mb-1"><b class="text-success" style="font-size:120%;">₹<?php echo $row['rate']; ?></b> </p> -->
                      <p class="card-text pb-0 mb-1" style="text-transform:capitalize;font-size:90%;font-weight:600;"><i class="bi bi-person-fill"></i> <?php echo $row['fname'] ?> <?php echo $row['lname'] ?> </p>
                      <p class="card-text" style="text-transform:capitalize;font-size:80%;"><i class="bi bi-telephone-fill"></i> <?php echo $row['phonenumber'] ?><br><i class="bi bi-patch-check-fill"></i> <?php echo $row['experience']?> Years Of Experience</p>
                      <p class="badge bg-success" style="font-weight: 600;font-size: 100%"><i class="bi bi-calendar-fill"></i>  <?php echo $formattedDate; ?> </p>

                    </div>
                  </div>

                  <div class="col-md-2">

                    <?php if ($row['status'] == 0) { ?>
                      <p class="card-text pb-0 mb-1" style="text-transform:capitalize;font-size:90%;font-weight:600;"><i class="bi bi-person"></i> <?php echo $row['name'] ?></p>
                      <p class="card-text" style="text-transform:capitalize;font-size:85%;"><i class="bi bi-house"></i> <?php echo $row['address'] ?><br><?php echo $row['city'] ?><br><?php echo $row['landmark'] ?><br><?php echo $row['district'] ?></p>

                      <td>
                      <a class="btn btn-secondary btn-sm" target="_blank" href="<?php echo $row['url']  ?>"><i class="  ri-map-pin-2-fill"></i> View in Map</a>
                      </td>
                      <p class="card-text mt-5 pt-2"><b class="text-success" style="font-size:150%;">₹<?php echo $row['rate']; ?></b> <span class="text-danger" style="font-size:100%;"></span></p>
                    <?php
                    } else if ($row['status'] == 1) {
                    ?>
                      <!--<p class="card-text mt-5 pt-2 pb-0 mb-1"><b class="" style="font-size:120%;">₹<?php $row['rate']; ?></b> <span class="text-danger" style="font-size:80%;"><s>₹<?php echo  $row['rate']; ?></s></span></p>-->
                       <p class="card-text pb-0 mb-1" style="text-transform:capitalize;font-size:90%;font-weight:600;"><i class="bi bi-person"></i> <?php echo $row['name'] ?></p>
                      <p class="card-text" style="text-transform:capitalize;font-size:85%;"><i class="bi bi-house"></i> <?php echo $row['address'] ?><br><?php echo $row['city'] ?><br><?php echo $row['landmark'] ?><br><?php echo $row['district'] ?></p>
                     
                      <td>
                      <a class="btn btn-secondary btn-sm" target="_blank" href="<?php echo $row['url']  ?>"><i class="  ri-map-pin-2-fill"></i> View in Map</a>
                      </td>


                      <p class="card-text"><b class="text-success" style="font-size:150%;">₹<?php echo ($row['rate']); ?></b> </p>
                    <?php
                    }else if ($row['status'] == 2) {
                    ?>
                     <!--<p class="card-text mt-5 pt-2 pb-0 mb-1"><b class="" style="font-size:120%;">₹<?php $row['rate']; ?></b> <span class="text-danger" style="font-size:80%;"><s>₹<?php echo  $row['rate']; ?></s></span></p>-->
                     <p class="card-text pb-0 mb-1" style="text-transform:capitalize;font-size:90%;font-weight:600;"><i class="bi bi-person"></i> <?php echo $row['name'] ?></p>
                      <p class="card-text" style="text-transform:capitalize;font-size:85%;"><i class="bi bi-house"></i> <?php echo $row['address'] ?><br><?php echo $row['city'] ?><br><?php echo $row['landmark'] ?><br><?php echo $row['district'] ?></p>
                      
                      <td>
                      <a class="btn btn-secondary btn-sm" target="_blank" href="<?php echo $row['url']  ?>"><i class="  ri-map-pin-2-fill"></i> View in Map</a>
                      </td>


                      <p class="card-text"><b class="text-success" style="font-size:150%;">₹<?php echo ($row['rate']); ?></b> </p>
                    <?php
                    }
                    ?>



                  </div>

                  <div class="col-md-3">


                    <?php if ($row['status'] == 0) 
                    { ?>
                      <div class="mt-5 pt-3">
                        
                        <a href="php/cancelbook.php?booking_id=<?php echo $row['bookingid']; ?>" class="btn btn-danger btn-sm">Cancel </a>
                      </div>
                      <p class="badge rounded-pill bg-primary mt-1" style="font-size: 80%;font-weight: 600;">Waiting for approval</p>
                    <?php
                    }
                     else if ($row['status'] == 1) {
                      $formattedDate = date("d M Y", strtotime($row['date']));
                    ?>
                      <div class="mt-5 pt-3">
                        <a class="btn btn-primary btn-sm mb-0" onclick="payment(<?php echo ($row['rate']) ?>,<?php echo $bkid; ?>)">Pay Now</a>
                        <a href="php/cancelbook.php?booking_id=<?php echo $row['bookingid']; ?>" class="btn btn-danger btn-sm">Cancel </a>
                      </div>
                      <p class="badge rounded-pill bg-success mt-1" style="font-size: 80%;font-weight: 600;">Order Approved</p>
                      <p class="badge bg-primary" style="font-weight: 600;font-size: 80%">Delivery Expected</i><?php echo $formattedDate; ?> </p>
                    <?php
                    } else if ($row['status'] == 2) {
                    ?>
                     <div class="mt-5 pt-3">


                     <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered" onclick="passid('<?php echo $row['bookingid'];?>')"><i class="bi bi-star me-1"></i>Add Review</a>   
                     
                     <a href="invoice.php?bookingid=<?php echo $row['bookingid']; ?>" class="btn btn-success btn-sm">Download Invoice </a>
                     </div>
                     <?php
                    }
                    ?>

                  </div>
                </div>
              </div>

              <!-- 
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
                    <a class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2" onclick="passdes('<b>Name: </b><?php echo $row['name']; ?><br><b>Phone: </b><?php echo $row['phone']; ?><br><b>Service: </b><?php echo $row['services']; ?><br><b>Date: </b><?php echo $row['date']; ?><br><b>Time: </b><?php echo $row['time']; ?><br><b>Address: </b><?php echo $row['address']; ?><br><b>District: </b><?php echo $row['district']; ?><br><b>City: </b><?php echo $row['city']; ?><br><b>Instructions: </b><?php echo $row['instructions']; ?><br><b>Landmark: </b><?php echo $row['landmark']; ?><br><b>Email: </b><?php echo $row['email']; ?>')">View Details</a>


                  </div>
                </td>
                <td>
                  <?php
                  $status = $row['status'];

                  if ($status == '1') {
                  ?>



                    <div class="btn-group">
                      <a class="btn btn-primary btn-sm paybtn" onclick="(pay(' <?php echo $row['rate']; ?>', <?php echo $row['bookingid']; ?>))">Pay ₹<?php echo $row['rate']; ?></a>


                    </div>
                  <?php
                  } elseif ($status == '2') {
                  ?>
                    <div class="btn-group">
                      <a href="invoice.php?bookingid=<?php echo $row['bookingid']; ?>" class="btn btn-success btn-sm">Download Invoice</a>


                    </div>
                  <?php
                  } elseif ($status == '0') {
                  ?>
                    <div class="btn-group">
                      <p href="#" class="btn btn-warning btn-sm paybtn mb-0">Pending</a>


                    </div>
                  <?php
                  }
                  ?>
                </td>








              </tr> -->

            <?php
            }
            ?>

          </div>
        </div>
      </section>
      <div class="modal fade" id="verticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Feedback & Rating</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="php/feedback.php" method="POST">
        
          <div class="modal-body">
          
             
                
                <input type="hidden"class="form-control" id="bookingid" name="bookingid" placeholder="BookingId">
              
              
                <!-- <div class="form-floating "> -->
                <div class="row mb-3">
            
            <div class="col-sm-12 rate" style="padding-right:110px;">

              <input type="radio" id="star5" name="rating" value="5" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" />
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3" />
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2" />
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1" />
              <label for="star1" title="text">1 star</label>

            </div>
          </div>
                <div class="row mb-3">
                  <!-- <div class="form-floating"> -->
                  <label for="inputPassword" class="col-sm-2 col-form-label">Feedback</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Feedback" name="feedback" style="height: 100px;"></textarea>
                    
                  </div>
                </div>
          
          <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary">Save </button>
          </div>
              
              
</form>

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
function passid(valuee){
document.getElementById('bookingid').value=valuee;
                }
                </script>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  function pay(amt, bkid) {
    // alert(bkid);
    var options = {
      "key": "<?php echo $apikey ?>", //Enter the Key ID generated from the Dashboard
      "amount": amt * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
      "currency": "INR",
      "name": "Tenement",
      "description": "Payment",
      "image": "../images/car.ico",
      //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
      "callback_url": "php/success.php?&amt=" + amt + "&bkid=" + bkid,
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