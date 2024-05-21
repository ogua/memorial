<?php
include('db/db.php');

error_reporting(0);

$name = strip_tags(trim($_POST['fullname']));
$email = strip_tags(trim($_POST['email']));
$message = strip_tags(trim($_POST['message']));
$file = $_FILES['ivfile'];

//pic
$sql = "INSERT INTO `lovingmemories`(`fullname`, `email`, `note`) VALUES ('$name','$email','$message')";

$query = mysqli_query($conn,$sql);

if ($query) {
	
	$lastid = mysqli_insert_id($conn);

	if ($file) {

		$ext = pathinfo($_FILES['ivfile']['name'],PATHINFO_EXTENSION);
            $destination = './assets/memory/'.time().'.'.$ext;

        if (move_uploaded_file($_FILES['ivfile']['tmp_name'], $destination)) {
            
            $imagepath = 'assets/memory/'.time().'.'.$ext;

            $updateimgvideo = "update `lovingmemories` set `attachment` = '$imagepath' where `id` = '$lastid'";

			$gquery = mysqli_query($conn,$updateimgvideo);
        }
	}
	
	echo "Your memory posted successfully";
	
}else{
	
	//header("Location: https://example.com/new-page.php");
	
	echo "Something went wrong please try again";
}


?>