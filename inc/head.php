			<div class='head_container'>
				<div class='header' id='header'>
					<img src='/Ecommerce/Images/banner.jpg' id='banner'>
					<a href='/Ecommerce/index.php'><img src='/Ecommerce/Images/logo.jpg' id='logo'></a>

				</div>
				<div class='navigation' id='navigation' name='navigation'>
					<ul id='nav_ul'>
						<li><a href='/Ecommerce/index.php' id='nav_li'>HOME</a></li>
						<li><a href='/Ecommerce/Customer/allproducts.php' id='nav_li'>All Products</a></li>
						<li><a href='.php' id='nav_li'>Laptops</a></li>
						<li><a href='.php' id='nav_li'>Tablets</a></li>
						<li><a href='.php' id='nav_li'>Mobiles</a></li>
						<li><a href='.php' id='nav_li'>Generators</a></li>
						<form action="/Ecommerce/Customer/result.php?$data=$_GET['data']" enctype='multipart/form-data' method='get' id='search_form'>
							<input type='text' style='line-height:30px' placeholder='Text for search' id='data' name='data'><button style='line-height:30px' name='search'>Search</button>
						</form>
						
					</ul>
				</div>
			</div>
