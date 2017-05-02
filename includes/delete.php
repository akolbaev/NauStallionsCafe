<?php
include_once "init.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
		
	$id				= $_POST['id'];			


	$errors = [];

	if (!empty($errors)) {
		foreach ($errors as $error) {
			validation_errors($error);
		}
	}
 	else{
		$sql = "DELETE FROM posts WHERE posts.id='$id'";

		if ($conn->query($sql) === TRUE) {
			echo '<script language="javascript">';
        	echo 'alert("Successfully Deleted Your Posts"); location.href="../index.php?page=user_posts"';
        	echo '</script>';
			exit;

		} else {
			set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
		}

		$conn->close();
	}

}
?>