<?php include "header.php";
require_once "connect_db.php";
require_once "functions.php"; 

if(!isAdmin()){
    header("location:$base_url");  
    // headToBase();
}
?>


<div class="container single_product_container">
    <div class="container  p-5 table-bordered">
        <h2>All History</h2>

        <table class="table mt-3">
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
                foreach($result as $row):
                    echo "<tr><td>" . $count++ . "</td><td>" . $row["full_name"]. "</td><td>" . $row["product_name"]. "</td></tr>";
                endforeach;
            ?>
            </tbody>
        </table>
    </div>
    <div class="container mt-5 p-5 table-bordered">
    <?php if(isset($_COOKIE['X'])):?>
        <?php if($_COOKIE['X']!=md5("admin")):?>
            <h2 class='text-danger'>Adding balance feature is currently unavailable.</h2>
            <h5 class='text-danger'>You can't fool us.</h5>
        <?php else:?>
            <h2>Add User Balance</h2>
            <form method="post" action="addBalance.php">
                <div class="row p-2">
                    <div class="form-group col-10 col-md-4 p-1">
                        <label for="idUser">Select user</label>
                        <select class="form-control text-dark" name="idUser" required>
                    <?php 
                        $sql = "SELECT idUser, full_name FROM user WHERE role_id='guest'";
                        $result = $conn->query($sql);
                        foreach($result as $row):
                            echo "<option value=".$row["idUser"].">" . $row["full_name"] . "</option>";
                        endforeach;
                    ?>
                        </select>
                    </div>
                    <div class="form-group col-10 col-md-4 p-1">
                        <label for="nominal">Balance nominal</label>
                        <input type="number" class="form-control text-dark" name="nominal" required>
                    </div>
                </div>
                <?php if(ISSET($_GET["status"])):
                    if($_GET["status"] == "success"):?>
                    <div class="alert alert-success col-10 col-md-8">User balance is updated.</div>
                <?php else:?>
                    <div class="alert alert-danger col-10 col-md-8">Failed to update user balance.</div>
                <?php endif; endif;?>
                <div class="row pl-2">
                    <button type="submit" class="btn btn-primary p-2 col-1">Proceed</button>
                </div>
            </form>
        <?php endif;?>
        <?php else:?>
        <form method="post" action="addBalance.php"?>
            <div class="row pl-2 justify-content-center">
                <button type="submit" class="btn btn-primary p-2 col-6">Add user balance</button>
            </div>
        </form>
        <?php endif;?>

    </div>
</div>

<?php include "footer.php" ?>