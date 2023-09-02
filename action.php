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


// check email existance

$email_count = "SELECT * FROM loginpage WHERE email='$email'";

$count_res = count_data($email_count);

// check count of row

if ($count_res == 0) 
{
    if ($password == $cpassword) 
    {
        $sql = "INSERT INTO user_register(fname,lname,state,district,dob,gender,email,phonenumber,password) VALUES ('$fname','$lname','$state','$district','$dob','$gender','$email','$phonenumber','$password');";
        $res=insert_data($sql);
        if ($res) 
        {
            $usertype = 1;
            $status = 0;

            $sql1 = "INSERT INTO loginpage(email,password,usertype,status) VALUES ('$email','$password','$usertype','$status');";
            if (insert_data($sql1)) 
            {
                ?>
                <script>
                      Swal.fire({
                          icon: 'success',
                          text: 'Registration Successfull',
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
                              window.location.replace('register.html');
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
                icon: 'Error',
                text: 'Registration Failed',
                didClose: () => {
                    window.location.replace('register.html');
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
                      window.location.replace('register.html');
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
                text: 'Invalid User Details',
                didClose: () => {
                    window.location.replace('register.html');
                }
            });
        </script>
    <?php
}

?>

</body>
<html>


