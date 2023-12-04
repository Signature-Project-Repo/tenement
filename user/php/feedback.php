
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
$bookingid=$_POST['bookingid'];
$feedback=$_POST['feedback'];
$rating=$_POST['rating'];

$sql1 = "UPDATE booking SET feedback='$feedback', rating='$rating' where bookingid='$bookingid'";
//echo $sql1;
    update_data($sql1);
    
   
    ?>
    <script>
           Swal.fire({
          icon: 'success',
          text: 'Feedback added',
          didClose: () => {
        window.location.replace('../bookedservices.php');
          }
        });
    </script>
    
    
</body>
</html>









          
