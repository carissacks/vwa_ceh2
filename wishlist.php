<?php
require_once "functions.php";
require_once "connect_db.php";

$id = getId($conn);

?>

    <h2 class="text-center my-3">Wishlist</h2>
    <div class="row justify-content-center">
        <div class="col-12">
            <?php

            $sql = "SELECT idWishlist, p.product_name FROM wishlist w 
                JOIN product p ON w.idProduct = p.idProduct 
                WHERE idUser = $id";
            $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                echo '<table class="table">';
                echo "<tr>
                <th>No. </th>
                <th>Product</th>
                </tr>";
                // output data of each row
                $count = 1;
                foreach ($result as $row) {
                    echo "<tr><td>" . $count++ . "</td><td>" . $row["product_name"] .  "</td></tr>";
                }
            } else {
                echo '<div class="card">';
                echo '<h5 class="card-header">Wishlist</h5>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title center">Wishlistnya masih kosong :(</h5>';
                echo '</div></div>';
            }
            echo "</table>";
            ?>
        </div>
    </div>