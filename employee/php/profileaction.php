<html>
    <head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
    </head>
   
    <body>

    <?php

    session_start();

require "../../connect.php";

$email=$_SESSION['email'];


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$housename=$_POST['housename'];
$street=$_POST['street'];
$district=$_POST['district'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$phonenumber=$_POST['phonenumber'];
$aadhar=$_POST['aadhar'];


$sql="UPDATE `employee_register` SET `fname`='$fname',`lname`='$lname',`housename`='$housename',`street`='$street',`district`='$district',`state`='$state',`zip`='$zip',`dob`='$dob',`gender`='$gender',`phonenumber`='$phonenumber',`aadhar`='$aadhar' WHERE  email='$email'";
//echo $sql;




if(update_data($sql))
{
?>
<script>
 
 let timerInterval
Swal.fire({
  icon:'success',
  title: 'Updating!',
  html: 'updating the profile',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    window.location.replace('../profile.php');

  }
});
</script>
<?php

}

?>
    </body>
</html