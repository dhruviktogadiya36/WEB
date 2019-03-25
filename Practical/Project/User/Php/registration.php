<?php

session_start();
include("./connection.php");
header('location: ../../index.html');

$username = $_POST['uname'];
$phoneNo = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['psw'];
$address = $_POST['addr'];

//*********fetech data from data and check data for duplicate data*/
$q = " select * from signup where username = '$username' && phoneNumber = '$phoneNo' && emailid = '$email' && password = '$pass' && address = '$address'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{
//*****insert data into database */
	$qy= " insert  into signup(username , phoneNumber, emailid, password, address) values ('$username' , '$phoneNo' , '$email' , '$pass' , '$address') ";
	mysqli_query($con, $qy);
}


?>
