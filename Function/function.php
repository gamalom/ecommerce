<?php
function get_brands(){
$db=new Mysqli("localhost","root","","ecommerce");
$sql="SELECT * FROM `brand`";
$r=$db->query($sql);
echo "<div style='background-color:#f6f6ff;color:black;width:100%;margin:0px;padding:0px'><u><strong>BRAND</strong></u></div>";
echo "<ul id='brand_ul'>";
while($row = $r->fetch_assoc())
		{			
				echo"<li id='brand_li'><a href='/Ecommerce/customer/brand.php?brand_id=".$row['brand_id']."'>". $row['brand_title']."</a></li>";		
		}
	echo"</ul>";
	}
	function get_catagories(){
		$db=new Mysqli("localhost","root","","ecommerce");
		$sql="SELECT * FROM `catagory`";
		$r=$db->query($sql);
		echo "<div style='background-color:#f6f6ff;color:black;width:100%;margin:0px;padding:0px'><u><strong>CATAGORIES</strong></u></div>";
		echo "<ul id='catagories_ul'>";
		while($row = $r->fetch_assoc())
				{			
						echo"<li id='catagories_li'><a href='/Ecommerce/Customer/catagory.php?cat_id=".$row['cat_id']."'>". $row['cat_title']."</a></li>";		
				}
			echo"</ul>";
		}
		function get_catagories_admin(){
		$db=new Mysqli("localhost","root","","ecommerce");
		$sql="SELECT * FROM `catagory`";
		$r = $db->query($sql);

		echo "<select id='catagories_select' name='catagories_select' required><option>Select a Catagory</option>";
		while($row = $r->fetch_assoc())
				{			
						echo"<option id='catagories_option' value='".$row['cat_id']."'>". $row['cat_title']."</option>";		
				}
			echo"</select>";
		}
		function get_p_brand_admin(){
		$db=new Mysqli("localhost","root","","ecommerce");
		$sql="SELECT * FROM `brand`";
		$r=$db->query($sql);
		echo "<select id='brand_select' name='brand_select' required><option>Select a Brand</option>";
		while($row = $r->fetch_assoc())
				{			
						echo"<option id='brand_option' value='".$row['brand_id']."'>". $row['brand_title']."</option>";		
				}
			echo"</select>";
		}
		function insert_db(){
			$p_title = $_POST['p_title'];
			$p_catagories = $_POST['catagories_select'];
			$p_brand = $_POST['brand_select'];
			$p_image = $_FILES['p_image']['name'];
			$p_image_tmp = $_FILES['p_image']['tmp_name'];
			$p_price = $_POST['p_price'];
			$p_description = $_POST['p_description'];
			$p_keyword = $_POST['p_keyword'];
			$db = new Mysqli('localhost','root','','ecommerce');
			$sql = "INSERT INTO `product`(`id`, `product_title`, `product_catagory`, `product_brand`, `product_image`, `product_price`, `product_description`, `product_keyword`) VALUES ('','$p_title','$p_catagories','$p_brand','$p_image','$p_price','$p_description','$p_keyword')";
			$r=$db->query($sql);
			//echo $sql;
			move_uploaded_file($p_image_tmp, "product_images/$p_image");
		}
		function show_product(){
			$db = new Mysqli('localhost','root','','ecommerce');
			$sql="SELECT * FROM `product` LIMIT 5";
			$r=$db->query($sql);	

			while($row = $r->fetch_assoc()){
				echo"
					<div id='div_pro'>
						<h1 style='font-size:18pt;float:left'>".$row['product_title']."</h1><br><br>
						<img src='/Ecommerce/Admin/product_images/".$row['product_image']."'width='350px' height='300px' id='pro_img' class='div_proresponsive' style='float:left'>
						<p>".$row['product_description']."</p>
						<h4>Price : ".$row['product_price']."$</h4>
						<a href='Customer/detail.php?pro_id='".$row['id']."'>Detail</a><form action=".$_SERVER['PHP_SELF']."?pro_id=".$row['id']." method='post'><button style='float:right' class='btn btn-info' name='button' value='button'>Add to cart</button></form>
					</div>";
				
			}
					
		}
	
			/*echo"<table class='product_id' tyle='margin-left:200px'>";
				echo"<tr><td>".$row['product_title']."</td><td><img src='Admin/product_images/".$row['product_image']."' width='200px'></td><td>".$row['product_price']."</td>";
				echo $row['product_title'];
				echo "</tr>";
			echo"</table>";*/
			
			function detail(){
				$db=new Mysqli('localhost','root','','Ecommerce');
				$id = $_GET['pro_id'];
				$sql = "SELECT * FROM `product` WHERE `id` = '$id'";
				$r=$db->query($sql);
				while($row = $r->fetch_assoc()){
					echo "<div id='detail'><b>
						".$row['product_title']."</b><br/>
						<img src='../Images/".$row['product_image']."'>
						<br/>
						<b>Description :</b> ".$row['product_description']."
						<br/>
						<b>Price : </b>".$row['product_price']."$
						<br/>
						<button class='btn btn-success'>Add to Cart</button>
					</div>";
				}
				//echo $sql;
			}
			function result(){
				$data = $_GET['data'];
				$db=new Mysqli('localhost','root','','Ecommerce');
				$sql="SELECT * FROM `product` WHERE `product_keyword` like '%$data%'";
				$r=$db->query($sql);
				while($row = $r->fetch_assoc()){
					echo "<div id='div_pro'><b>
						".$row['product_title']."</b><br/>
						<img src='../Images/".$row['product_image']."' height='250px'>
						<br/>
						<b>Description :</b> ".$row['product_description']."
						<br/>
						<b>Price : </b>".$row['product_price']."$
						<br/>
						<button class='btn btn-success'>Add to Cart</button>
					</div>";
				}
				
			}
			function getIp() {
			    $ip = $_SERVER['REMOTE_ADDR'];			 
			    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			        $ip = $_SERVER['HTTP_CLIENT_IP'];
			    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			    }
			 
			    return $ip;
			}
			function cart(){
				$db=new Mysqli('localhost','root','','Ecommerce');
				$sql="SELECT * FROM `cart`";
			}
			function addtocart(){
				$id_add= getIp();
				$pro_id=$_GET['pro_id'];
				
				$db=new MYsqli('localhsot','root','','Ecommerce');
				$sql="INSERT INTO `cart`(`product_id`, `ip_address`, `quantity`) VALUES ('$pro_id','$ip_add','4')";
				echo $sql;
			}
?> 