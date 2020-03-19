<?php
require_once 'connect_db.php';
require_once 'functions.php';

$idUser = getId($conn);

$message = $_POST['reviewerMessage'];
$idProduct = $_POST['idProduct'];

$query = "INSERT INTO comment(idUser, idProduct, comment) VALUES ($idUser, $idProduct, '$message')";
$result = $conn->query($query);
header("Location: $base_url/product_detail.php?idProduct=" . $idProduct);


// if(isset($_COOKIE['SID'])){
//     if(isset($_POST['submitReview'])){
//         $idProduct = $_POST['idProduct'];
//         $message = $_POST['reviewerMessage'];
//         $cookie = $_COOKIE['SID'];
//         $arrayCookie = explode(";",base64_decode(base64_decode($cookie)));
//         $username = $arrayCookie[1];

//         $query = "SELECT idUser FROM user WHERE username = '$username' LIMIT 1";
//         $result = $conn->query($query);

//         if($result->num_rows > 0){
//             while($row = $result->fetch_assoc()){
//                 $idUser = $row['idUser'];
//             }
//             $query = "INSERT INTO comment(idUser, idProduct, comment) VALUES($idUser, $idProduct, '$message')";
//             $result = $conn->query($query);
//         }
//     }
// }
