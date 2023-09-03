<?php
session_start();
?>

<html>
<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
  
</html>
<body>
<?php
require 'connect.php';
$email = $_POST['email'];
//echo "$E<br>";
$password = $_POST['password'];
//echo "$P<br>";
$sql1 = "SELECT * FROM loginpage WHERE email='$email' and password='$password'";
$res = count_data($sql1);
$_SESSION['email']=$email;
if ($res > 0) {

  $sql2 = "SELECT* FROM loginpage WHERE email='$email'";
  $data = select_data($sql2);
  $row = mysqli_fetch_assoc($data);
  //echo $row['usertype];
  if ($row['usertype'] == 0) {
    ?>
    <script>
          Swal.fire({
              icon: 'success',
              text: 'Admin Login Sucessfull',
              didClose: () => {
                  window.location.replace('../../admin/index.php');
              }
          });
      </script>
  <?php



  } 
  
  else if ($row['usertype'] == 1) {
    if ($row['status'] == 0) {
      ?>
      <script>
          Swal.fire({
              icon: 'warning',
              text: 'User under Verification',
              didClose: () => {
                  window.location.replace('../../index.html');
              }
          });
      </script>
  <?php

    } else if ($row['status'] == 1) {
      ?>
      <script>
            Swal.fire({
                icon: 'success',
                text: 'User Login Sucessfull',
                didClose: () => {
                    window.location.replace('../../user/index.php');
                }
            });
        </script>
    <?php



    } else if ($row['status'] == -1) {
      ?>
      <script>
            Swal.fire({
                icon: 'error',
                text: 'User Rejected',
                didClose: () => {
                    window.location.replace('index.php');
                }
            });
        </script>
    <?php



    } else if ($row['status'] == -2) {
      ?>
      <script>
            Swal.fire({
                icon: 'warning',
                text: 'User Login Suspended',
                didClose: () => {
                    window.location.replace('index.php');
                }
            });
        </script>
    <?php



    }
  }
  
  else if ($row['usertype'] == 2) {
    if ($row['status'] == 0) {
      ?>
      <script>
            Swal.fire({
                icon: 'warning',
                text: 'Employee Under Verification',
                didClose: () => {
                    window.location.replace('index.php');
                }
            });
        </script>
    <?php




    } else if ($row['status'] == 1) {
      ?>
      <script>
            Swal.fire({
                icon: 'error',
                text: 'Employee Login Success',
                didClose: () => {
                    window.location.replace('../employee/index.php');
                }
            });
        </script>
    <?php



    } else if ($row['status'] == -1) {
      ?>
      <script>
            Swal.fire({
                icon: 'warning',
                text: 'Employee Login Rejected',
                didClose: () => {
                    window.location.replace('index.php');
                }
            });
        </script>
    <?php



    } else if ($row['status'] == -2) {
      ?>
      <script>
            Swal.fire({
                icon: 'warning',
                text: 'Employee Login Suspended',
                didClose: () => {
                    window.location.replace('index.php');
                }
            });
        </script>
    <?php
    }
  }
} else {
  echo "Invalid User";
}

?>


</body>
<html>
