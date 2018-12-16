<?php

include('../DBConnection/DBconnection.php');

$size = $BabyName = $color=  $productID = $WhichProduct = "";
$userID = $_SESSION['userID']; //User ID


if (isset( $_GET['secureVar1'] ) && isset( $_GET['secureVar2'] ) )
{
    $productID = $_GET['secureVar1']; // ProductID
    $WhichProduct = $_GET['secureVar2'];
}


if (isset($_POST['addToCart']))
{
    $productID = $_POST['productID'];
    $WhichProduct = $_POST['WhichProduct'];
    $size = $_POST['size'];
    $color = $_POST['Bcolor'];
    $BabyName = "";
    $BabyName = $_POST['BabyName'];
    $addprice = substr($color, -3, 2);
    //$Option = "Size:" . $size . " Option1:" . $color . " " . $BabyName;
    $option1 = $size;
    $option2 = $color;
    $option3 = $BabyName;
    date_default_timezone_set("America/New_York");
    $dateOfPurchase = date("Y-m-d h:i:sa");

    $sql_addTwo = "INSERT INTO CART (userID, productID, dateOfPurchase, option1,option2,option3, addprice)
        VALUES ('$userID','$productID','$dateOfPurchase', '$option1', '$option2', '$option3', $addprice)";

    if (mysqli_query($dbCon, $sql_addTwo))
    {
        $sql = $dbCon ->query("UPDATE PRODUCT  SET stock = stock - 1 WHERE productID = '$productID'");
        echo $color;

        if($WhichProduct == "BABYBRACELETS") {
            if ($color == "Gold (+$05)") {
                $sql = $dbCon->query("UPDATE BABYBRACELETS  SET option1Stock = option1Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "Silver (+$07)") {
                echo "option2";
                $sql = $dbCon->query("UPDATE BABYBRACELETS  SET option2Stock = option2Stock - 1 WHERE productID = '$productID'");
            }
        }
        else if($WhichProduct == "GMBRACELETS") {
            if ($color == "Gold (+$80)") {
                $sql = $dbCon->query("UPDATE GMBRACELETS  SET option1Stock = option1Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "Silver (+$50)") {
                $sql = $dbCon->query("UPDATE GMBRACELETS  SET option2Stock = option2Stock - 1 WHERE productID = '$productID'");
            }
        }
        else if($WhichProduct == "WEDDINGBRACELETS") {
            if ($color == "1 Strand (+$20)")
            {
                $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option1Stock = option1Stock - 1 WHERE productID = '$productID'");
            }
            else if ($color == "2 Strands (+$40)") {
                $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option2Stock = option2Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "3 Strands (+$60)") {
                $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option3Stock = option3Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "4 Strands (+$80)") {
                $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option4Stock = option4Stock - 1 WHERE productID = '$productID'");
            }
        }
        else if($WhichProduct == "MOTHERBRACELETS") {
            if ($color == "Garnet (+$20)") {
                $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option1Stock = option1Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "Amethyst (+$30)") {
                $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option2Stock = option2Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "Aquamarine (+$50)") {
                $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option3Stock = option3Stock - 1 WHERE productID = '$productID'");
            }else if ($color == "Diamond (+$80)") {
                $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option4Stock = option4Stock - 1 WHERE productID = '$productID'");
            }
        }
        //header('Location: Cart.php');
    }
    else{
        echo  "Error: " . $sql_addTwo . "<br>" . mysqli_error($dbCon);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='home'; include 'header.php'; ?>

<form class="modal-content" method="post" style="width:50%" action= "Customizebracelet.php">
    <input type="hidden" name="productID" value="<?= $productID ?>"/>
    <input type="hidden" name="WhichProduct" value="<?= $WhichProduct ?>"/>
    <div class="container">

        <h2>Welcome to Awesome Jewellery Customization!</h2>
        <p>Customize the Jewellery as your Liking.</p>
        <hr>
        <?php if($WhichProduct == "BABYBRACELETS") { ?>
            <h3><U>BABY BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM BABYBRACELETS LEFT JOIN PRODUCT ON BABYBRACELETS.productID = PRODUCT.productID WHERE BABYBRACELETS.productID = '$productID';";
                $quarrySQL = $dbCon ->query($sqlString);

                if($quarrySQL ->num_rows != 0)
                {

                    while ($rows = $quarrySQL->fetch_assoc())
                    {
                        $Image = "..\Images\\" . $rows['image'];
                        $productName = $rows['pname'];
                        $productID = $rows['productID'];
                        $price = $rows['price'];
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
                        ?>
                        <div class="column";>
                            <img src="<?= $Image ?>"  width="200" height="200">
                            </br></br></br>
                            <label>Select a Size</label>
                            <select name="size">
                                <option value="S" <?= $size == 'S' ? ' selected="selected"' : "" ?>>S(0-24 months)</option>
                                <option value="M" <?= $size == 'M' ? ' selected="selected"' : "" ?>>M(2+)</option>
                                <option value="L" <?= $size == 'L' ? ' selected="selected"' : "" ?>>L(3+)</option></select>
                            </select>
                            <label>Pick a Color</label>
                            <select name="Bcolor">
                                <option value="Gold (+$05)"   <?= $color == 'Gold (+$05)' ? ' selected="selected"' : "" ?> >Gold (+$5)</option>
                                <option value="Silver (+$07)" <?= $color == 'Silver (+$07)' ? ' selected="selected"' : "" ?> >Silver (+$7)</option>
                            </select>
                            <label for="BabyName">Enter a Engraving</label>
                            <input type="text" placeholder="Enter Baby's Name" name="BabyName" value="<?= $BabyName ?>">
                            <p><b>Price:$ <?= $price ?> </b></p>
                            <button type="submit" name="addToCart" value="<?= $productID ?>" >Add to Cart</button>
                        </div>
                    <?php }}?>
            </div>
        <?php } ?>
        <?php if($WhichProduct == "MOTHERBRACELETS") { ?>
            <h3><U>MOTHER'S BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM MOTHERBRACELETS LEFT JOIN PRODUCT ON MOTHERBRACELETS.productID = PRODUCT.productID WHERE MOTHERBRACELETS.productID = '$productID';";
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
                        <div class="column";>
                            <img src="<?= $Image ?>"  width="200" height="200">
                            </br></br></br>
                            <label>Select a Size</label>
                            <select name="size">
                                <option value="S" <?= $size == 'S' ? ' selected="selected"' : "" ?>>Small</option>
                                <option value="M" <?= $size == 'M' ? ' selected="selected"' : "" ?>>Medium</option>
                                <option value="L" <?= $size == 'L' ? ' selected="selected"' : "" ?>>Large</option></select>
                            </select>
                            <label>Select a Birthstone</label>
                            <select name="Bcolor">
                                <option value="Garnet (+$20)"   <?= $color == 'Garnet (+$20)' ? ' selected="selected"' : "" ?>>Garnet (+$20)</option>
                                <option value="Amethyst (+$30)"   <?= $color == 'Amethyst (+$30)' ? ' selected="selected"' : "" ?>>Amethyst (+$30)</option>
                                <option value="Aquamarine (+$50)"   <?= $color == 'Aquamarine (+$50)' ? ' selected="selected"' : "" ?>>Aquamarine (+$50)</option>
                                <option value="Diamond (+$80)"   <?= $color == 'Diamond (+$80)' ? ' selected="selected"' : "" ?>>Diamond (+$80)</option>
                            </select>
                            <!--<label>Select a Birthstone Shape</label>
                            <select name="BabyName">
                                <option value="Round"   <?= $color == 'Round' ? ' selected="selected"' : "" ?>>Round</option>
                                <option value="Square"   <?= $color == 'Square' ? ' selected="selected"' : "" ?>>Square</option>
                                <option value="Ovals"   <?= $color == 'Ovals' ? ' selected="selected"' : "" ?>>Ovals</option>
                                <option value="Triangle"   <?= $color == 'Triangle' ? ' selected="selected"' : "" ?>>Triangle</option>
                            </select> -->
                            <p><b>Price:$ <?= $price ?> </b></p>
                            <button type="submit" name="addToCart" value="<?= $productID ?>" >Add to Cart</button>
                        </div>
                    <?php }}?>
            </div>
        <?php } ?>
        <?php if($WhichProduct == "GMBRACELETS") { ?>
            <h3><U>GRAND MOTHER'S BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM GMBRACELETS LEFT JOIN PRODUCT ON GMBRACELETS.productID = PRODUCT.productID WHERE GMBRACELETS.productID = '$productID';";
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
                        <div class="column";>
                            <img src="<?= $Image ?>"  width="200" height="200">
                            </br></br></br>
                            <label>Select a Size</label>
                            <select name="size">
                                <option value="S" <?= $size == 'S' ? ' selected="selected"' : "" ?>>Small</option>
                                <option value="M" <?= $size == 'M' ? ' selected="selected"' : "" ?>>Medium</option>
                                <option value="L" <?= $size == 'L' ? ' selected="selected"' : "" ?>>Large</option></select>
                            </select>
                            <label>Select a Metal</label>
                            <select name="Bcolor">
                                <option value="Gold (+$80)"   <?= $color == 'Gold (+$80)' ? ' selected="selected"' : "" ?> >Gold (+$80)</option>
                                <option value="Silver (+$50)" <?= $color == 'Silver (+$50)' ? ' selected="selected"' : "" ?> >Silver (+$50)</option>
                            </select>
                            <!--<label>Select a Gemstone</label>
                            <select name="BabyName">
                                <option value="Aqua Chalcedony"   <?= $color == 'Aqua Chalcedony' ? ' selected="selected"' : "" ?>>Aqua Chalcedony</option>
                                <option value="Carnelian"   <?= $color == 'Carnelian' ? ' selected="selected"' : "" ?>>Carnelian</option>
                                <option value="Blue Topaz"   <?= $color == 'Blue Topaz' ? ' selected="selected"' : "" ?>>Blue Topaz</option>
                                <option value="Black Onyx"   <?= $color == 'Black Onyx' ? ' selected="selected"' : "" ?>>Black Onyx</option>
                            </select> -->
                            <p><b>Price:$ <?= $price ?> </b></p>
                            <button type="submit" name="addToCart" value="<?= $productID ?>" >Add to Cart</button>
                        </div>
                    <?php }}?>
            </div>
        <?php } ?>
        <?php if($WhichProduct == "WEDDINGBRACELETS") { ?>
            <h3><U>WEDDING BRACELETS</U></h3>
            <div style="width:100%; display: flex;">
                <?php
                $sqlString = "SELECT * FROM WEDDINGBRACELETS LEFT JOIN PRODUCT ON WEDDINGBRACELETS.productID = PRODUCT.productID WHERE WEDDINGBRACELETS.productID = '$productID';";
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
                        <div class="column";>
                            <img src="<?= $Image ?>"  width="120" height="120">
                            </br></br></br>
                            <label>Select a Size</label>
                            <select name="size">
                                <option value="S" <?= $size == 'S' ? ' selected="selected"' : "" ?>>Small</option>
                                <option value="M" <?= $size == 'M' ? ' selected="selected"' : "" ?>>Medium</option>
                                <option value="L" <?= $size == 'L' ? ' selected="selected"' : "" ?>>Large</option></select>
                            </select>
                            <label>Select Number of Strands</label>
                            <select name="Bcolor">
                                <option value="1 Strand (+$20)"   <?= $color == '1 Strand (+$20)' ? ' selected="selected"' : "" ?> >1 Strand (+$20)</option>
                                <option value="2 Strands (+$40)"   <?= $color == '2 Strands (+$40)' ? ' selected="selected"' : "" ?> >2 Strands (+$40)</option>
                                <option value="3 Strands (+$60)"   <?= $color == '3 Strands (+$60)' ? ' selected="selected"' : "" ?> >3 Strands (+$60)</option>
                                <option value="4 Strands (+$80)"   <?= $color == '4 Strands (+$80)' ? ' selected="selected"' : "" ?> >4 Strands (+$80)</option>
                            </select>
                            <!--<label>Select a Color</label>
                            <select name="BabyName">
                                <option value="While Gold"   <?= $color == 'While Gold' ? ' selected="selected"' : "" ?> >While Gold</option>
                                <option value="Yellow Gold"   <?= $color == 'Yellow Gold' ? ' selected="selected"' : "" ?> >Yellow Gold</option>
                                <option value="Rose Gold" <?= $color == 'Rose Gold' ? ' selected="selected"' : "" ?> >Rose Gold</option>
                            </select> -->
                            <p><b>Price:$ <?= $price ?> </b></p>
                            <button type="submit" name="addToCart" value="<?= $productID ?>" >Add to Cart</button>
                        </div>
                    <?php }}?>
            </div>
        <?php } ?>
        </br></br></br></br>
    </div>
</form>
</body>
</html>