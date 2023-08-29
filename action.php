<?php

require 'connect.php';


$fname=$_POST['fname'];
// echo "$fname<br>";
$lname=$_POST['lname'];
// echo "$lname<br>";
$state=$_POST['state'];
//echo="$state<br>";
$district=$_POST['district'];
// echo "$district<br>";
$dob=$_POST['dob'];
// echo "$dob<br>";
$gender=$_POST['gender'];
// echo "$gender<br>";
$email=$_POST['email'];
// echo "$email<br>";
$phonenumber=$_POST['phonenumber'];
// echo "$number<br>";
$password=$_POST['password'];
// echo "$password<br>";
$cpassword=$_POST['cpassword'];
//echo "$cpassword<br>";


// check email existance

$email_count="SELECT * FROM  register WHERE email='$email'";

$count_res=count_data($email_count);
// check count of row

if ($count_res==0) 
{





$sql="INSERT INTO register(`fname`,`lname`,`state`,`district`,`dob`,`gender`,`email`,`phonenumber`) VALUES ('$fname','$lname','$state','$district','$dob','$gender','$email','$phonenumber');";
echo $sql;

$res=insert_data($sql);



if ($res)
{
    echo "Success";
}
else
{
    echo "failed";
}
}
else{

    echo "Email already in use";
}

?>