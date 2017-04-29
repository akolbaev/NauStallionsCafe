<?php
if (!isset($_FILES['avatar']['tmp_name'])) {
	echo "";
	}else{
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$file=$_FILES['avatar']['tmp_name'];
	$avatar= addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
	$image_name= addslashes($_FILES['avatar']['name']);
			
			move_uploaded_file($_FILES["avatar"]["tmp_name"],"images/avatars/" . $_FILES["avatar"]["name"]);		
	$photo_location="images/avatars/" . $_FILES["avatar"]["name"];		
	$username				= $_POST['username'];			
	$first_name				= $_POST['first_name'];
	$last_name				= $_POST['last_name'];
	$selection				= $_POST['selection'];
	$email					= $_POST['email'];
	$mobilenumber			= $_POST['mobilenumber'];
	$password				= md5($_POST['password']);
	$confirm_password		= $_POST['confirm_password'];

	$errors = [];

	if (email_exists($email))
	{
		$errors[] = "$email is already registered.";
	}

	if (!empty($errors)) {
		foreach ($errors as $error) {
			validation_errors($error);
		}
	}
 	else{
		$sql = "INSERT INTO member (photo_location, username, first_name, last_name, selection, email, mobilenumber, password, date_added)
		VALUES ('$photo_location','$username', '$first_name', '$last_name', '$selection', '$email', '$mobilenumber', '$password', now())";

		if ($conn->query($sql) === TRUE) {
			redirect("index.php?page=thanks_message");
			exit;

		} else {
			set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
		}

		$conn->close();
	}
}}
?>