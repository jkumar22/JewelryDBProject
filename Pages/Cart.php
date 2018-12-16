<?php

include('../DBConnection/DBconnection.php');

$Address = $Address2 = $City = $State = $Zip = $Country = $CurrentShippingCost = $CreditCard = "";
$ZipID = $StateName = $ZipMinimum = $ZipMaximum = $ShippingCost = ""; 
$Address_Error = $Address2_Error = $City_Error = $State_Error = $Zip_Error= "";
$IsError = "false";
$userID = $_SESSION['userID']; //User ID

$sql = $dbCon ->query("SELECT * FROM USER join ZipCode WHERE USER.state = ZipCode.ZipID and USER.userID = '$userID'");
                    if($sql ->num_rows != 0)
                    {
                        while ($rows = $sql->fetch_assoc())
                        {
                            $ID = $rows['userID'];
                            $CreditCard = $rows['creditCard'];
                            $Address = $rows['address1'];
                            $Address2 = $rows['address2'];
                            $City = $rows['city'];
                            $State = $rows['state'];
                            $Zip = $rows['zip'];
                            $Country = $rows['country'];
                            $CurrentShippingCost = $rows['ShippingCost'];
                        }
                    }

$TotalPrice = $productID = $userID = $dateOfPurchase = $purchaseID = $Option = $color = $CouponCode = $CouponCode_Error = $discountedPrice = $OldTotalPrice = $TotalPrice = "";
$userID = $_SESSION['userID']; //User ID

if((isset($_SESSION['loggedIn'])) && ($_SESSION['loggedIn'] == "True" ))
{
    if (isset( $_GET['secureVar'] ))
    {
        //Using GET
        $productID = $_GET['secureVar']; // ProductID
        date_default_timezone_set("America/New_York");
        $dateOfPurchase = date("Y-m-d h:i:sa");
        //$secureVar2 = $_GET['secureVar2']; // email

        $sql_addTwo = "INSERT INTO CART (userID, productID, dateOfPurchase)
        VALUES ('$userID','$productID','$dateOfPurchase')";

        if (mysqli_query($dbCon, $sql_addTwo)){

            $sql = $dbCon ->query("UPDATE PRODUCT  SET stock = stock - 1 WHERE productID = '$productID'");
            header('Location: Cart.php');
        }
        else{
            echo  "Error: " . $sql_addTwo . "<br>" . mysqli_error($dbCon);
        }


    }

}else
{
    $message = "Please Login to view your cart. Thank You!";
    echo "<script>if(confirm('$message')){document.location.href='LogIn.php'}else{document.location.href='index.php'};</script>";
}

if (isset($_POST['AddCoupon']))
{
    $CouponCode = strip_tags($_POST['CouponCode']);

    $CodeSQL = $dbCon ->query("SELECT discountedPrice FROM COUPON Where code = '$CouponCode'");

    if($CodeSQL ->num_rows != 0){while ($rows = $CodeSQL->fetch_assoc()){$discountedPrice = $rows['discountedPrice'];}
        $TotalPrice = (int)$TotalPrice - (int)$discountedPrice;
        $CouponCode_Error = " Code Added";
     }
     else
     {
        $CouponCode_Error = " Code is Invalid";
     }
}

if (isset($_POST['RemoveCoupon']))
{
        $TotalPrice = (int)$TotalPrice + (int)$discountedPrice;
        $discountedPrice = 0;
        $CouponCode = "";
        $CouponCode_Error = " Code Removed";

}

if (isset($_POST['UpdateAddress']))
{
    $IsError = "false";
        //Address
    $InputValue = $_POST['address'];
    if (validateInput($InputValue) == "true")
    {
        $Address = DoublecheckText($InputValue);
        $Address_Error = "";
    }
    else{
        $Address_Error = validateInput($InputValue);
        $IsError = "true";
    }

    //Address2
    $InputValue = $_POST['address2'];
    if (!empty($InputValue))
    {
        $Address2 = DoublecheckText($InputValue);
    }

    //City
    $InputValue = $_POST['city'];
    if (validateInput($InputValue) == "true")
    {
        $City = DoublecheckText($InputValue);
        $City_Error = "";
    }
    else{
        $City_Error = validateInput($InputValue);
        $IsError = "true";
    }

    //State
    $State = $_POST['state'];

    //zip
    $InputValue = $_POST['zip'];
    if (validateZipInput($InputValue) == "true")
    {
        $Zip = DoublecheckText($InputValue);
        $Zip_Error = "";
    }else{
        $Zip_Error = validateZipInput($InputValue);
        $IsError = "true";
    }

    if ($IsError == "false")
    {
        $sql = $dbCon ->query("UPDATE USER  SET address1 = '$Address', address2 = '$Address2', city = '$City',state = '$State',zip = '$Zip'WHERE userID = '$userID'");
        header('Location: Cart.php');
    }


}

if (isset($_POST['Remove']))
{
    $Purchase_Id = strip_tags($_POST['Remove']);

    $CartSQL = $dbCon ->query("SELECT productID,option2 FROM CART Where purchaseID = '$Purchase_Id'");
    if($CartSQL ->num_rows != 0){while ($rows = $CartSQL->fetch_assoc()){ $Option = $rows['option2']; $productID = $rows['productID'];}}
    $color = $Option;

        if ($color == "Gold (+$05)") {
            $sql = $dbCon->query("UPDATE BABYBRACELETS  SET option1Stock = option1Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "Silver (+$07)") {
            $sql = $dbCon->query("UPDATE BABYBRACELETS  SET option2Stock = option2Stock + 1 WHERE productID = '$productID'");
        }

        if ($color == "Gold (+$80)") {
            $sql = $dbCon->query("UPDATE GMBRACELETS  SET option1Stock = option1Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "Silver (+$50)") {
            $sql = $dbCon->query("UPDATE GMBRACELETS  SET option2Stock = option2Stock + 1 WHERE productID = '$productID'");
        }

        if ($color == "1 Strand (+$20)")
        {
            $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option1Stock = option1Stock + 1 WHERE productID = '$productID'");
        }
        else if ($color == "2 Strands (+$40)") {
            $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option2Stock = option2Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "3 Strands (+$60)") {
            $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option3Stock = option3Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "4 Strands (+$80)") {
            $sql = $dbCon->query("UPDATE WEDDINGBRACELETS  SET option4Stock = option4Stock + 1 WHERE productID = '$productID'");
        }

        if ($color == "Garnet (+$20)") {
            $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option1Stock = option1Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "Amethyst (+$30)") {
            $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option2Stock = option2Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "Aquamarine (+$50)") {
            $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option3Stock = option3Stock + 1 WHERE productID = '$productID'");
        }else if ($color == "Diamond (+$80)") {
            $sql = $dbCon->query("UPDATE MOTHERBRACELETS  SET option4Stock = option4Stock + 1 WHERE productID = '$productID'");
        }
        $sql = $dbCon ->query("DELETE FROM CART WHERE purchaseID = '$Purchase_Id'");
        $sql = $dbCon ->query("UPDATE PRODUCT  SET stock = stock + 1 WHERE productID = '$productID'");
}

if (isset($_POST['CheckOut']))
{
    date_default_timezone_set("America/New_York");
    $dateOfPurchase = date("Y-m-d h:i:sa");
    $sql = $dbCon ->query("UPDATE CART  SET isPurchasedFlag = 1, dateOfPurchase = '$dateOfPurchase' WHERE isPurchasedFlag = 0 AND userID = '$userID'");

    header('Location: PurchaseConfirmation.php');
}

function validateInput($value)
{
    $valueIsEmpty = $ValueIsInvalid = "";
    $Error = false;

    if(empty($value))
    {
        $valueIsEmpty = "Required!";
        $Error = true;
        $IsError = "true";
        return $valueIsEmpty;
    }
    else if (!preg_match("/^[0-9a-zA-Z ].*$/",$value))// check if name only contains letters and whitespace
    {
        $ValueIsInvalid = "Invalid Entry";
        $Error = true;
        $IsError = "true";
        return $ValueIsInvalid;
    }
    else if ($Error == false)
    {
        $Good = "true";
        return $Good;
    }
}

function validateZipInput($value)
{
    $valueIsEmpty = $ValueIsInvalid = "";
    $Error = false;

    if(empty($value))
    {
        $valueIsEmpty = "Required!";
        $Error = true;
        $IsError = "true";
        return $valueIsEmpty;
    }

    if((!preg_match("/^([0-9]{5})?$/i",$value)) && (!preg_match("/^([0-9]{5})(-[0-9]{4})?$/i",$value))) // check if name only contains correct Zip
    {
        $ValueIsInvalid = "Invalid Entry, Must be between 5-9 digits";
        $Error = true;
        $IsError = "true";
        return $ValueIsInvalid;
    }
    if ($Error == false)
    {
        return "true";
    }
}

function DoublecheckText($data)
{
    $data = strip_tags($data);
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='cart'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:60%" action="Cart.php" autocomplete="on">
    <div class="container">
        <h2>Your Awesome Jewelry Cart!</h2>
        <p>Fill up your cart.</p>
        <hr>
        <div style="width:100%; display: flex;">
            <?php
            $sqlString = "SELECT * FROM CART JOIN PRODUCT WHERE CART.productID = PRODUCT.productID and CART.userID = '$userID' and CART.isPurchasedFlag = 0";
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
            $addprice = $rows['addprice'];
            $Option1 = $rows['option1'];
            $Option2 = $rows['option2'];
            $Option3 = $rows['option3'];
            $Option = "Size:".$Option1." Option2:" .$Option2." ".$Option3;

            $TotalPrice = ((int)$TotalPrice) + ((int)$price) + ((int)$addprice);
            $inventory = $rows['inventory'];
            $inventoryDate = $rows['inventoryDate'];
            $stock = $rows['stock'];
            $purchaseID = $rows['purchaseID'];
            ?>
            <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                <p><b>Price:$</b><?=$price?></p>
                <?php if($addprice != 0) { ?>
                    <p>Options1:<?=$Option?></p>
                    <p><b>Additional Cost:$</b><?=$addprice?></p>
                <?php } ?>
                <button type="submit" class="removeBTN" name="Remove" value="<?= $purchaseID ?>" >Remove</button>
            </div>
            <?php }}?>
        </div>
        <hr>
        <div style="width:100%;">
            <div style="width:30%;">
                <label for="Fname"><b>Coupon Code</b></label>
                <span class="error"><?php echo $CouponCode_Error ;?></span>
                <input type="text" placeholder="code" name="CouponCode" value="<?= $CouponCode?>">
            </div>
            <div style="width:50%; display: flex;">
                <div style="width:25%; float:right;" >
                <button type="submit" name="AddCoupon" class="customizeBTN">Add</button>
                </div>
                <div style="width:25%;">
                <button type="submit" name="RemoveCoupon" class="removeBTN">Remove</button>
                </div>
            </div>
        </div>
        <hr>
        <div style="width:50%;">
            <label for="address"><b>Update Shipping Address</b></label>
            <span class="error"><?php echo $Address_Error;?></span>
            <input type="text" placeholder="Enter Address" name="address" value="<?= $Address ?>">

            <label for="address2"><b>Address2</b></label>
            <span class="error"><?php echo $Address2_Error;?></span>
            <input type="text" placeholder="apt. 123" name="address2" value="<?= $Address2 ?>">

            <label for="city"><b>City</b></label>
            <span class="error"><?php echo $City_Error ;?></span>
            <input type="text" placeholder="Enter City name" name="city" value="<?= $City ?>">

            <label for="state"><b>State</b></label>
            <span class="error"><?php echo $State_Error;?></span>
            <select name="state" id="state">
                <option value="" selected="selected">Select a State</option>
                <?php 
                    $sql = $dbCon ->query("SELECT * FROM ZipCode");
                    if($sql ->num_rows != 0)
                    {
                        while ($rows = $sql->fetch_assoc())
                        {
                            $ZipID = $rows['ZipID'];
                            $StateName = $rows['StateName'];
                            $StateAbbreviation = $rows['StateAbbreviation'];
                            $ZipMinimum = $rows['ZipMinimum'];
                            $ZipMaximum = $rows['ZipMaximum'];
                            $ShippingCost = $rows['ShippingCost'];
                ?>
            <option value="<?= $ZipID ?>"<?php if ( $State == $ZipID) echo "selected";?>><?= $StateName ?> (Zip: <?= $ZipMinimum ?> to <?= $ZipMaximum ?> | Shipping cost: "$ <?= $ShippingCost ?>)</option>
                <?php }}?>
            </select></BR>

            <label for="zip"><b>Zipcode</b></label>
            <span class="error"><?php echo $Zip_Error ;?></span>
            <input type="text" placeholder="Enter Zipcode" name="zip" value="<?= $Zip ?>">
        </div>
            <div style="width:20%; display: flex;">
                    <button type="submit" name="UpdateAddress" class="customizeBTN">Update Address</button>
            </div>
            <hr>
                <h3>Credit Card Number:<b> *************<?= substr($CreditCard, -4); ?></b></h3>
            <hr>
            <?php if ($discountedPrice >0) {?>
                <h5>Before Discount:<b>$<?= $TotalPrice + $discountedPrice ?></b></h5>
                <h4>Discount:<b>- $<?= $discountedPrice ?></b></h4>
            <?php }?>
            <h4>Shipping Cost:<b> $<?= $CurrentShippingCost ?></b></h4>
            <h3>Your Total is:<b> $<?= (int)$TotalPrice + (int)$CurrentShippingCost?></b></h3>
            <button type="submit" name="CheckOut" value="<?= $productID ?>" >Check Out</button>

        </div>
    </div>
</form>
</body>
</html>