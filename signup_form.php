<?php 
    include 'connect_db.php';
    
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $password = md5($_POST['pass']);
    
    $query = "INSERT INTO User(username, full_name, pass, role_id, user_balance) VALUES ('$username', '$full_name', '$password', 'guest', 0)";
    $result = $conn->query($query);

    if ($result == TRUE) {
        header("location:http://localhost/vwa_ceh2/login.php");
    }else{
        header("location:http://localhost/vwa_ceh2/signup.php");
    }

?>