<?php

include 'config.php';
if(isset($_POST['login'])){
	session_start();

	$username =$_POST['username'];
	$pass = $_POST['pass'];

	$sql="SELECT * from user where username='$username' AND password='$pass'";
	$res=$conn->query($sql);
	$row=$res->fetch_assoc();
	if($res->num_rows > 0){
			$_SESSION['username'] = $username;
         	$_SESSION['pass'] = $pass;
		header("Refresh: 2 ; URL=dashboard.php");
	}
	else{
		echo "Invalid email or password";
		header("location: index.php");
	}
}




?>