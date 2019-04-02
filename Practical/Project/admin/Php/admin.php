<?php 
$con = mysqli_connect('localhost','root','','projectweb');
  
$shopname1 = $_POST["shopname23"];

   $s2 = str_replace(" ", "_", $shopname1);

if(isset($_POST["submit1"]))
{
 $v1=rand(1111,9999);
$v2=rand(1111,9999);

$v3=$v1.$v2;

$v3=md5($v3);

    $fnm = $_FILES["pimage"]["name"];
    $dst = "../shop_image/".$v3.$fnm;
    $dst1 = "shop_image/".$v3.$fnm;
    move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    mysqli_query($con,"INSERT INTO admin_shop VALUES ( '' , '$shopname1', '$_POST[shoppass]' , '$_POST[shopmenu]', '$_POST[shopaddress]', '$dst1' ) ");
}  
?>

<?php 

$con = mysqli_connect('localhost','root','','store');

mysqli_query($con, "CREATE TABLE $s2(
    id INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    menu_list varchar(255),
    food_type varchar(255),
    price int(255),
    image_food varchar(255)  
);");
?>
