
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
$title=$_POST['title'];
$description=$_POST['description'];
$priority=$_POST['priority'];
$date=$_POST['date'];
$reply=1;


$sql="INSERT INTO `complaints` (`email`,`title`,`description`,`priority`,`date`,`reply`)VALUES('$email','$title','$description','$priority','$date','$reply')";
//echo $sql;
insert_data($sql);
?>

<script>
 
 let timerInterval
Swal.fire({
  icon:'success',
  title: 'Registering',
  html: 'complaint registered',
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
    window.location.replace('../newcomplaint.php');

  }
});
</script>
    </body>
</html>