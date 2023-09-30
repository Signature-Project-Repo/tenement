
<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
require '../../connect.php';
$services = $_POST['services'];
$description = $_POST['description'];

    $sql = "INSERT INTO `items` (`services`, `description`) VALUES ('$services', '$description')";
    insert_data($sql);
    ?>
    <script>
          Swal.fire({
            icon: 'success',
            text: 'Item Added',
            didClose: () => {
              window.location.replace('../service.php');
            }
          });
          </script>
          </body>
          </html>









          
