<!DOCTYPE html>
<?php include('../Function/function.php'); 
	
?>
<html>
	<head>
		<title>All Products</title>
		<link rel="stylesheet" type="text/css" href="../Assets/Bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../Assets/style.css">
	</head>
	<body>
		<div id='div_container' class='div-responsive'>
			<?php include('../inc/head.php'); ?>	
			<?php include('../inc/sidebar.php'); ?>
			<div id='cart_bar'>
				<span>Welcome To Cart!!</span>
			</div>
			<div id='container' class='div-responsive'>
				<div id='product_box'>
				<?php

							if(isset($_GET['data'])){
								$data = $_GET['data'];				
								result();
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
