<?php    
    function getId($conn) {
        if(isset($_COOKIE['SID'])){
            $cookie = $_COOKIE['SID'];
            $arrayCookie = explode(";",base64_decode(base64_decode($cookie)));
            $username = $arrayCookie[1];
            $query = "SELECT idUser FROM user WHERE username = '$username' LIMIT 1";
            $result = $conn->query($query);

            if($result->rowCount() > 0){
                foreach($result as $row) {
                    $idUser = $row['idUser'];             
                }
            }
        }else{
            $idUser= 0;
        }
        return $idUser;
    };

    function getUsername($conn){
        if(isset($_COOKIE['SID'])){
            $cookie = $_COOKIE['SID'];
            $arrayCookie = explode(";",base64_decode(base64_decode($cookie)));
            $username = $arrayCookie[1];
        } else{
            $username= "";
        }
        return $username;
    };

    function getBalance($conn) {
        if(isset($_COOKIE['SID'])){
            $cookie = $_COOKIE['SID'];
            $arrayCookie = explode(";",base64_decode(base64_decode($cookie)));
            $username = $arrayCookie[1];
            $query = "SELECT user_balance FROM user WHERE username = '$username' LIMIT 1";
            $result = $conn->query($query);

            if($result->rowCount() > 0){
                foreach($result as $row) {
                    $balance = $row['user_balance'];             
                }
            }
        }else{
            $balance = 0;
        }
        return $balance;
    };
