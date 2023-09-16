<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
</body>



<?php
require '../../connect.php';



$email = $_GET['email'];
$status = $_GET['status'];
// echo $email." ".$status;
$sql = "UPDATE loginpage SET status='$status' WHERE email='$email'";
$result = update_data($sql);

if (update_data($sql) && ($status == 1)) {
?>
  <script>
    let timerInterval
    Swal.fire({
      icon: 'success',
      title: 'User Accepted',
      html: 'updating ',
      timer: 1300,
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
        window.location.replace('../pendinguser.php');

      }
    });
  </script>
<?php

}

if (update_data($sql) && ($status == -1)) {

?>

  <script>
    let timerInterval
    Swal.fire({
      icon: 'error',
      title: 'User Rejected',
      html: 'updating ',
      timer: 1300,
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
        window.location.replace('../pendinguser.php');

      }
    });
  </script>
<?php
}
?>
</body>

</html