<?php 
    include 'connect_db.php';
    
    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    $query = "SELECT * FROM user WHERE username='$username' and pass='$password'";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:http://localhost/vwa_ceh2/index.php");
    }else{
        header("location:http://localhost/vwa_ceh2/login.php?status=error");	
    }
?>