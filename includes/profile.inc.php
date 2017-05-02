<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
		
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
		$sql = "UPDATE `member` SET `last_name` = '$last_name', `first_name` = '$first_name', `selection` = '$selection', `username` = '$username', `mobilenumber` = '$mobilenumber' WHERE `member`.`email` = '$email'";

		if ($conn->query($sql) === TRUE) {
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