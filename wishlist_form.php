<?php 
    include "connect_db.php";
    include "functions.php";

    $idUser = getId($conn);
    if(ISSET($_GET["id"])){
        $idProduct = $_GET["id"];
    }else {
        header("Location: $base_url");
    }

    $query = "INSERT INTO wishlist(idUser, idProduct) VALUES ('$idUser', '$idProduct')";
    $result = $conn->query($query);

    header("Location: $base_url/profile.php?id=$idUser");

?>