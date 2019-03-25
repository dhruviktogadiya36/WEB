<?php 
include "./connection.php";
$con=mysqli_connect('localhost','root','','store');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../Css/menu.css">
    
    <title>Menu</title>
</head>

<body>
    <header>
        <div class="location">
            <a href="">
                <div class="loction_list">
                    <h3>Rajkot</h3>
                    <i class="material-icons">
                        location_on
                    </i>
                </div>
            </a>
        </div>

        <form action="" class="search">
            <div class="search_list">
                <input type="search" placeholder="Search.....">
            </div>
        </form>

        <nav>
            <ul class="nav-box">
                <li><a href="#">Help</a></li>
                <li><a href="#">Cart</a></li>
                <li class="sub_menu_profile" style="text-transform:uppercase"><a
                        href="#"><?php echo $_SESSION['uname'] ?></a>
                    <ul>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Order</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li><a href="">Notification</a></li>
                        <li>
                            <form action="#" method="post">
                                <button type="submit" name="logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main style="z-index:-1;">
        <div class="shophead">
            <div class="shopbox">
                <img src="../image/dom.jpg" alt="">
            </div>
            <div>
                <h1>Domino's Pizza</h1>
                <p>Pizza</p>
                <p>kotecha chowk,Rajkot</p>
            </div>
            <form action="" class="shopsearch">
                <input type="search" placeholder="Search Your Favorite Disses..">
            </form>
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
            <div class="menuleft">
                <!--Menubox food menu list-->
<?php
    $result = mysqli_query($con,"SELECT * FROM domino_pizza");
        while($row = mysqli_fetch_assoc($result))
        {

?>
        <div class="menubox">
        <div class="menulist-left">
            <img src="../image/dom.jpg" style = "width: 50px;
    height: 50px;" alt="" class="menuimage">
            <div class="sqr">
                <div class="circle"></div>
            </div>
            <h3><?php echo $row['menu_list'] ?></h3>

        </div>
        <div class="btnright">
            <p> &#x20b9 <?php echo $row['price'] ?></p>
            <button>ADD</button>
        </div>
    </div>

        <?php

    }

?>
                <!---/*/**/*-->
            </div>
            <!--Cart-->
            <div class="cartright">
                <div class="sw">
                    <div class="shop_detail">
                        <h1>CART</h1>
                        <p>from Domino's Pizza</p>
                        <p>1 item</p>
                    </div>
                    <!--menu list in Cart-->
                    <div class="menuboxcart">
                        <div class="menulist-right">
                            <div class="sqr">
                                <div class="circle"></div>
                            </div>
                            <h3>Cheese & Corn</h3>
                            <p> &#x20b9 95</p>
                        </div>
                        <div class="btn">
                            <input type="button" value="-">
                            <input type="text" value="3" maxlength="2">
                            <input type="button" value="+">
                        </div>
                    </div>
                    <!--Total-->
                    <div class="order">
                        <h3>SubTotal</h3>
                        <p> &#x20b9 520</p>
                    </div>
                    <button class="chk">Checkout</button>
                </div>
            </div>

        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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