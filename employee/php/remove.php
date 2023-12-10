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
$serviceid = $_GET['serviceid'];


$sql2 = "DELETE FROM addservice WHERE  serviceid='$serviceid'";
update_data($sql2);
?>

<script type="text/javascript">
  Swal.fire({
    icon: 'success',
    text: 'Service Removed',
  }).then(() => {
    window.location.replace('../myform.php');
  });
</script>
</body>
</html>