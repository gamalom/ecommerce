<!DOCTYPE html>
<?php include('Function/function.php');
	 
 ?>
<html>
	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="Assets/Bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Assets/style.css">
	</head>
	<body>
		<div id='div_container' class='div-responsive'>
			<div class='head_container'>
				<div class='header' id='header'>
					<img src='Images/banner.jpg' id='banner'>
					<a href='/Ecommerce/index.php'><img src='Images/logo.jpg' id='logo'></a>

				</div>
				<div class='navigation' id='navigation' name='navigation'>
					<ul id='nav_ul'>
						<li><a href='index.php' id='nav_li'>HOME</a></li>
						<li><a href='/Ecommerce/Customer/allproducts.php' id='nav_li'>All Products</a></li>
						<li><a href='index.php' id='nav_li'>Laptops</a></li>
						<li><a href='index.php' id='nav_li'>Tablets</a></li>
						<li><a href='index.php' id='nav_li'>Mobiles</a></li>
						<li><a href='index.php' id='nav_li'>Generators</a></li>
					<input type='text' style='line-height:30px' placeholder='Text for search' id='search'><button style='line-height:30px'>Search</button>
					</ul>
				</div>
			</div>	
			<div class='sidebar' id='sidebar' name='sidebar'>
				<?php get_brands(); ?><br/>
				<?php get_catagories(); ?>
			</div>
			<div id='cart_bar'>
				<span>Welcome To Cart!!</span>
			</div>
			<div id='container' class='div-responsive'>
				<div id='product_box'>
				
						<?php show_product();?>
					
				</div>
			</div>
			
			<div class='footer' name='footer' id='footer'>
				This is the footer.<?php echo $ip = getIp(); ?>
			</div>
		</div>
		<?php
	if(isset($_POST['button'])){
		addtocart();
	}
?>
	</body>
</html>