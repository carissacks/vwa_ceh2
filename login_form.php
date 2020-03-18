<?php 
    include 'connect_db.php';
    
    $username = $_POST['username'];
    $password = md5($_POST['pass']);
    
    $query = "SELECT * FROM user WHERE username='$username' and pass='$password'";
    $result = $conn->query($query);

    if($result->rowCount() > 0){
        foreach ($result as $row) {
            $cookie = $row["role_id"] . ";" . $row["username"] . ";UTS_CEH2";
        }
        setcookie("SID", base64_encode(base64_encode($cookie)), time()+ 86400);
        header("location:http://localhost/vwa_ceh2/index.php");
    }else{
        header("location:http://localhost/vwa_ceh2/login.php?status=error");	
    }
?>