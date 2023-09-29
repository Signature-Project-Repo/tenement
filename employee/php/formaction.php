<html>

<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>


<body>
<?php
require '../../connect.php';
$service=$_POST['services'];
$description=$_POST['description'];
$experience=$_POST['experience'];
$rate=$_POST['rate'];

$target_dir="../../upload/service/";

$sql="INSERT INTO `addservice` (`services`,`description`,`experience`,`rate`) VALUES ('$service','$description','$experience','$rate') ";
insert_data($sql);


$dd=select_data("select max(serviceid) as serviceid from addservice");
$row=mysqli_fetch_assoc($dd);
$item_id=$row['serviceid'];

$uploadOk = 1;

$imageFileType="jpg";
$target_file=$target_dir."add_service_".$item_id.".".$imageFileType;
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
{
    ?>
    <script>
           Swal.fire({
          icon: 'success',
          text: 'Registration Completed !!',
          didClose: () => {
        window.location.replace('../newform.php');
          }
        });
    </script>
    <?php
  }

else
{
    ?>
    <script>
      Swal.fire({
        icon: 'error',
        text: 'Registration Error',
        didClose: () => {
          window.location.replace('../newform.php');
        }
      });
    </script>
    <?php
}
?>
</body>
</html>
