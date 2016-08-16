<!DOCTYPE html>
<?php include('../Function/function.php'); ?>
<html>
	<head>
		<title>Insert Product</title>
	</head>
	<body>
		<table border='2px solid black' style='width:750px;background-color:skyblue'>
			<form method='post' action='insert_product.php' enctype='multipart/form-data'>
				<tr><td colspan='6'><h1><b><center>Fill The Form</center></b></h1></td></tr>
			<tr><td colspan='3'>Product Title</td><td colspan='3'><input type='text' name='p_title' id='p_title' required></td></tr>			
			<tr><td colspan='3'>Product Catagory</td><td colspan='3'>
				<?php get_catagories_admin(); ?>
			</td></tr>
			<tr><td colspan='3'>Product Brand</td><td colspan='3'>
				<?php get_p_brand_admin(); ?>

			</td></tr>
			<tr><td colspan='3'>Product Image</td><td colspan='3'><input type='file' name='p_image' id='p_image' required></td></tr>
			<tr><td colspan='3'>Product Price</td><td colspan='3'><input type='text' name='p_price' id='p_price' required></td></tr>
			<tr><td colspan='3'>Product Description</td><td colspan='3'><textarea name='p_description' id='p_descripton' rows='10' cols='20' required></textarea></td></tr>
			<tr><td colspan='3'>Product Keyword</td><td colspan='3'><input type='text' name='p_keyword' id='p_keyword' required></td></tr>			
			<tr><td colspan='6'><input type='submit' name='submit' id='submit' style='float:right'></td></tr>
		</table>
	</body>
<?php
	if(isset($_POST['submit'])){
		//echo $_POST['catagories_select'];	
		insert_db();
	}
?>
<?php
	if(isset($_POST['button'])){
		echo 'hello';
	}
?>
</html>