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
            $status = 0;

            $sql1 = "INSERT INTO loginpage(email,password,usertype,status) VALUES ('$email','$password','$usertype','$status');";
            if (insert_data($sql1)) 
            {
                echo "<script>alert('Registration Successfull');</script>";
            } 
            else 
            {
                echo "<script>alert('Login Error');</script>";
            }
        } 
        else 
        {
            echo"<script>alert('Registration Failed');</script>";
        }
    }
    else 
    {
        echo "<script>alert('Password mismatch');</script>";
    }
}
else
{
     echo "<script>alert('Invalid User Details');</script>";
}

?>




