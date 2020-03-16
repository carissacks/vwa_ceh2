    <?= include "header.php" ?>

        <div class="container single_product_container">
            <div class="blogs">
                <div class="container">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="text-center">Login</h2>
                    <form class="w3-container" action="login_form.php" method="post">
                        <label>Username</label>
                        <input class="w3-input" type="text" name="username" required>
                        <label>Password</label>
                        <input class="w3-input" type="password" name="pass" required><br>
                        <input type="submit" value="Login" class="btn btn-block">
                    </form><br>
                    <div class="text-center"><a href="signup.php">Do not have an account? Register</a></div>
                </div>
                <div class="col-md-3"></div>
                </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <?php include "footer.php"?>
