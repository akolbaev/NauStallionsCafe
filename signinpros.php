<?php require_once("includes/connection.php");
if(isset($_POST['login']) && $_POST['login']=="mmm")
{
	$username=$_POST['username'];
	$passwprd=sha1($_POST['password']);
	$query="SELECT * from post.user WHERE username='$username' AND u_hash='$passwprd'";
	$reees=mysql_query($query);
	$total_recs=mysql_num_rows($reees);
	if($total_recs == 0)
	{
		header("location:signin.php?msg=!!!!! Wrong input check your CAPSLOCK and try again !!!!!");
		exit;	
	}
	if ($total_recs>0)
	{
		$logeduser= $username;
		session_start();
		$_SESSION['users']=$username;
		header("location:index.php");
		exit;
	}
	else
	{
		header("location:signin.php?msg=!!!! check your CAPSLOCK and try again");
	}
	}


?>