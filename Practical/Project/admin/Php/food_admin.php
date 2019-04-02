<?php
include "../../User/Php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/food_admin.css">
    <title>Admin</title>
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


    <div class="main">
    <table>
        <tr class="tr1">
            <th>Sr No.</th>
            <th>Order no.</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Phone No.</th>
            <th>Order List</th>
            <th>Food Center</th>
            <th>Bill</th>
        </tr>
    </table>
    <table>
        <tr class="tr2">
            <td >1</td>
            <td>0054324</td>
            <td>Aanand</td>
            <td>2-sivaji Appt,near lukshmi chowk,baba road,rajkot</td>
            <td>1234567890</td>
            <td>cheese N corn(M)-1</td>
            <td>Domino's pizza<br><br>Indira circle,rajkot</td>
            <td>&#8377;190.00 <br><br><button id="inp">Ordered</button></td>
        </tr>

    </table>
</div>
</body>
</html>