<!-- <!DOCTYPE html>
<html lang="en">

<head>
	<title>Single Product</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
</head>

<body>

	<div class="super_container"> -->


		<!-- <header class="header trans_300">


			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<a href="#">colo<span>shop</span></a>
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">
									<li><a href="index.html">home</a></li>
									<li><a href="#">shop</a></li>
								</ul>
								<ul class="navbar_user">
									<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								</ul>
								<div class="hamburger_container">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</header>

		<div class="fs_menu_overlay"></div>


		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="#">shop</a></li>
					<li class="menu_item"><a href="#">promotion</a></li>
					<li class="menu_item"><a href="#">pages</a></li>
					<li class="menu_item"><a href="#">blog</a></li>
					<li class="menu_item"><a href="#">contact</a></li>
				</ul>
			</div>
		</div> -->

		<?php include "header.php" ?>

		<div class="container single_product_container">
			<div class="row">
				<div class="col">

					<!-- Breadcrumbs -->

					<div class="breadcrumbs d-flex flex-row align-items-center">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a>
							</li>
							<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single
									Product</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="single_product_pics">
						<div class="row">
							<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
								<div class="single_product_thumbnails">
									<ul>
										<li><img src="images/single_1_thumb.jpg" alt=""
												data-image="images/single_1.jpg"></li>
										<li class="active"><img src="images/single_2_thumb.jpg" alt=""
												data-image="images/single_2.jpg"></li>
										<li><img src="images/single_3_thumb.jpg" alt=""
												data-image="images/single_3.jpg"></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-9 image_col order-lg-2 order-1">
								<div class="single_product_image">
									<div class="single_product_image_background"
										style="background-image:url(images/single_2.jpg)"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="product_details">
						<div class="product_details_title">
							<h2>Pocket cotton sweatshirt</h2>
							<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis.
								Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
						</div>
						<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
							<span class="ti-truck"></span><span>free delivery</span>
						</div>
						<div class="product_price mt-4">$495.00</div>
						<ul class="star_rating">
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
						</ul>
						<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
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
							<ul
								class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
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
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis ultricies justo, non vulputate ex feugiat porta. Nulla malesuada nisi in mi elementum, a congue urna congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer a aliquet ipsum. Praesent ut arcu non quam facilisis eleifend et ornare orci. Vivamus rhoncus diam at massa bibendum, ac condimentum diam vehicula. Aenean enim ipsum, venenatis vel porta quis, gravida a massa. Vivamus consequat lacinia sapien, vel tempor lorem mollis ac. Quisque feugiat commodo venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non urna at felis hendrerit vehicula. Duis feugiat dapibus tempor.
									Nullam dapibus in erat ac elementum. Morbi laoreet sapien quam, nec faucibus ligula commodo vitae. Praesent lacus augue, placerat et felis quis, rutrum vehicula sem. Sed sagittis vitae orci ac blandit. Nullam at felis luctus libero pharetra varius. Aenean vel nisl consequat, sodales tellus non, lacinia risus. Mauris scelerisque eros vel odio fermentum cursus. Mauris sit amet sollicitudin arcu. Cras rutrum lorem sollicitudin erat mattis malesuada. Maecenas posuere magna sed hendrerit pretium. Duis pellentesque est sodales risus condimentum luctus. In sit amet blandit nunc.
									</p>
								</div>
							</div>
						</div>

						<!-- Tab Additional Info -->

						<div id="tab_2" class="tab_container">
							<div class="row">
								<div class="col additional_info_col">
									<div class="tab_title additional_info_title">
										<h4>Additional Information</h4>
									</div>
									<p>COLOR:<span>Gold, Red</span></p>
									<p>SIZE:<span>L,M,XL</span></p>
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

									<div class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<div class="review_date">27 Aug 2016</div>
											<div class="user_name">Brandon William</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>

									<!-- User Review -->

									<div class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<div class="review_date">27 Aug 2016</div>
											<div class="user_name">Brandon William</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>

								<!-- Add Review -->

								<div class="col-10 col-md-4 add_review_col">

									<div class="add_review">
										<form id="review_form" action="post">
											<div>
												<h1>Add Review</h1>
												<input id="review_name" class="form_input input_name" type="text"
													name="name" placeholder="Name*" required="required"
													data-error="Name is required.">
												<input id="review_email" class="form_input input_email" type="email"
													name="email" placeholder="Email*" required="required"
													data-error="Valid email is required.">
											</div>
											<div>
												<h1>Your Rating:</h1>
												<ul class="user_star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
												<textarea id="review_message" class="input_review" name="message"
													placeholder="Your Review" rows="4" required
													data-error="Please, leave us a review."></textarea>
											</div>
											<div class="text-left text-sm-right">
												<button id="review_submit" type="submit"
													class="red_button review_submit_btn trans_300"
													value="Submit">submit</button>
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

		<!-- Footer -->
		<?php include "footer.php" ?>

		<!-- <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div
							class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div
							class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
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
							<div class="cr">©2018 All Rights Reserverd. This template is made with <i
									class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp;
								distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="js/single_custom.js"></script>
</body>

</html> -->