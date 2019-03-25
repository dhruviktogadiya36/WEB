<?php 
include("./connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Css/home.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<title>Document</title>

</head>

<body>
	<header>
		<div class="location">
				<a href="">	 <div class="loction_list">
				 <h3>Rajkot</h3>
					<i class="material-icons">
						location_on
					</i>	
				</div></a>
		</div>

		<form action="" class="search">
			<div class="search_list">
				<input id="search_input" type="search" placeholder="Search.....">
			</div>
		</form>

		<nav>
			<ul class="nav-box">
				<li><a href="#">Help</a></li>
				<li><a href="#">Cart</a></li>
				<li class="sub_menu_profile"><a href="#"><?php echo $_SESSION['uname'] ?>
			</a>
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
	<section>
		<div class="left">
			<ul class="menu_sort">
				<li><a href="#">Breakfast</a></li>
				<li><a href="#">Lunch</a></li>
				<li><a href="#">Dinner</a></li>
				<li><a href="#">Hot & Cold</a></li>
				<li><a href="#">Ice-Cream</a></li>
			</ul>
		</div>
		<div class="right">
			<div class="right-nav">
				<ul>
					<li><a href="">Relevance</a></li>
					<li><a href="">Rating</a></li>
					<li><a href="">Delivery Time</a></li>
				</ul>

			</div>

			<?php 
		$res=mysqli_query($con,"select * from admin_shop");
		while($row = mysqli_fetch_array($res))
		{
			?>

<div>
				<a href="">
					<div class="box">
						<div class="rating">
							<p>4.0</p>
						</div>
						<div class="img_box">
							<img src="./../../admin/<?php echo $row['shop_image']; ?>" alt="Shop Image">
						</div>
						<div class="menu_name">
							<div class="shop_name">
								<div class="food_name">
									<h3 id="shop_name"><?php echo $row["shop_name"]; ?></h3>
								</div>
								<div class="wishlist_shop">
									<i class="material-icons">favorite</i>
								</div>
							</div>
							<div class="menu_list">
								<h4><?php echo $row["shop_menu"]; ?></h4>
							</div>
							<div class="shop_adar">
								<h5><?php echo $row["shop_address"]; ?></h5>
							</div>
						</div>
					</div>
				</a>
			</div>

			<?php

		}
			
			?>
			

		</div>
	</section>
</body>

</html>