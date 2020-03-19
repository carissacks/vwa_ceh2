<?php 
    require_once 'connect_db.php';
    require_once 'functions.php';
    // require_once "functions.php";

    
    if(isset($_POST['username'])){
        var_dump("ok");
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
        
        $query = "SELECT * FROM user WHERE username='$username' and pass='$password'";
        $result = $conn->query($query);

        if($result->rowCount() > 0){
            foreach ($result as $row) {
                $cookie = $row["role_id"] . ";" . $row["username"] . ";UTS_CEH2";
            }
            setcookie("SID", base64_encode(base64_encode($cookie)), time()+ 86400);
            header("Location: $base_url");
        }else{
            header("Location: ".$base_url."/login.php?status=error");	
        }
    }else{
            header("Location: ".$base_url."/login.php?status=error");	
        }
?>