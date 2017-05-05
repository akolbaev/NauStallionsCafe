<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{	
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/avatars/" . $_FILES["image"]["name"]);
	
	$avatar				="images/avatars/" . $_FILES["image"]["name"];		
	$username				= $_POST['username'];			
	$first_name				= $_POST['first_name'];
	$last_name				= $_POST['last_name'];
	$selection				= $_POST['selection'];
	$email					= $_POST['email'];
	$mobilenumber			= $_POST['mobilenumber'];

	$errors = [];

	if (!empty($errors)) {
		foreach ($errors as $error) {
			validation_errors($error);
		}
	}
 	else{
		$sql = "UPDATE `member` SET `avatar` = '$avatar', `last_name` = '$last_name', `first_name` = '$first_name', `selection` = '$selection', `username` = '$username', `mobilenumber` = '$mobilenumber' WHERE `member`.`email` = '$email'";

		if ($conn->query($sql) === TRUE) {
			echo "test";
			echo '<script language="javascript">';
        	echo 'alert("Successfully Updated Your Profile"); location.href="index.php?page=user"';
        	echo '</script>';
			exit;

		} else {
			set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
		}

		$conn->close();
	}

}

 ?>