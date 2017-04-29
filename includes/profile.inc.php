<?php 
include 'includes/init.php';

if (!isset($_FILES['avatar']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['avatar']['tmp_name'];
	$avatar= addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
	$image_name= addslashes($_FILES['avatar']['name']);
			
			move_uploaded_file($_FILES["avatar"]["tmp_name"],"images/avatars" . $_FILES["avatar"]["name"]);
			
			$photo_location="images/avatars/" . $_FILES["avatar"]["name"];

			$save=mysqli_query($conn, "INSERT INTO member (photo_location) VALUES ('$photo_location')");
			echo "Hello1";
			header("location: index.php?page=user_submit");
			echo "hello2";
			exit();		
	}
	

 ?>