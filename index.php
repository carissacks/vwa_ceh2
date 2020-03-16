<!-- <!DOCTYPE html>
<html lang="en">

<head>
	<title>Colo Shop</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php ##include "css.php" ?>
</head>




<body>

	<div class="super_container"> -->

		<!-- Header -->
		<?php include "header.php" ?>

		<!-- Slider -->

		<div class="main_slider" style="background-image:url(images/slider_1.jpg)">
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h6>Spring / Summer Collection 2017</h6>
							<h1>Get up to 30% Off New Arrivals</h1>
							<div class="red_button shop_now_button"><a href="#products">shop now</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- New Arrivals -->

		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>Let's Start Shopping</h2>
						</div>
					</div>
				</div>
				<div class="row justify-content-center my-4 search_box">
					<div class="col-lg-6">
						<form action="post">
							<div class="search_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
								<input id="search_item" type="txt" placeholder="Search Item" required="required">
								<button id="search_submit" type="submit" class="search_submit_btn trans_300" value="Submit">Search</button>
							</div>
						</form>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

							<?php
							include "connect_db.php";

							$query = "SELECT * FROM product";
							$products = $conn->query($query);

							foreach ($products as $product) {
								echo "<div class='product-item'>";
								echo "<div class='product'>";
								echo "<div class='product_image'>";
								echo "<img src='images/products/$product[product_image]' alt=''>";
								echo "</div>";
								echo "<div class='product_info'>";
								echo "<h6 class='product_name'><a href='product_detail.php'>$product[product_name]</a></h6>";
								echo "<div class='product_price'>$$product[product_price].00</div>";
								echo "</div>";
								echo "</div>";
								echo "<div class='red_button detail_button'><a href='product_detail.php'>See Details</a></div>";
								echo "</div>";
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Benefit -->

		<div class="benefit">
			<div class="container mb-5">
				<div class="row benefit_row">
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>free shipping</h6>
								<p>Suffered Alteration in Some Form</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>cach on delivery</h6>
								<p>The Internet Tend To Repeat</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>45 days return</h6>
								<p>Making it Look Like Readable</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>opening all week</h6>
								<p>8AM - 09PM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Footer -->
		<!-- <footer class="footer" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_nav_container">
							<div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div> -->

	<!-- JS -->
	<?php include "footer.php" ?>

<!-- </body> -->

<!-- </html> -->