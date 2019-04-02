<?php 
include "./connection.php";
$con=mysqli_connect('localhost','root','','store');

$id = $_GET['id'];//id of shopname

$con1 = mysqli_connect('localhost','root','','projectweb');

$result = mysqli_query($con1,"SELECT * FROM `admin_shop` WHERE `id` = $id")or die(mysqli_error($con1));
$row = mysqli_fetch_assoc($result);

$sname1 = $row['shop_name'];
$smenu = $row['shop_menu'];
$sadd = $row['shop_address'];
$simg = $row['shop_image'];
$sname = str_replace(" ", "_", $sname1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../Css/menu.css">
    <link rel="icon" href="../../admin/<?php echo $row['shop_image']; ?>">
    <title><?php echo $row['shop_name'];?></title>
</head>
<body>
    <header>
        <div class="location">
                    <p>Rajkot</p>
                    <i class="material-icons">
                        location_on
                    </i>
        </div>

        <form action="" class="search">
                <input type="text" id="myInput" onkeyup="foodfilter()" placeholder="Search.....">
        </form>

        <nav>
            <ul class="nav-box">
                <li><a href="#">Help</a></li>
                <li><a href="#">Cart</a></li>
                <li class="sub_menu"><a href="#"><?php echo $_SESSION['uname'] ?></a>
                    <ul>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Order</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li><a href="">Notification</a></li>
                        <li>
                        <form action="" method="post">
                        <button type="submit" class="btn" name="logout">Logout</button>
                        </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="shophead">
            <div class="shopbox">
                <img src="../../admin/<?php echo $simg; ?>" alt="">
            </div>
            <div class="shopdesc">
                <h1><?php echo $sname1;?></h1>
                <p><?php echo $smenu; ?></p>
                <p><?php echo $sadd; ?></p>
            </div>
            <!-- <form action="" class="shopsearch">
                <input type="search" placeholder="Search Your Favorite Disses..">
            </form> -->
        </div>
    </main>
    <section>
        <div class="shopmenu">
            <!---Filter-->
            <div class="filter">
                <ul>
                    <li><a href="">Garlic Bread</a></li>
                    <li><a href="">Pizza</a></li>
                    <li><a href="">Cold Drinks</a></li>
                    <li><a href="">Ice Cream</a></li>
                </ul>
            </div>
            <div class="menuleft" id="foodlist">
                <!--Menubox food menu list-->
                <?php
     $result = mysqli_query($con,"SELECT * FROM $sname")or die(mysqli_error($con));
         while($row = mysqli_fetch_assoc($result))
         {
             
            $id2 = $row['id'];// id of menulist
?>
                <div id="menubox" class="menubox">
                        <img src="../../admin/<?php echo $row['image_food']; ?>" style="width: 50px;
    height: 50px;" alt="" class="menuimage">
                        <div class="sqr">
                            <div class="circle"></div>
                        </div>
                        <h3 class="name" id="#b<?php echo $id2 ?>"><?php echo $row['menu_list'] ?></h3>
                        <p>&#x20b9 <span id="#c<?php echo $id2 ?>"><?php echo $row['price'] ?></span></p>
                        <button type="button" name="additem" class="addbtn" onclick="myFunction(<?php echo $id2 ?>,a=0);">ADD</button>
                </div>
                
                <?php
    }

?>
                <!---/*/**/*-->
            </div>
            <!--Cart-->
            <div class="cartright">
                <div class="sw">
                    <h1>CART</h1>
                    <p>from <?php echo $sname1;?></p>
                    <p><span id="num_item">0</span> item</p>
                    <!--menu list in Cart-->
                    <div id="menuList" class= "menulist">
                <!----- creating dynamic div -->                  
                        </div>
                    
                    <!--Total-->
                    <div class="order">
                        <h3>SubTotal</h3>
                        <p> &#x20b9 <span id="total">0</span> </p>
                    </div>
                    <button class="chk">Checkout</button>
                </div>
            </div>

        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../JS/main.js"></script>
    <script>
        $(window).on('scroll', function () {
            if ($(window).scrollTop()) {
                $('main').addClass('black');
            } else {
                $('main').removeClass('black');
            }
        })
    </script>
</body>

</html>