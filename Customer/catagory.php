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
					$cat_id=$_GET['cat_id'];
						$db =new Mysqli('localhost','root','','Ecommerce');
						$sql="SELECT * FROM `product` WHERE `product_catagory` = '$cat_id' ";
						$r=$db->query($sql);
						//var_dump($r);
						$count = Mysqli_num_rows($r);
						if($count == 0){
							echo"<h1><b>Sorry no products in this catagory!!!</b></h1>";
						}
						while($row = $r->fetch_assoc()){
							echo"<div>
									<h1>".$row['product_title']."</h1>
									<img src='/Ecommerce/Images/".$row['product_image']."' id='img_cat'>
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