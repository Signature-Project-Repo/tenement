<!DOCTYPE html>
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
$email= $_SESSION['email'];
$bookingid = $_GET['bookingid'];


$sql2 = "DELETE FROM booking WHERE  bookingid='$bookingid'";
update_data($sql2);
?>

<script type="text/javascript">
  Swal.fire({
    icon: 'success',
    text: 'Booking Cancelled',
  }).then(() => {
    window.location.replace('../bookedservices.php');
  });
</script>
</body>
</html>