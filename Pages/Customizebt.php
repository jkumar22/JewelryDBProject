<?php

include('../Process/AddToCart_Process.php');

$productID = $price = $inventory = $inventoryDate = $stock = $result = $Image = "";

?>

    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
    </head>

    <body>
    <?php $currentPage ='home'; include 'header.php'; ?>
    <body background="../Images/bg4.jpg">

    <form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
        <div class="container">

            <h2>Customize your favourites here!</h2>
            <hr>


            <h3><U>BABY BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM BABYBRACELETS LEFT JOIN PRODUCT ON BABYBRACELETS.productID = PRODUCT.productID;";
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
                            <p><h3>Size?</h3>
                            <select name="Size">
                                <option value="">Select...</option>
                                <option value="S">S(0-24 months)</option>
                                <option value="M">M(2+)</option>
                                <option value="L">(3+</option></select>
                            <label for="color"><b>Color</b></label>
                            <select name="color" id="color">
                                <option value="" selected="selected">Select</option>
                                <option value="">Gold</option>
                                <option value="">Silver</option></select>
                            <label for="BabyName"><b>Baby's Name</b></label>
                            <input type="text" placeholder="Enter Baby's Name" name="BabyName" autofocus required>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>MOTHER'S BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM MOTHERBRACELETS LEFT JOIN PRODUCT ON MOTHERBRACELETS.productID = PRODUCT.productID;";
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
                            <p><h3>Size?</h3>
                            <select name="Size">
                                <option value="">Select...</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option></select>
                            <label for="birthstone"><b>Need Birthstone?</b></label>
                            <select name="birthstone" id="birthstone">
                                <option value="" selected="selected">Select</option>
                                <option value="">Yes</option>
                                <option value="">No</option></select>
                            <label for="color"><b>Color</b></label>
                            <select name="color" id="color">
                                <option value="" selected="selected">Select</option>
                                <option value="">Blue</option>
                                <option value="">Red</option>
                                <option value="">White</option>
                                <option value="">Green</option></select>
                            <label for="shape"><b>Shape</b></label>
                            <select name="shape" id="shape">
                                <option value="" selected="selected">Select</option>
                                <option value="">circle</option>
                                <option value="">oval</option>
                                <option value="">triangle</option>
                                <option value="">random</option>
                            </select>
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>



            <h3><U>GRAND MOTHER'S BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM GMBRACELETS LEFT JOIN PRODUCT ON GMBRACELETS.productID = PRODUCT.productID;";
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
                            <img src="<?= $Image ?>"  width="100" height="100" align="middle" > <p><h3>Size</h3>
                            <select name="Size">
                                <option value="">Select...</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option></select>
                            <label for="color"><b>GemColor</b></label>
                            <select name="color" id="color">
                                <option value="" selected="selected">Select</option>
                                <option value="">Blue</option><option value="">Red</option>
                                <option value="">Green</option>
                                <option value="">Cyan</option><option value="">Brown </option>
                            </select>
                            <p><b>Price:$ <?=$price?> </b></p>
                            <a href="Cart.php?secureVar=<?= $productID ?>"><input type="button" value="Add to Cart"></a>
                        </div>
                    <?php }}?>
            </div>

            <h3><U>WEDDING BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM WEDDINGBRACELETS LEFT JOIN PRODUCT ON WEDDINGBRACELETS.productID = PRODUCT.productID;";
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
                            <p><h3>Size</h3>
                            <select name="Size">
                                <option value="">Select...</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                            </select>
                            <label for="strands"><b>Strands</b></label>
                            <select name="strands" id="strands">
                                <option value="" selected="selected">Select</option>
                                <option value="">one</option>
                                <option value="">two</option>
                                <option value="">three</option>

                            </select>
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