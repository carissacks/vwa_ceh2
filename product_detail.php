<?php
include "header.php";
require_once 'connect_db.php';
require_once "functions.php";

$idUser = getId($conn);
$idProduct = $_GET['idProduct'];

$query = "SELECT product_name, product_desc, product_image, product_price FROM product WHERE idProduct = $idProduct LIMIT 1";
$result = $conn->query($query);

if ($result->rowCount() > 0) {
	foreach ($result as $row) {
		$productName = $row['product_name'];
		$productDesc = $row['product_desc'];
		$productImage = $row['product_image'];
		$productPrice = $row['product_price'];
	}
} else {
	$productName = "No Product With Such Id";
	$productDesc = "No Product With Such Id";
	$productImage = "";
	$productPrice = "-";
}

$query = "SELECT User.full_name AS FullName, Review.comment AS ReviewerComment FROM comment AS Review INNER JOIN user User ON User.idUser = Review.idUser WHERE idProduct = $idProduct";
$resultReview = $conn->query($query);

$sql = "SELECT user_balance FROM User WHERE idUser = $idUser LIMIT 1";
$balances = $conn->query($sql);
foreach($balances as $row){
	$user_balance = $row["user_balance"];
}

?>

<div class="container single_product_container">
	<div class="row">
		<div class="col">

			<!-- Breadcrumbs -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i>
						<?php echo $productName; ?></li>
				</ul>
			</div>

		</div>
	</div>

	<div class="row justify-content-around">
		<div class="col-lg-4">
			<div class="single_product_pics">
				<div class="row">
					<div class="col-lg-12 image_col order-lg-2 order-1">
						<div class="single_product_image">
							<div class="single_product_image_background" style="background-image:url(images/products/<?php echo $productImage; ?>)"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="product_details">
				<div class="product_details_title">
					<h2><?php echo $productName; ?></h2>
					<p><?php echo $productDesc; ?></p>
				</div>
				<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
					<span class="ti-truck"></span><span>free delivery</span>
				</div>
				<div class="product_price mt-4">$<?php echo $productPrice; ?></div>
				<ul class="star_rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				</ul>
				<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
					<div id="buyItem" class="red_button add_to_cart_button" style="color: white">Buy Item</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Tabs -->

<div class="tabs_section_container">

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="tabs_container">
					<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
						<li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
						<li class="tab" data-active-tab="tab_3"><span>Reviews</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">

				<!-- Tab Description -->

				<div id="tab_1" class="tab_container active">
					<div class="row justify-content-center">
						<div class="col-10">
							<p>
								<?php echo $productDesc; ?>
							</p>
						</div>
					</div>
				</div>

				<!-- Tab Reviews -->

				<div id="tab_3" class="tab_container">
					<div class="row justify-content-center">

						<!-- User Reviews -->

						<div class="col-10 col-md-7 reviews_col">
							<div class="tab_title reviews_title">
								<h4>Reviews</h4>
							</div>

							<!-- User Review -->
							<?php
							if ($resultReview->rowCount() > 0) {
								while ($row = $resultReview->fetch()) {
									echo "<div class='user_review_container d-flex flex-column flex-sm-row table-bordered'>";
									echo "<div class='review'>";
									echo "<div class='user_name mt-2'>$row[FullName]</div>";
									echo "<p>$row[ReviewerComment]</p>";
									echo "</div>";
									echo "</div>";
								}
							}

							?>
						</div>

						<!-- Add Review -->

						<div class="col-10 col-md-4 add_review_col">
							<div class="add_review">
								<form id="review_form" action="addReview.php" method="post">
									<input type="text" name="idProduct" value="<?php echo $idProduct; ?>" hidden>
									<div>
										<h1>Add Review</h1>
									</div>
									<div>
										<textarea id="reviewerMessage" class="input_review" name="reviewerMessage" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
									</div>
									<div class="text-left text-sm-right">
										<button id="review_submit" type="submit" name="submitReview" class="red_button review_submit_btn trans_300" value="Submit">Submit</button>
									</div>
								</form>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<!-- Benefit -->

<div class="benefit mb-5">
	<div class="container">
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

<div id="myModal" class="modal">

	<div class="container-fluid">
		<div class="modal-content">
			<div class="modal-header" style="padding: 2%">
				<h2 style="color:white">Buy This Product</h2>
				<span class="close">&times;</span>
			</div>
			<div class="modal-body">
				<form class="form" action="buy_item.php" method="post">
					<input type="hidden" name="idProduct" value="<?php echo $idProduct; ?>">
					<div class="form-group col-8">
						<b for="Payment Type">Payment Type</b><br>
						<!-- <select id="payment" name="paymentMethod" require>
							<option value="1" id="optionCardNumber">Credit Card Number</option>
							<option value="2" id="optionUserBalance">User Balance</option>
						</select> -->
						<div class="radio">
							<input id="optionCardNumber" value="credit" type="radio" name="radioOption" style="transform: scale(1.3)"><label style="margin-left: 2%">Credit Card Number</label>
						</div>
						<div class="radio">
							<input id="optionUserBalance" value="balance" type="radio" name="radioOption" style="transform: scale(1.3)"><label style="margin-left: 2%">User Balance</label>
						</div>
					</div>
					<div class="form-group col-8">
						<div id="formCardNumber">
							<b for="User Address">Input Credit Card Number</b><br>
							<input id="cardNumber" class="input form-control" type="text" name="cardNumber">
						</div>
						<div id="formUserBalance">
							<b for="User Address">Your User Balance</b><br>
							<input id="userBalance" class="input form-control" type="text" name="userBalance" value="<?php echo $user_balance ?>" disabled>
						</div>
					</div>
					<div class="form-group col-8">
						<b for="User Address">Shipping Address</b><br>
						<input id="address" class="input form-control" type="text" name="userAddress" required>
					</div>
					<div class="form-group col-12 text-right">
						<input class="btn btn-success" type="submit" name="addTransaction" value="Buy Product">
					</div>
				</form>
			</div>``
		</div>
	</div>
</div>

<!-- Footer -->
<?php include "footer.php" ?>

<script>
	$(document).ready(function() {
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("buyItem");
		var span = document.getElementsByClassName("close")[0];

		$('#formCardNumber').hide();
		$('#formUserBalance').hide();

		btn.onclick = function() {
			modal.style.display = "block";
		}
		span.onclick = function() {
			modal.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		$('#optionCardNumber').click(function() {
			$('#formCardNumber').show();
			$('#formUserBalance').hide();
		});

		$('#optionUserBalance').click(function() {
			$('#formCardNumber').hide();
			$('#formUserBalance').show();
		});
	});
</script>