<?php
	session_start();
	require '../../connect.php'; 
	$email=$_SESSION['email'];
	$user=mysqli_fetch_assoc(select_data("select img from user_register where email='$email';"));
	$path="../../upload/profile/".$user['img'];
	 if ($user['img'] != 'default.png') { 
	          unlink($path);
     } 
	$target_dir = "../../upload/profile/";
	$imageFileType = strtolower(pathinfo(basename($_FILES["pro"]["name"]),PATHINFO_EXTENSION));
	$Filename = str_replace(['@', '.'], '', $email) . "." . $imageFileType;
	$target_file = $target_dir . $Filename;
	if (move_uploaded_file($_FILES["pro"]["tmp_name"], $target_file)) {
		$sql=update_data("update user_register set img='$Filename' where email='$email'");
		echo 1;
		exit();
	} 
	else {
		$sql=update_data("update user_register set img='default.png' where email='$email'");
		echo 0;
		exit();
	}
?>