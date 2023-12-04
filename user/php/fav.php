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
$services=$_GET['services'];
//$name = $_GET['name'];
$description = $_GET['description'];
$rate=$_GET['rate'];

$sql2 = "INSERT INTO favourites (email, serviceid,services,description,rate, status) VALUES ('$email', '$serviceid','$services','$description','$rate', '1')";
insert_data($sql2);
?>

<script type="text/javascript">
  Swal.fire({
    icon: 'success',
    text: 'Added to favorites',
  }).then(() => {
    window.location.replace('../favourites.php');
  });
</script>
</body>
</html>