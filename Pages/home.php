<?php

include('../DBConnection/DBconnection.php');

$productID = $price = $inventory = $inventoryDate = $stock = $result = $Image = "";

?>

    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
    </head>

    <body background="../Images/bg4.jpg">
    <?php $currentPage ='home'; include 'header.php'; ?>

    <form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
        <div class="container">

            <h2>Welcome to Awesome Jewellery Home!</h2>
            <p>Buy the best Jewellery in the world.</p>
            <hr>
            <h3><U>EARRINGS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM EARRINGS LEFT JOIN PRODUCT ON EARRINGS.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>


            <h3><U>NECKLACES</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM NECKLACES LEFT JOIN PRODUCT ON NECKLACES.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>" width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>BABY BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM BABYBRACELETS LEFT JOIN PRODUCT ON BABYBRACELETS.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Customizebracelet.php?secureVar1=<?= $productID ?> & secureVar2=BABYBRACELETS"><input type="button" class="customizebt" value="Customize"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>MOTHER'S BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM MOTHERBRACELETS LEFT JOIN PRODUCT ON MOTHERBRACELETS.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Customizebracelet.php?secureVar1=<?= $productID ?> & secureVar2=MOTHERBRACELETS"><input type="button" class="customizebt" value="Customize"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>SETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM SETS LEFT JOIN PRODUCT ON SETS.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>Grand Mother's BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM GMBRACELETS LEFT JOIN PRODUCT ON GMBRACELETS.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Customizebracelet.php?secureVar1=<?= $productID ?> & secureVar2=GMBRACELETS"><input type="button" class="customizebt" value="Customize"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>WEDDING BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM WEDDINGBRACELETS LEFT JOIN PRODUCT ON WEDDINGBRACELETS.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {

                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Customizebracelet.php?secureVar1=<?=$productID?>&secureVar2=WEDDINGBRACELETS"><input type="button" class="customizebt" value="Customize"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>EVERYDAYSETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM EVERYDAYJEWELRY LEFT JOIN PRODUCT ON EVERYDAYJEWELRY.productID = PRODUCT.productID and PRODUCT.stock >0;";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {
                    $x = 3;
                    while ($rows = $quarrySQL->fetch_assoc())
                    {
                        $Image = "..\Images\\" . $rows['image'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>

            </br></br></br></br>
        </div>
    </form>
    </body>
    </html>


<?php

$productID = $price = $inventory = $inventoryDate = $stock = $result = "";


function quarryProductInfo($value)
{

    $sqlprod = "SELECT * FROM $value";
    $prodSQL = $dbCon ->query($sqlprod);

    if($prodSQL ->num_rows != 0)
    {
        while ($rows = $prodSQL->fetch_assoc())
        {
            $productID = $rows['productID'];
            $price = $rows['price'];
            $inventory = $rows['inventory'];
            $inventoryDate = $rows['inventoryDate'];
            $stock = $rows['stock'];
        }
    }
}

?>