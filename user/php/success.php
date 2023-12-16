
<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
require '../../connect.php';
session_start();
$email=$_SESSION['email'];

$amt=$_GET['amt'];
$bkid=$_GET['bkid'];




$sql="UPDATE booking SET status='2' WHERE email='$email' AND bookingid=$bkid";
//echo $sql;
update_data($sql);
?>

<script>
 
 let timerInterval
Swal.fire({
  icon:'success',
  title: 'Payment Successfull',
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
    window.location.replace('../bookedservices.php');

  }
});
</script>
    </body>
</html>