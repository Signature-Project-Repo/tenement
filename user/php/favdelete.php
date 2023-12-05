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
$favid = $_GET['favid'];

$sql2 = "UPDATE favourites SET status='0' WHERE  favid='$favid'";
update_data($sql2);
?>

<script type="text/javascript">
  Swal.fire({
    icon: 'success',
    text: 'Removed From favorites',
  }).then(() => {
    window.location.replace('../favourites.php');
  });
</script>
</body>
</html>