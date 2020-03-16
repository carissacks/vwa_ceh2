<?php include "header.php" ?>

<body>

    <div class="super_container">
        <!-- Header -->
        <?= include "header.php" ?>

        <div class="container single_product_container">
            <div class="blogs">
                <div class="container">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="text-center">Sign Up</h2>
                    <form class="w3-container" action="signup_form.php" method="post">
                        <label>Username</label>
                        <input class="w3-input" type="text" name="username" required>
                        <label>Full Name</label>
                        <input class="w3-input" type="text" name="full_name" required>
                        <label>Password</label>
                        <input class="w3-input" type="password" name="pass" required><br>
                        <input type="submit" value="Sign Up" class="btn btn-block">
                    </form><br>
                </div>
                <div class="col-md-3"></div>
                </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer" id="footer">
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
                            <div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a
                                    href="https://themewagon.com">ThemeWagon</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/custom.js"></script>
</body>