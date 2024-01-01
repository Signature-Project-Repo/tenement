
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
$email=$_SESSION['email'];
$serviceid=$_SESSION['serviceid']; 

$name=$_POST['name'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$district=$_POST['district'];
$address=$_POST['address'];
$city=$_POST['city'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$hypertension=$_POST['hypertension'];
$diabetesmellitus=$_POST['diabetesmellitus'];
$disease=$_POST['disease'];
$sql1="SELECT bookingid FROM booking where email='$email' AND serviceid='$serviceid' AND phone='$phone'";
$data1 = select_data($sql1);
$row = mysqli_fetch_assoc($data1);
$bookingid=$row['bookingid'];

$sql="INSERT INTO `medical` (`bookingid`,`name`,`phone`,`age`,`dob`,`address`,`city`,`district`,`height`,`weight`,`hypertension`,`diabetesmellitus`,`disease`)VALUES('$bookingid','$name','$phone','$age','$dob','$address','$city','$district','$height','$weight','$hypertension','$diabetesmellitus','$disease')";
//echo $sql;
insert_data($sql);
?>

<script>
 let timerInterval
Swal.fire({
  icon:'success',
  title: 'Medical Record Successfully Added',
  html: 'Booking ',
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
    window.location.replace('../index.php');

  }
});
</script>

    </body>
</html>