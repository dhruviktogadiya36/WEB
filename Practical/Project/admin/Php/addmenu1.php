<?php 
include "../../User/Php/connection.php";
?>
<?php
$con = mysqli_connect('localhost','root','','store');
$table =  $_SESSION['shopname'];
$s2 = str_replace(" ", "_", $table);
 
if(isset($_POST["submitSave"]))
{
    mysqli_query($con,"INSERT INTO $s2 (id ,menu_list,food_type,price, image_food) VALUES (' ','$_POST[addMenu]','$_POST[veg]','$_POST[price]','$_POST[foodImg]')");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/food_admin.css">
    <title>Document</title>
    <style>
        .form_submit {
            margin: 10px 17px;
            padding: 10px 20px;
            border: 0;
            outline: 0;
            background-color: gray;
            color: white;
        }


        input.shop {
            text-transform: capitalize;
        }

        input.shopadd {
            text-transform: uppercase;
        }

        /******************/

        #menu_list {
            display: flex;
            padding: 0 17px;
        }

        .add_food_here,
        .veg,
        .non-veg,
        .total,
        .closeit,
        .edit {
            margin: 10px 5px;
            padding: 7px;
            border: 0;
            outline: 0;
            border-radius: 5px;
        }

        .add_food_here {
            flex: 6;
            border: 1px solid rgba(192, 192, 192, 0.7);
        }

        .veg,
        .non-veg {
            flex: 1;
        }

        .total {
            border: 1px solid rgba(192, 192, 192, 0.7);
            flex: 1;
        }

        .closeit {
            border: 1px solid rgba(192, 192, 192, 0.7);
            flex: 0.5;
            padding: 0;
            background-color: gray;
            color: white;
        }

        .edit {
            flex: 1;
            border: 1px solid rgba(192, 192, 192, 0.7);
            padding: 0;
            background-color: gray;
            color: white;
        }

        .btn {
            padding: 5px 17px;
            outline: 0;
            border-radius: 5px;
        }

        .button {
            padding: 10px 20px;
            background-color: gray;
            color: white;
            border: 0;
            outline: 0;
            border: 1px solid rgba(192, 192, 192, 0.7);
        }

        table {
            width: 100%;
        }
    </style>
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
                <li><a href="./addmenu1.php">Add Menu</a></li>
                <li><a href="#">Food Manu</a></li>
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
    <form action="#" method="post" id="add_food">
        <button type="submit" name="submitSave" class="button">Save</button>    
        <!-- <input type="submit" value="Save" class="button" name="submitSave"> -->

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

            <input type="file" class="total" name="foodImg">

        </div>

    </form>

    

    <div class="list">
            <?php 
            $table =  $_SESSION['shopname'];
            $s2 = str_replace(" ", "_", $table);
        $res=mysqli_query($con,"select * from $s2");
        echo $s2;
		while($row = mysqli_fetch_array($res))
		{
			?>
        <table border="1" style="text-align: center;">
            <tr>
                <td><?php echo $row["menu_list"] ?></td>
                <td><?php echo $row["food_type"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><img src="../shop_image/0573819467fc2fadae97f3e280c5996bSANTUSTHI.jpg" alt="" srcset=""
                        style="width:50px; height:50px;"></td>
                <td><input type="button" value="X" name="remove"></td>
            </tr>
        </table>
        <?php

}
    
    ?>
    </div>
    <script src="../JavaScript/admin.js"></script>
</body>

</html>