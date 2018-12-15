<?php
include('../DBConnection/DBconnection.php');

$sql = $dbCon ->query("SELECT * FROM USER");
$loginSQL = $dbCon ->query("SELECT * FROM LOGIN");
$ProductSQL = $dbCon ->query("SELECT * FROM PRODUCT");
$CartSQL = $dbCon ->query("SELECT * FROM CART");
$COMPLAINSQL = $dbCon ->query("SELECT * FROM COMPLAIN");




?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage = 'Registered User'; include 'header.php'; ?>

<form class="modal-content">
    <div class="container">
        <h2>Registered Users</h2>
        <p>List of awesome people</p>

        <form class="modal-content" action="RegisteredUserReport.php">

            <table id = "user_table" >
                <tr >
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Credit Card</th>
                    <th>Address1</th>
                    <th>Address2</th>
                    <th>City </th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Country</th>
                    <th>Date</th>
                    <th>Email Me?</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($sql ->num_rows != 0)
                {
                while ($rows = $sql->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['UserID'];?>">

                    <?php
                    $ID = $rows['userID'];
                    $Fname = $rows['fname'];
                    $Lame = $rows['lname'];
                    $Email = $rows['email'];
                    $CreditCard = $rows['creditCard'];
                    $Address1 = $rows['address1'];
                    $Address2 = $rows['address2'];
                    $City = $rows['city'];
                    $State = $rows['state'];
                    $Zip = $rows['zip'];
                    $Country = $rows['country'];
                    $Date = $rows['date'];
                    $markingEmailFlag = $rows['markingEmailFlag'];
                    ?>
                    <td><?php echo $ID?></td>
                    <td><?php echo $Fname?></td>
                    <td><?php echo $Lame?></td>
                    <td><?php echo $Email?></td>
                    <td><?php echo $CreditCard?></td>
                    <td><?php echo $Address1?></td>
                    <td><?php echo $Address2?></td>
                    <td><?php echo $City?></td>
                    <td><?php echo $State?></td>
                    <td><?php echo $Zip?></td>
                    <td><?php echo $Country?></td>
                    <td><?php echo ($Date)?></td>
                    <td><?php echo ($markingEmailFlag)?></td>
                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>
            </br>
            <hr>
            <h2>Login Table</h2>
            <p>List of user name and password</p>


            <table id = "user_table" >
                <tr >
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>AdminFlag</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($loginSQL ->num_rows != 0)
                {
                while ($rows = $loginSQL->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['UserID'];?>">

                    <?php
                    $ID = $rows['userID'];
                    $Email = $rows['email'];
                    $Passwords = $rows['password'];
                    $adminFlag = $rows['adminFlag'];
                    ?>
                    <td><?php echo $ID?></td>
                    <td><?php echo $Email?></td>
                    <td><?php echo $Password?></td>
                    <td><?php echo $adminFlag?></td>
                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>
            <hr>
            <h2>Product Table</h2>
            <p>List of products with appropriate info</p>


            <table id = "user_table" >
                <tr >
                    <th>ID</th>
                    <th>Price</th>
                    <th>Inventory</th>
                    <th>InventoryDate</th>
                    <th>stock</th>
                    <th>image</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($ProductSQL ->num_rows != 0)
                {
                while ($rows = $ProductSQL->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['productID'];?>">

                    <?php
                    $ID = $rows['productID'];
                    $Price = $rows['price'];
                    $Inventory = $rows['inventory'];
                    $InventoryDate = $rows['inventoryDate'];
                    $stock = $rows['stock'];
                    $image = $rows['image'];
                    ?>

                    <td><?php echo $ID?></td>
                    <td><?php echo $Price?></td>
                    <td><?php echo $InventoryDate?></td>
                    <td><?php echo $Inventory?></td>
                    <td><?php echo $stock?></td>
                    <td><?php echo $image?></td>
                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>

            <hr>
            <h2>Cart Table</h2>
            <p>List of products with appropriate info</p>


            <table id = "user_table" >
                <tr >
                    <th>Purchase ID</th>
                    <th>UserID</th>
                    <th>ProductID</th>
                    <th>Rating</th>
                    <th>Date</th>
                    <th>Is it Purchased</th>
                    <th>Option</th>
                    <th>Added Price</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($CartSQL ->num_rows != 0)
                {
                while ($rows = $CartSQL->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['purchaseID'];?>">

                    <?php
                    $purchaseID = $rows['purchaseID'];
                    $userID = $rows['userID'];
                    $productID = $rows['productID'];
                    $ratings = $rows['ratings'];
                    $dateOfPurchase = $rows['dateOfPurchase'];
                    $isPurchasedFlag = $rows['isPurchasedFlag'];
                    $Option = $rows['options'];
                    $addprice = $rows['addprice'];

                    ?>

                    <td><?php echo $purchaseID?></td>
                    <td><?php echo $userID?></td>
                    <td><?php echo $productID?></td>
                    <td><?php echo $ratings?></td>
                    <td><?php echo $dateOfPurchase?></td>
                    <td><?php echo $isPurchasedFlag?></td>
                    <td><?php echo $Option?></td>
                    <td><?php echo $addprice?></td>

                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>

            <hr>
            <h2>Feedback Table</h2>
            <p>User's feedback based on product info</p>


            <table id = "user_table" >
                <tr >
                    <th>Feedback ID</th>
                    <th>ProductID</th>
                    <th>Order Number</th>
                    <th>UserID</th>
                    <th>Description</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($COMPLAINSQL ->num_rows != 0)
                {
                while ($rows = $COMPLAINSQL->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['purchaseID'];?>">

                    <?php
                    $complainID = $rows['complainID'];
                    $productID = $rows['productID'];
                    $purchaseID = $rows['purchaseID'];
                    $userID = $rows['userID'];
                    $description = $rows['description'];

                    ?>

                    <td><?php echo $complainID?></td>
                    <td><?php echo $productID?></td>
                    <td><?php echo $purchaseID?></td>
                    <td><?php echo $userID?></td>
                    <td><?php echo $description?></td>

                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>

        </form>

    </Div>
</form>
</body>
</html>