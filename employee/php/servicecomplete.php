<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
</body>



<?php
require '../../connect.php';



$email = $_GET['email'];
$status = $_GET['status'];
$serviceid=$_GET['serviceid'];
$bookingid=$_GET['bookingid'];
// echo $email." ".$status;
$sql = "UPDATE booking SET status='$status' WHERE email='$email' AND bookingid='$bookingid'";
$result = update_data($sql);

  ?>
   <script>
 
 let timerInterval
Swal.fire({
  icon:'success',
  title: 'Service Completed',

  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    window.location.replace('../payment.php');

  }
});
</script>
  </body>
  
  </html