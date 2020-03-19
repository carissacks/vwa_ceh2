<?php 
    include "header.php";
    require_once "functions.php";
    require_once "connect_db.php";
    
    if(isLogin()){
        if(ISSET($_GET['id'])){
            $id=$_GET['id'];
            if($id == null){
                header("Location: http://localhost/vwa_ceh2");
            }
        } else{
            header("Location: http://localhost/vwa_ceh2");
        }
    }else{
        header("Location: http://localhost/vwa_ceh2");
    }
    
?>

<div class="container single_product_container">
    <h2 class="text-center">User's Profile</h2>
    <div class="row justify-content-center">
        <div class="col-7">
            <?php
                        
                $sql = "SELECT *
                FROM user 
                WHERE idUser = $id";
                $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                foreach($result as $row) {
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "</tr><td>ID User</td>";
                    echo "<td>" . $row["idUser"] . "</td>";
                    echo "<tr>";
                    echo "</tr><td>Username</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<tr>";
                    echo "</tr><td>Full Name</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<tr>";
                    echo "</tr><td>User Balance</td>";
                    echo "<td>" . $row["user_balance"] . "</td>";
                    echo "</tr>";
                    echo "</table>";
                }
            } 
            ?>
        </div>
    </div>
</div>

<?php include "footer.php" ?> 