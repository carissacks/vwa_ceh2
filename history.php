<?php 
    include "header.php";
    require_once "functions.php";
    require_once "connect_db.php";

    if(!isLogin()){
        header("Location: http://localhost/vwa_ceh2");
    }

    $id= getId($conn);

    ?>

<div class="container single_product_container" id="history">
    <h2 class="text-center my-3">History</h2>
    <div class="row justify-content-center">
        <div class="col-7">
            <?php
                        
                $sql = "SELECT idHistory, p.product_name FROM history h 
                JOIN product p ON h.idProduct = p.idProduct 
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
                foreach($result as $row) {
                    echo "<tr><td>" . $count++ . "</td><td>" . $row["product_name"]. "</td></tr>";
                }
            } else {
                echo '<div class="card">';
                echo '<h5 class="card-header">History</h5>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title center">Belanja dulu sana!</h5>';
                echo '</div></div>';
            }
            echo "</table>";
            ?>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php" ?>
