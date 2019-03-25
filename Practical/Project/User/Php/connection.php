<?php 
$con = mysqli_connect('localhost','root','','projectweb');
?>
<?php
session_start();
if(!isset($_SESSION['sid'])){
    header("Location: ../../index.html");
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: ../../index.html");
}
?>