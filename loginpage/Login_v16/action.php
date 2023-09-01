<?php
require 'connect.php';
$email=$_POST['email'];
//echo "$E<br>";
$password=$_POST['password'];
//echo "$P<br>";
$sql1="SELECT * FROM loginpage WHERE email='$email' and password='$password'";
$res=count_data($sql1);
if($res>0)
{

    $sql2="SELECT* FROM loginpage WHERE email='$email'";
    $data=select_data($sql2);
    $row=mysqli_fetch_assoc($data);
    //echo $row['usertype];
    if($row['usertype']==0)
    {
        echo "Admin";
    }
    else if($row['usertype']==1)
    {
        echo "User";
    }
    else if($row['usertype']==2)
    {
        echo "Employee";
    }
}
else{
    echo "Invalid User";
}
?>
  