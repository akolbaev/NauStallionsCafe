<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$username				= $_POST['username'];			
	$first_name				= $_POST['first_name'];
	$last_name				= $_POST['last_name'];
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
	}else{
		$sql = "INSERT INTO member (username, first_name, last_name, email, mobilenumber, password, date_added)
		VALUES ('$username', '$first_name', '$last_name', '$email', '$mobilenumber', '$password', now())";

		if ($conn->query($sql) === TRUE) {
			redirect("index.php?page=thanks_message");
			exit;

		} else {
			set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
		}

		$conn->close();
	}
}
?>