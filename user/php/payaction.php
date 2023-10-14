<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
<?php
require '../../connect.php';
    $email=$_GET['email'];
    $serviceid=$_GET['serviceid'];
    $bookingid=$_GET['bookingid'];
    $s=2;
    
$sql="UPDATE booking SET  status='$s' where email='$email' and serviceid='$serviceid' and bookingid='$bookingid'";
update_data($sql);
?>
<script>
Swal.fire({
  icon: 'success',
  text: 'Payment Success ',
  didClose: () => {
    window.location.replace('../bookedservices.php');
  }
});
</script>
</body>
</html>
