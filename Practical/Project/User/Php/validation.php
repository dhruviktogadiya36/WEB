<?php
include("./connection.php");
 
$unamephone = $_POST['uname_phone'];
$pass = $_POST['psw'];

$q = " SELECT * FROM signup WHERE (phoneNumber || username = '$unamephone') && password = '$pass'";//checking for phonenumber

$result = mysqli_query($con, $q);//storing quary

$num = mysqli_fetch_array($result,MYSQLI_ASSOC);//firing quiry

$user = $num['username'];
$phone = $num['phoneNumber'];
$password = $num['password'];

if($unamephone == $user || $unamephone == $phone){//if result found in phnumber no need to go for username
	if($pass == $password){
		session_start();
		$_SESSION['sid'] = $num['id'];
		$_SESSION['uname'] = $num['username'];
	header('location:../php/home.php');
	}
}
	else{
		echo"hello";
		header("Location: ../../index.html");
	}
?>	