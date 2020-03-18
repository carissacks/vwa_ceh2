<?php
include "header.php";
include "connect_db.php";
include "functions.php"
?>

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
				<form action="index.php" method="POST">
					<div class="search_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
						<input id="search_item" type="txt" name="search_item" placeholder="Search Item" required="required">
						<button id="search_submit" type="submit" class="search_submit_btn trans_300" value="Submit">Search</button>
					</div>
				</form>
			</div>
		</div>

		<?php
		if (isset($_COOKIE["SID"])) {
			echo '<div class="card"><div class="card-header">Balance Account</div><div class="card-body">';
			echo '<blockquote class="blockquote mb-0"><p class="text-center">';

			// $sid = base64_decode(base64_decode($_COOKIE["SID"]));
			// $array = explode(';', $sid, 3);
			// $username = $array[1];

			// $sql = "SELECT user_balance FROM user WHERE username = '$username'";
			// $balance = $conn->query($sql);
			// foreach ($balance as $row) {
			// 	$balance = $row["user_balance"];
			// }
			$balance = getBalance($conn);
			echo "Your Balance is : " . $balance;
			echo '</p></blockquote></div></div>';
		}
		?>
		<div class="row">
			<div class="col">
				<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

					<?php

					if (isset($_POST['search_item'])) {
						$search_item = $_POST['search_item'];
						$query = "SELECT * FROM product WHERE product_name LIKE '%$search_item%'";
					} else $query = "SELECT * FROM product";
					if ($products = $conn->query($query)) {
						if ($products->rowCount() > 0) {
							foreach ($products as $product) {
								echo "<div class='product-item'>";
								echo "<div class='product'>";
								echo "<div class='product_image'>";
								echo "<img src='images/products/$product[product_image]' alt=''>";
								echo "</div>";
								echo "<div class='product_info'>";
								echo "<h6 class='product_name'><a href='product_detail.php?idProduct=$product[idProduct]'>$product[product_name]</a></h6>";
								echo "<div class='product_price'>$$product[product_price].00</div>";
								echo "</div>";
								echo "</div>";
								echo "<div class='red_button detail_button'><a href='product_detail.php?idProduct=$product[idProduct]'>See Details</a></div>";
								echo "</div>";
							}
						} else echo "<p class='align-content-center'>No items found</p>";
					}
					?>
					</p>
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

<?php include "footer.php" ?>