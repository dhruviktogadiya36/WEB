<?php 
include "../../User/Php/connection.php";
?>
<?php
$con = mysqli_connect('localhost','root','','store');
$table =  $_SESSION['shopname'];
$s2 = str_replace(" ", "_", $table);
 
if(isset($_POST["submitSave"]))
{
    $v1=rand(1111,9999);
    $v2=rand(1111,9999);
    
    $v3=$v1.$v2;
    
    $v3=md5($v3);
    
        $fnm = $_FILES["pimage"]["name"];
        $dst = "../shop_menu/".$v3.$fnm;
        $dst1 = "shop_menu/".$v3.$fnm;
        move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    mysqli_query($con,"INSERT INTO $s2 (id ,menu_list,food_type,price, image_food) VALUES (' ','$_POST[addMenu]','$_POST[veg]','$_POST[price]','$dst1')");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/addmenu.css">
    <title>Document</title>
</head>

<body>
<header>
        <div class="location">
            
        </div>

        <form action="" class="search">
            <div class="search_list">
                <input type="search" placeholder="Search.....">
            </div>
        </form>

        <nav>
            <ul class="nav-box">
                <li><a href="./addmenu1.php">Menu</a></li>
                <li class="sub_menu_profile"><a href="#"><?php echo $_SESSION['shopname'] ?></a>
                    <ul>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Order</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li><a href="">Notification</a></li>
                        <li><form action="#" method="post">
    <button type="submit" name="logout">Logout</button>
</form></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <form action="" method="post" id="add_food" enctype="multipart/form-data">

        <div id="menu_list">

            <input type="text" name="addMenu" placeholder="Add Food Here" class="add_food_here">

            <div class="veg">
                <input type="radio" name="veg" class="veg_input">
                <label class="forveglabel">Veg</label>
            </div>

            <div class="non-veg">
                <input type="radio" name="veg" class="nonveg_input">
                <label class="fornonveglabel">Non-Veg</label>
            </div>

            <input type="number" name="price" id="" placeholder="Food Price" class="total">

              <input type="file" name="pimage" class="total">

        </div>
        <button type="submit" name="submitSave" class="button">Save</button>   
    </form>

    

    <div class="list">
            <?php 
            $table =  $_SESSION['shopname'];
            $s2 = str_replace(" ", "_", $table);
        $res=mysqli_query($con,"select * from $s2");
		while($row = mysqli_fetch_array($res))
		{
			?>
        <table border="1" style="text-align: center;">
            <tr>
                <td><?php echo $row["menu_list"] ?></td>
                <td><?php echo $row["food_type"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><img src="../<?php echo  $row['image_food']; ?>" alt='' style="width:50px; height:50px;"></td>
                <td class="tablebtn"><input type="button" value="Edit" name="Edit"></td>
                <td class="tablebtn"><input type="button" value="X" name="remove"></td>
            </tr>
        </table>
        <?php

}
    
    ?>
    </div>
    <script src="../JavaScript/admin.js"></script>
</body>

</html>