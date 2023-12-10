<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
session_start();
require '../../connect.php';
$email=$_SESSION['email'];

$description=$_POST['description'];
$experience=$_POST['experience'];
$rate=$_POST['rate'];



$sql="UPDATE `addservice` SET `description`='$description',`experience`='$experience',`rate`='$rate' WHERE email='$email' ";
update_data($sql);


?>

    <script>
           Swal.fire({
          icon: 'success',
          text: 'Service Updated',
          didClose: () => {
        window.location.replace('../myform.php');
          }
        });
    </script>



</body>
</html>
