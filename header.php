<!DOCTYPE html>
<html lang="en">

<head>
    <title>VWA CEH2</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

    <div class="super_container">

        <!-- Header -->
        <header class="header trans_300">
            <!-- Main Navigation -->
            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="#">VWA<span>CEH2</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="index.php">Home</a></li>
                                    <?php
                                    require_once "connect_db.php";
                                    require_once "functions.php";
                                    if (isset($_COOKIE["SID"])) {
                                        // $sid = base64_decode(base64_decode($_COOKIE["SID"]));
                                        // $array = explode(';',$sid, 3);
                                        // $priv = $array[0];
                                        // $user = $array[1];
                                        // if($priv === "admin") echo '<li><a href="admin.php">Admin</a></li>';
                                        // else {
                                        //     $query = "SELECT idUser FROM user WHERE username = '$user' LIMIT 1";
                                        //     $result = $conn->query($query);
                                        //     if($result->rowCount() > 0){
                                        //         foreach($result as $row) {
                                        //             $idUser = $row['idUser'];             
                                        //         }
                                        //     }
                                        if (isAdmin()) echo '<li><a href="admin.php">Admin</a></li>';
                                        else {
                                            $idUser = getId($conn);
                                            echo '<li><a href="history.php">History</a></li>';
                                            echo '<li><a href="profile.php?id=' . $idUser . '">Profile</a></li>';
                                        }
                                        echo '<li><a href="logout.php">Logout</a></li>';
                                    } else {
                                        echo '<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>';
                                    }
                                    ?>
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

        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item"><a href="index.php">Home</a></li>
                    <?php
                    if (isset($_COOKIE["SID"])) {
                        // $sid = base64_decode(base64_decode($_COOKIE["SID"]));
                        // $array = explode(';',$sid, 3);
                        // $priv = $array[0];
                        // $user = $array[1];
                        // if($priv === "admin") echo '<li><a href="admin.php">Admin</a></li>';
                        // else {
                        //     $query = "SELECT idUser FROM user WHERE username = '$user' LIMIT 1";
                        //     $result = $conn->query($query);
                        //     if($result->rowCount() > 0){
                        //         foreach($result as $row) {
                        //             $idUser = $row['idUser'];             
                        //         }
                        //     }
                        if (isAdmin()) echo '<li><a href="admin.php">Admin</a></li>';
                        else {
                            echo '<li><a href="history.php">History</a></li>';
                            echo '<li><a href="profile.php?id=' . $idUser . '">Profile</a></li>';
                        }
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>