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
$email = $_SESSION['otpmail'];
$OTP = $_POST['OTP'];
$sql="SELECT otp
FROM otp
WHERE email = '$email' 
ORDER BY sendtime DESC
LIMIT 1 ";

$data = select_data($sql);
if ($data && $data->num_rows > 0) {
    $row = $data->fetch_assoc();
    $storedOTP = $row['otp'];

    if ($OTP == $storedOTP) {
        ?>
    <script>
        Swal.fire({
          icon: 'success',
          text: 'OTP Verified !!!',
          didClose: () => {
             window.location.replace('newpassword.php');
          }
        });
    </script>
<?php
} else {
  
?>
   <script>
      Swal.fire({
        icon: 'error',
        text: 'Invalid OTP',
        didClose: () => {
          window.location.replace('verifyotp.php');
        }
      });
    </script>
<?php
}
}
?>
</body>
</html>
