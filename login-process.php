<?php session_start();
	
$username = "admin";
$password = "admin";
if(isset($_POST) && $_POST != ""){
	if($username === $_POST['username']){
		if($password === $_POST['password']){
			$_SESSION['USERNAME'] = $_POST['username'];
			$_SESSION['PASSWORD'] = $_POST['password'];
			$_SESSION['SUCCESS'] = "Welcome back";
			header('location: login.php');
 		}else{
			$_SESSION['WARNING'] = "PASSWORD IS INCORRECT";
	header('location: login.php');
		}
	}else{
		$_SESSION['WARNING'] = "USERNAME IS INCORRECT";
	header('location: login.php');
	}

}else{
	$_SESSION['ERROR'] = "USERNAME OR PASSWORD MISSING";
	header('location: login.php');
}
?>