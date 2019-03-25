<?php
$con = mysqli_connect('localhost','root','','projectweb');

if(isset($_POST['submit'])){
$shopname = $_POST['shopname'];
 $pass1 = $_POST['password'];

 $q1 = " SELECT * FROM admin_shop WHERE shop_name = '$shopname' && password = '$pass1'";
 $result1 = mysqli_query($con, $q1);
 $num1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

 $user1 = $num1['shop_name'];
 $password1 = $num1['password'];

 if($shopname == $user1 && $pass1 == $password1){
    session_start();
    $_SESSION['sid'] = $num1['id'];
    $_SESSION['shopname'] = $num1['shop_name'];

    header("Location: ./admin/Php/food_admin.php");
 }else{
    header("Location: ./index.html");
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
      Shop name:   <input type="text" name="shopname" id="">
      Password:    <input type="password" name="password" id="">
      <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>