<?php
    include 'connect_db.php';

    echo "A";

    if(isset($_COOKIE['SID'])){
        echo "BA";
        if(isset($_POST['submitReview'])){
            echo "cBA";
            $idProduct = $_POST['idProduct'];
            $message = $_POST['reviewerMessage'];
            $cookie = $_COOKIE['SID'];
            echo $cookie;
            $arrayCookie = explode(";",base64_decode(base64_decode($cookie)));
            $username = $arrayCookie[1];

            $query = "SELECT idUser FROM user WHERE username = '$username' LIMIT 1";
            $result = $conn->query($query);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $idUser = $row['idUser'];
                }
                $query = "INSERT INTO comment(idUser, idProduct, comment) VALUES($idUser, $idProduct, $message)";
                $result = $conn->query($query);
            }
            echo "A";
            header("location:product_detail.php?idProduct=".$idProduct);            
        }
    }
?>