<?php
require_once("includes/connection.php");
if(isset($_POST['signup']) && $_POST['signup']=="mm")
{
	$username=($_POST['username']);
	$fullname=($_POST['fullname']);
	$email=($_POST['email']);
	$pass=sha1($_POST['u_hash']);
	
	$query_check="SELECT * from member WHERE username='$username'";
	$res_check=mysql_query($query_check);
	$check_recs=mysql_num_rows($res_check);
	if($check_recs>0)
		{
			header("location:signup.php?name=Change your username  its already taken.");	
		}
	else{
		
		$query_check="SELECT * from member WHERE email='$email'";
	$res_check=mysql_query($query_check);
	$check_recs=mysql_num_rows($res_check);
	if($check_recs>0)
		{
			header("location:signup.php?name=Your email address already exists.");	
		}
	else{
								$query="INSERT INTO member (id,username,fullname,email,u_hash) VALUES 								('','$username','$fullname','$email','$pass')";
	
								$queryInsertion=mysql_query($query);
								if($queryInsertion)
								{
									header("location:thanks.php?");
									exit;
								}
										else
											{
											header("location:signup.php?msg=Something went wrong please try again");
											exit;
											}
	
}
}
}
?>