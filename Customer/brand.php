<?php
include('../Function/function.php');
?>
<html>
	<head>
		<title>BRAND</title>
		<link rel="stylesheet" type="text/css" href="../Assets/Bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../Assets/style.css">
	</head>
	<body>
		<div id="div_container">
			<?php include('../inc/head.php');?>
			<div class='sidebar' id='sidebar' name='sidebar'>
				<?php include('../inc/sidebar.php'); ?>
			</div>
			<div id='cart_bar'>
				<span>Welcome To Cart!!</span>
			</div>
			<div id='container' class='div-responsive'>
				<div id='product_box'>
					<?php

					$brand_id=$_GET['brand_id'];
						$db =new Mysqli('localhost','root','','Ecommerce');
						$sql="SELECT * FROM `product` WHERE `product_brand` = '$brand_id' ";
						$r=$db->query($sql);
						while($row = $r->fetch_assoc()){
							echo"<div style='border:2px solid blue;margin:5px;padding:10px'>
									<h1>".$row['product_title']."</h1>
									<img src='/Ecommerce/Images/".$row['product_image']."' width='300px'>
									<p>".$row['product_description']."</p>
								</div>
							";
						}
					?>
						
					
				</div>
			</div>
			
			<div class='footer' name='footer' id='footer'>
				This is the footer.
			</div>
		</div>
	</body>
</html>