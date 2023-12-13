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
$email=$_SESSION['otpmail'];
$newpass=$_POST['newpass'];
$confirmpass=$_POST['confirmpass'];
if($newpass==$confirmpass)
{
    $sql="UPDATE loginpage SET password='$newpass' where email='$email' ";
    update_data($sql);
    ?>
    <script>
        Swal.fire({
          icon: 'success',
          text: 'Password Reset !!!',
          didClose: () => {
             window.location.replace('../index.html');
          }
        });
    </script>
<?php
}
else if($newpass!=$confirmpass)
{
    ?>
    <script>
      Swal.fire({
        icon: 'error',
        text: 'Password and Confirm password is not matching !!!',
        didClose: () => {
          window.location.replace('newpassword.php');
        }
      });
    </script>
<?php
}
?>
</body>
</html>
