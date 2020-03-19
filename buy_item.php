<?php
    require_once "connect_db.php";
    require_once "functions.php";

    if(isset($_POST['radioOption'])){
        $option = $_POST['radioOption'];
    }

    $idProduct = $_POST["idProduct"];
    $address = $_POST["userAddress"];

    $idUser = getId($conn);

    $sql = "SELECT user_balance FROM User WHERE idUser = $idUser LIMIT 1";
        $balances = $conn->query($sql);
        foreach($balances as $row){
            $balance = $row["user_balance"];
    }

    $sql2 = "SELECT product_price FROM Product WHERE idProduct = $idProduct LIMIT 1";
    $product_prices = $conn->query($sql2);
    foreach($product_prices as $row){
        $product_price = $row["product_price"];
    }

    if($option == "credit"){
        $card_num = $_POST["cardNumber"];
        if($card_num == null) echo "gada ccnya mana bisa bayar! Jangan curang kak.";
        else{
            $query = "INSERT INTO History(idUser, idProduct, shipping_address) VALUES ('$idUser', '$idProduct', '$address')";
            $result = $conn->query($query);
            $query2 = "UPDATE User SET credit_card = '$card_num' WHERE idUser = $idUser";
            $result2 = $conn->query($query2);
            if ($result == TRUE && $result2 == TRUE) {
                header("Location: ".$base_url."/history.php");
            }else{
                header("Location: $base_url");
            }
        }
        
    }else {
        if($balance >= $product_price){
            $query = "INSERT INTO History(idUser, idProduct, shipping_address) VALUES ('$idUser', '$idProduct', '$address')";
            $result = $conn->query($query);
            $last_balance = $balance - $product_price;
            $query2 = "UPDATE User SET user_balance = '$last_balance' WHERE idUser = $idUser";
            $result2 = $conn->query($query2);
            if ($result == TRUE && $result2 == TRUE) {
                header("Location :".$base_url."/history.php");
            }else{
                header("Location: $base_url");
            }
        }else {
            echo "saldonya ga cukup kak :(";
        }
    }
    
?>