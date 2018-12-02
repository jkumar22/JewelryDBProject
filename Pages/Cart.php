<?php

include('../DBConnection/DBconnection.php');

$TotalPrice = $productID = $userID = $dateOfPurchase = ""; 
echo $productID . " " . $userID . " " . $dateOfPurchase;
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
            header('Location: Cart.php');
        }
        else{
            echo  "Error: " . $sql_addTwo . "<br>" . mysqli_error($dbCon);
        }

        $sql = $dbCon ->query("UPDATE PRODUCT  SET stock = stock - 1 WHERE productID = '$productID'");

    }

}else
{
    $message = "Please Login to view your cart. Thank You!";
    echo "<script>if(confirm('$message')){document.location.href='LogIn.php'}else{document.location.href='index.php'};</script>";
}


if (isset($_POST['Remove']))
{
    $P_Id = strip_tags($_POST['Remove']);

    $sql = $dbCon ->query("DELETE FROM CART WHERE productID = '$P_Id'");
    $sql = $dbCon ->query("UPDATE PRODUCT  SET stock = stock + 1 WHERE productID = '$P_Id'");

    // printing the changed recor
}
else if (isset($_POST['CheckOut']))
{
    $sql = $dbCon ->query("UPDATE CART  SET isPurchasedFlag = 1 WHERE isPurchasedFlag = 0 AND userID = '$userID'");
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
                        $TotalPrice = ((int)$TotalPrice) + ((int)$price); 
                        $inventory = $rows['inventory'];
                        $inventoryDate = $rows['inventoryDate'];
                        $stock = $rows['stock'];
            ?>
                <div align="center" class="column"; style="width:20%; margin-right:50px; margin-left:50px" >
                    <img src="<?= $Image ?>"  width="100" height="100" align="middle" >
                    <p><b>Price:$ <?=$price?> </b></p>
                    <button type="submit" class="removeBTN" name="Remove" value="<?= $productID ?>" >Remove</button>
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