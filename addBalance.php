<?php
require_once 'connect_db.php';
require_once 'functions.php';

if (isset($_POST)) {
    $idUser = $_POST['idUser'];
    $nominal = $_POST['nominal'];

    $query = "UPDATE user SET user_balance = user_balance+$nominal WHERE idUser=$idUser";
    $result = $conn->query($query);
    header("Location: $base_url/admin.php?status=success");

}
else{
    header("Location: $base_url/admin.php?status=error");
}

?>