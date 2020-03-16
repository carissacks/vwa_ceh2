<?php include "header.php" ?>
<?php include "connect_db.php" ?>

<div class="container single_product_container">
    <h2>All History</h2>

    <table id="history" class="display table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Product Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT idHistory, u.full_name, p.product_name FROM history h 
                JOIN product p ON h.idProduct = p.idProduct 
                JOIN user u ON h.idUser = u.idUser";
                $count = 1;
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $count++ . "</td><td>" . $row["full_name"]. "</td><td>" . $row["product_name"]. "</td></tr>";
                }
            ?>
            
        </tbody>
    </table>
</div>

<?php include "footer.php" ?>