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


$fname = $_POST['fname'];
// echo "$fname<br>";
$lname = $_POST['lname'];
// echo "$lname<br>";
$state = $_POST['state'];
//echo="$state<br>";
$district = $_POST['district'];
// echo "$district<br>";
$dob = $_POST['dob'];
// echo "$dob<br>";
$gender = $_POST['gender'];
// echo "$gender<br>";
$email = $_POST['email'];
// echo "$email<br>";
$phonenumber = $_POST['phonenumber'];
// echo "$number<br>";
$password = $_POST['password'];
// echo "$password<br>";
$cpassword = $_POST['cpassword'];
//echo "$cpassword<br>";
$housename=$_POST['housename'];
//echo "$housename<br>";
$street=$_POST['street'];
//echo "$street<br>";
$zip=$_POST['zip'];
//echo "$zip<br>";
$aadhar=$_POST['aadhar'];
//echo "$aadhar<br>";


// check email existance

$email_count = "SELECT * FROM loginpage WHERE email='$email'";

$count_res = count_data($email_count);

// check count of row

if ($count_res == 0) 
{
    if ($password == $cpassword) 
    {
        $sql = "INSERT INTO employee_register(fname,lname,housename,street,district,state,zip,dob,gender,phonenumber,email,aadhar,password) VALUES ('$fname','$lname','$housename','$street','$district','$state','$zip','$dob','$gender','$phonenumber','$email','$aadhar','$password');";
        $res=insert_data($sql);
        if ($res) 
        {
            $usertype = 2;
            $status = 1;

            $sql1 = "INSERT INTO loginpage(email,password,usertype,status) VALUES ('$email','$password','$usertype','$status');";
            if (insert_data($sql1)) 
            {
                ?>
                <script>
                      Swal.fire({
                          icon: 'success',
                          text: 'Registration Sucessfull',
                          didClose: () => {
                              window.location.replace('index.html');
                          }
                      });
                  </script>
              <?php
            } 
            else 
            {
                ?>
                <script>
                      Swal.fire({
                          icon: 'error',
                          text: 'Login Error',
                          didClose: () => {
                              window.location.replace('index.html');
                          }
                      });
                  </script>
              <?php
            }
        } 
        else 
        {
            ?>
            <script>
                  Swal.fire({
                      icon: 'error',
                      text: 'Registration Failed',
                      didClose: () => {
                          window.location.replace('index.html');
                      }
                  });
              </script>
          <?php
        }
    }
    else 
    {
        ?>
        <script>
              Swal.fire({
                  icon: 'warning',
                  text: 'Password Mismatch',
                  didClose: () => {
                      window.location.replace('employeeregister.html');
                  }
              });
          </script>
      <?php
    }
}
else
{
    ?>
    <script>
          Swal.fire({
              icon: 'warning',
              text: 'Invalid User Details',
              didClose: () => {
                  window.location.replace('index.html');
              }
          });
      </script>
  <?php
}

?>



</body>
<html>


