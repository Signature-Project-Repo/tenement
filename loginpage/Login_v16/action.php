<?php

require 'connect.php';


$username=$_POST['username'];
echo "$username<br>";
$password=$_POST['pass'];
echo "$password<br>";
//$usertype=$_POST['usertype'];
//echo="$usertype<br>";
//$status=$_POST['status'];
//echo="$status<br>";

$sql="INSERT INTO login1(username,pass) VALUES ('$username','$password');";
echo $sql;





if ($res=TRUE)
{
    echo "Success";
}
else
{
    echo "failed";
}


?>