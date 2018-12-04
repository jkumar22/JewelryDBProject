<?php

include('../DBConnection/DBconnection.php');

$userID = $_SESSION['userID']; //User ID

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='user'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Your Awesome Jewelry Purchase History!</h2>
        <p>Isn't clicking check out Fun?!</p>
        <hr>
        <div style="width:100%; display: flex;">
            <?php
                $sqlString = "SELECT * FROM CART JOIN PRODUCT WHERE CART.productID = PRODUCT.productID and CART.userID = '$userID' and CART.isPurchasedFlag = 1";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {
                    $x = 0;
                    while ($rows = $quarrySQL->fetch_assoc())
                    {
                        $x = $x + 1; 
                        if($x == 4){
                            $x = 1;
            ?>
                            </div></br>
                            <div style="width:100%; display: flex;">
            <?PHP
                        }
                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        $dateOfPurchase = $rows['dateOfPurchase'];
            ?>
                <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                    <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                    <p><b>Price:$ <?=$price?> </b></p>
                    <p>Purchased on: <?=$dateOfPurchase?></p>
                    <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Buy Again"></a>
                </div>
            <?php }}?>
        </div>
        <hr>
        <h3>Thank You For Being Our Royal Customer</h3>

    </div>
</form>
</body>
</html>