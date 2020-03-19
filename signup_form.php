<?php 
    require_once 'connect_db.php';
    require_once 'functions.php';
    
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $password = md5($_POST['pass']);
    
    $query = "INSERT INTO User(username, full_name, pass, role_id, user_balance) VALUES ('$username', '$full_name', '$password', 'guest', 0)";
    $result = $conn->query($query);

    if ($result == TRUE) {
        header("Location: $base_url/login.php");
    }else{
        header("Location: $base_url/signup.php");
    }

?>