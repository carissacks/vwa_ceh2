<!-- css -->
<?php include "css.php" ?>
<!-- JS -->
<?php include "js.php" ?>

<?php 

    if(ISSET($_GET["id"])){
        $id = $_GET["id"];
    }else {
        header("Location: http://localhost/vwa_ceh2");
    }

?>

<div class="super_container">

    <!-- Header -->
    <?php include "header.php" ?>

    <div class="container single_product_container">
        
        
            <?php
                include "connect_db.php";
                $sql = "SELECT idHistory, u.full_name, p.product_name FROM history h 
                        JOIN product p ON h.idProduct = p.idProduct 
                        JOIN user u ON h.idUser = u.idUser
                        WHERE u.idUser = $id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<table class="table">';
                    echo "<tr>
                    <th>No. </th>
                    <th>Full_name</th>
                    <th>Product</th>
                    </tr>";
                    // output data of each row
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $count++ . "</td><td>" . $row["full_name"]. "</td><td>" . $row["product_name"]. "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo '<div class="card">';
                    echo '<h5 class="card-header">History</h5>';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title center">Belanja dulu sana!</h5>';
                    echo '</div></div>';
                }
                $conn->close();

            ?>
        
    </div>

    <!-- Footer -->
    <?php include "footer.php" ?>

</div>