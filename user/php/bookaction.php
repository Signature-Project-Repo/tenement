
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
$date=$_POST['date'];
$time=$_POST['time'];
$address=$_POST['address'];
$instructions=$_POST['instructions'];
$url=$_POST['url'];
$district=$_POST['district'];
$city=$_POST['city'];
$landmark=$_POST['landmark'];
$status1=$_GET['status'];
$rate=$_GET['rate'];
$services=$_GET['services']; 
$status=0;


$sql="INSERT INTO `booking` (`email`,`serviceid`,`name`,`phone`,`date`,`time`,`address`,`instructions`,`url`,`status`,`district`,`city`,`landmark`,`rate`,`services`)VALUES('$email','$serviceid','$name','$phone','$date','$time','$address','$instructions','$url','$status','$district','$city','$landmark','$rate','$services')";
//echo $sql;
insert_data($sql);
?>

<script>

  <?php if($status1=='0')
{
  ?> 
 let timerInterval
Swal.fire({
  icon:'success',
  title: 'Booking Successfull',
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
    window.location.replace('../services.php');

  }
});

<?php }
elseif($status1=='1')
{ ?>
  let timerInterval
  Swal.fire({
    icon:'success',
    title: 'Booking Successfull',
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
      window.location.replace('../medical.php');
  
    }
  });
  <?php }
  ?>
  




</script>

    </body>
</html>