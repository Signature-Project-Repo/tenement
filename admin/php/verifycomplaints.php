<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
</body>



<?php
require '../../connect.php';

$id=$_POST['id'];
$reply = $_POST['reply'];
// echo $email." ".$reply;
$sql = "UPDATE complaints SET reply='$reply' WHERE id='$id'";
$result = update_data($sql);

?>
  <script>
    let timerInterval
    Swal.fire({
      icon: 'success',
      title: 'Complaint Resolved',
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
        window.location.replace('../mycomplaints.php');

      }
    });
  </script>

</body>

</html