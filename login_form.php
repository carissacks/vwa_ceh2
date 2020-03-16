<?php 
    include 'connect_db.php';
    
    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    $query = mysql_query("select * from user where username='$username' and pass='$password'");
    $cek = mysql_num_rows($query);
    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:http://localhost/vwa_ceh2/index.php");
    }else{
        header("location:http://localhost/vwa_ceh2/login.php");	
    }
?>