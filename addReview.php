<?php
    include 'connect_db.php';

    if(isset($_COOKIE['SID'])){
        if(isset($_POST['submitReview'])){
            $idProduct = $_POST['idProduct'];
            $message = $_POST['reviewerMessage'];
            $cookie = $_COOKIE['SID'];
            $arrayCookie = explode(";",base64_decode(base64_decode($cookie)));
            $username = $arrayCookie[1];

            $query = "SELECT idUser FROM user WHERE username = '$username' LIMIT 1";
            $result = $conn->query($query);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $idUser = $row['idUser'];
                }
                $query = "INSERT INTO comment(idUser, idProduct, comment) VALUES($idUser, $idProduct, '$message')";
                $result = $conn->query($query);
            }
        }
    }
    header("location:product_detail.php?idProduct=".$idProduct);
?>