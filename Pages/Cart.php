<?php

include('../DBConnection/DBconnection.php');

$TotalPrice = $productID = $userID = $dateOfPurchase = $purchaseID = $Option = $color =  "";
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
else if (isset($_POST['CheckOut']))
{
    date_default_timezone_set("America/New_York");
    $dateOfPurchase = date("Y-m-d h:i:sa");
    $sql = $dbCon ->query("UPDATE CART  SET isPurchasedFlag = 1, dateOfPurchase = '$dateOfPurchase' WHERE isPurchasedFlag = 0 AND userID = '$userID'");

    header('Location: PurchaseConfirmation.php');
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='cart'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action="Cart.php" autocomplete="on">
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
        <h3>Your Total is:<b> <?= $TotalPrice ?>$ </b></h3>
        <button type="submit" name="CheckOut" value="<?= $productID ?>" >Check Out</button>

    </div>
</form>
</body>
</html>