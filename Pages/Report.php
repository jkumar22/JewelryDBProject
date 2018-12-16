<?php include('../DBConnection/DBconnection.php');

$NECKLACES = $EARRINGS = $SETS = $WEDDINGBRACELETS = $GMBRACELETS = $BABYBRACELETS = $MOTHERBRACELETS = $EVERYDAYJEWELRY = 5; 

//SELECT COUNT(`productID`) FROM `CART` WHERE `productID` IN (SELECT `productID` FROM `EARRINGS`) GROUP BY `productID`
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM NECKLACES);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $NECKLACES_inventory = $rows['inventoryTotal']; $NECKLACES_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM EARRINGS);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $EARRINGS_inventory = $rows['inventoryTotal']; $EARRINGS_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM SETS);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $SETS_inventory = $rows['inventoryTotal']; $SETS_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM WEDDINGBRACELETS);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $WEDDINGBRACELETS_inventory = $rows['inventoryTotal']; $WEDDINGBRACELETS_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM GMBRACELETS);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $GMBRACELETS_inventory = $rows['inventoryTotal']; $GMBRACELETS_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM BABYBRACELETS);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $BABYBRACELETS_inventory = $rows['inventoryTotal']; $BABYBRACELETS_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM MOTHERBRACELETS);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $MOTHERBRACELETS_inventory = $rows['inventoryTotal']; $MOTHERBRACELETS_stock = $rows['stockTotal']; }}
//$sql = $dbCon ->query("SELECT Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT WHERE productID IN (SELECT productID FROM EVERYDAYJEWELRY);");
//if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $EVERYDAYJEWELRY_inventory = $rows['inventoryTotal']; $EVERYDAYJEWELRY_stock = $rows['stockTotal']; }}
//$dataPoints = array(
//	array("y" => $NECKLACES_stock , "label" => "Necklaces(" .$NECKLACES_inventory.")" ),
//    array("y" => $EARRINGS_stock , "label" => "EARRINGS(" .$EARRINGS_inventory.")" ),
//    array("y" => $SETS_stock , "label" => "SETS(" .$SETS_inventory.")" ),
//    array("y" => $WEDDINGBRACELETS_stock, "label" => "WEDDINGBRACELETS(" .$WEDDINGBRACELETS_inventory.")" ),
//    array("y" => $GMBRACELETS_stock , "label" => "GMBracelets(" .$GMBRACELETS_inventory.")" ),
//    array("y" => $BABYBRACELETS_stock , "label" => "BabyBracelets(" .$BABYBRACELETS_inventory.")" ),
//    array("y" => $MOTHERBRACELETS_stock , "label" => "MothersBracelets(" .$MOTHERBRACELETS_inventory.")" ),
//    array("y" => $NECKLACES_stock , "label" => "Everyday(" .$EVERYDAYJEWELRY_inventory.")" ),
//);

$sql = $dbCon ->query("SELECT ptype, Sum(inventory) as inventoryTotal, Sum(inventory) - sum(stock)as stockTotal FROM PRODUCT GROUP BY ptype;");
if($sql ->num_rows != 0){
    while ($rows = $sql->fetch_assoc())
    {
        $type = $rows['ptype'];
        $inventory = $rows['inventoryTotal'];
        $stock = $rows['stockTotal'];

        $arry[$type]= $type;
        $arry[$type."Inventory"]= $inventory;
        $arry[$type."Stock"]= $stock;

    }
    $dataPointsJay = array(
        array("y" => $arry["EarringStock"] , "label" => $arry["Earring"]."(" .$arry["EarringInventory"].")" ),
        array("y" => $arry["NecklaceStock"] , "label" => $arry["Necklace"]."(" .$arry["NecklaceInventory"].")" ),
        array("y" => $arry["SetStock"] , "label" => $arry["Set"]."(" .$arry["SetInventory"].")" ),
        array("y" => $arry["GM BraceletStock"] , "label" => $arry["GM Bracelet"]."(" .$arry["GM BraceletInventory"].")" ),
        array("y" => $arry["Mother BraceletStock"] , "label" => $arry["Mother Bracelet"]."(" .$arry["Mother BraceletInventory"].")" ),
        array("y" => $arry["Wedding BraceletStock"] , "label" => $arry["Wedding Bracelet"]."(" .$arry["Wedding BraceletInventory"].")" ),
        array("y" => $arry["Baby BraceletStock"] , "label" => $arry["Baby Bracelet"]."(" .$arry["Baby BraceletInventory"].")" ),
    );
}

$ProductSQL = $dbCon ->query("SELECT * FROM PRODUCT");
$ProductWEDDINGBRACELETSSQL = $dbCon ->query("SELECT * FROM PRODUCT JOIN WEDDINGBRACELETS where PRODUCT.productID = WEDDINGBRACELETS.productID");
$ProductGMBRACELETS = $dbCon ->query("SELECT * FROM PRODUCT JOIN GMBRACELETS where PRODUCT.productID = GMBRACELETS.productID");
$ProductBABYBRACELETS = $dbCon ->query("SELECT * FROM PRODUCT JOIN BABYBRACELETS where PRODUCT.productID = BABYBRACELETS.productID");
$ProductMOTHERBRACELETS = $dbCon ->query("SELECT * FROM PRODUCT JOIN MOTHERBRACELETS where PRODUCT.productID = MOTHERBRACELETS.productID");

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>
<body background="../Images/bg4.jpg">
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("YearlyReport", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "2018 Sales"
	},
	axisY: {
		title: "Number of Product Sold"
	},
	data: [{
		type: "column",
		yValueFormatString: "#0",
		dataPoints: <?php echo json_encode($dataPointsJay, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<body>
<?php $currentPage ='Report'; include 'header.php'; ?>
<form class="modal-content" method="post"  action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Yearly Report</h2>
        <p></p>
        <hr>
		<div id="YearlyReport" style="height: 370px; width: 60%; padding-left: 20%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </div>
    <hr>
    <div class="container">
        <h2>Report</h2>

        <table id = "user_table" >
            <tr >
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>InventoryDate</th>
                <th>Price</th>
                <th>Inventory</th>
                <th>Sold</th>
                <th>Product Cost</th>
                <th>Inventory Cost</th>
                <th>Revenue</th>
                <th>Profit</th>

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
                $name = $rows['pname'];
                $type = $rows['ptype'];
                $Price = $rows['price'];
                $Inventory = $rows['inventory'];
                $InventoryDate = $rows['inventoryDate'];
                $pCost = $rows['pCost'];
                $stock = $rows['stock'];
                $image = $rows['image'];
                $InventoryCost = $pCost * $Inventory;
                $sold = $Inventory - $stock;
                $Revenue = $sold * $Price;
                $Profit = $Revenue - $InventoryCost;

                //$TotalInventoryCost = $TotalInventoryCost + $InventoryCost;
                //$TotalRevenue = $TotalRevenue + $Revenue;
                //$TotalProfit = $TotalProfit + $Profit;

                ?>

                <td><?php echo $ID?></td>
                <td><?php echo $name?></td>
                <td><?php echo $type?></td>
                <td><?php echo $InventoryDate?></td>
                <td><?php echo $Price?></td>
                <td><?php echo $Inventory?></td>
                <td><?php echo $sold?></td>
                <td><?php echo $pCost ?></td>
                <td><?php echo $InventoryCost ?></td>
                <td><?php echo $Revenue ?></td>
                <td><?php echo $Profit ?></td>

                <?php
                }
                }
                else
                {
                    echo "No data available at this time";
                }
                ?>
        </table>
    </div>
    <hr>

    <div class="container">
        <h2>Report for Wedding Bracelets</h2>

        <table id = "user_table" >
            <tr >
                <th>ID</th>
                <th>Product Name</th>
                <th>Options</th>
                <th>Additional option Price</th>
                <th>Additional option Cost</th>
                <th>Inventory</th>
                <th>Inventory Cost</th>
                <th>Sold</th>
                <th>Revenue</th>
                <th>Profit</th>

            </tr>

            <!-- looping each agency in each row -->
            <?php
            if($ProductWEDDINGBRACELETSSQL ->num_rows != 0)
            {
            while ($rows = $ProductWEDDINGBRACELETSSQL->fetch_assoc())
            {
            ?>
            <tr id="rows<?php echo $rows['productID'];?>">

                <?php
                $ID = $rows['productID'];
                $name = $rows['pname'];
                $type = $rows['ptype'];
                $Price = $rows['price'];
                $Inventory = $rows['inventory'];
                $pCost = $rows['pCost'];
                $stock = $rows['stock'];
                $option1 = $rows['option1'];
                $option2 = $rows['option2'];
                $option3 = $rows['option3'];
                $option4 = $rows['option4'];
                $option1Price = $rows['option1Price'];
                $option2Price = $rows['option2Price'];
                $option3Price = $rows['option3Price'];
                $option4Price = $rows['option4Price'];
                $option1Cost = $rows['option1Cost'];
                $option2Cost = $rows['option2Cost'];
                $option3Cost = $rows['option3Cost'];
                $option4Cost = $rows['option4Cost'];
                $option1Inventory = $rows['option1Inventory'];
                $option2Inventory = $rows['option2Inventory'];
                $option3Inventory = $rows['option3Inventory'];
                $option4Inventory = $rows['option4Inventory'];
                $option1Stock = $rows['option1Stock'];
                $option2Stock = $rows['option2Stock'];
                $option3Stock = $rows['option3Stock'];
                $option4Stock = $rows['option4Stock'];

                $sold2 = $option2Inventory - $option2Stock;
                $sold3 = $option3Inventory - $option3Stock;
                $sold4 = $option4Inventory - $option4Stock;
                $sold1 = $option1Inventory - $option1Stock;
                $sold = $sold1.", ". $sold2. ", ". $sold3.", ".$sold4;

                $Revenue1 = $sold1 * $option1Price;
                $Revenue2 = $sold2 * $option2Price;
                $Revenue3 = $sold3 * $option3Price;
                $Revenue4 = $sold4 * $option4Price;
                $Revenue = $Revenue1.", ". $Revenue2. ", ". $Revenue3.", ".$Revenue4;

                $Profit1 = $Revenue1 - ($option1Inventory * $option1Cost);
                $Profit2 = $Revenue2 - ($option2Inventory * $option2Cost);
                $Profit3 = $Revenue3 - ($option3Inventory * $option3Cost);
                $Profit4 = $Revenue4 - ($option4Inventory * $option4Cost);
                $Profit = $Profit1.", ". $Profit2. ", ". $Profit3.", ".$Profit4;

                ?>

                <td><?php echo $ID?></td>
                <td><?php echo $name?></td>
                <td><?php echo $option1.", " . $option2 .", ". $option3.", ". $option4?></td>
                <td><?php echo $option1Price.", " . $option2Price .", ". $option3Price.", ". $option4Price?></td>
                <td><?php echo $option1Cost.", " . $option2Cost .", ". $option3Cost.", ". $option4Cost?></td>
                <td><?php echo $option1Inventory.", " . $option2Inventory .", ". $option3Inventory.", ". $option4Inventory?></td>
                <td><?php echo $option1Inventory * $option1Cost.", " . $option2Inventory * $option2Cost .", ". $option3Inventory * $option3Cost.", ". $option4Inventory * $option4Cost?></td>
                <td><?php echo $sold?></td>
                <td><?php echo $Revenue ?></td>
                <td><?php echo $Profit ?></td>

                <?php
                }
                }
                else
                {
                    echo "No data available at this time";
                }
                ?>
        </table>
    </div>
    <hr>

    <div class="container">
        <h2>Report for Grand Mother Bracelets</h2>

        <table id = "user_table" >
            <tr >
                <th>ID</th>
                <th>Product Name</th>
                <th>Options</th>
                <th>Additional option Price</th>
                <th>Additional option Cost</th>
                <th>Inventory</th>
                <th>Inventory Cost</th>
                <th>Sold</th>
                <th>Revenue</th>
                <th>Profit</th>

            </tr>

            <!-- looping each agency in each row -->
            <?php
            if($ProductGMBRACELETS ->num_rows != 0)
            {
            while ($rows = $ProductGMBRACELETS->fetch_assoc())
            {
            ?>
            <tr id="rows<?php echo $rows['productID'];?>">

                <?php
                $ID = $rows['productID'];
                $name = $rows['pname'];
                $type = $rows['ptype'];
                $Price = $rows['price'];
                $Inventory = $rows['inventory'];
                $pCost = $rows['pCost'];
                $stock = $rows['stock'];
                $option1 = $rows['option1'];
                $option2 = $rows['option2'];
                $option1Price = $rows['option1Price'];
                $option2Price = $rows['option2Price'];
                $option1Cost = $rows['option1Cost'];
                $option2Cost = $rows['option2Cost'];
                $option1Inventory = $rows['option1Inventory'];
                $option2Inventory = $rows['option2Inventory'];
                $option1Stock = $rows['option1Stock'];
                $option2Stock = $rows['option2Stock'];

                $sold2 = $option2Inventory - $option2Stock;
                $sold1 = $option1Inventory - $option1Stock;
                $sold = $sold1.", ". $sold2;

                $Revenue1 = $sold1 * $option1Price;
                $Revenue2 = $sold2 * $option2Price;
                $Revenue = $Revenue1.", ". $Revenue2;

                $Profit1 = $Revenue1 - ($option1Inventory * $option1Cost);
                $Profit2 = $Revenue2 - ($option2Inventory * $option2Cost);
                $Profit = $Profit1.", ". $Profit2;

                ?>

                <td><?php echo $ID?></td>
                <td><?php echo $name?></td>
                <td><?php echo $option1.", " . $option2?></td>
                <td><?php echo $option1Price.", " . $option2Price?></td>
                <td><?php echo $option1Cost.", " . $option2Cost?></td>
                <td><?php echo $option1Inventory.", " . $option2Inventory?></td>
                <td><?php echo $option1Inventory * $option1Cost.", " . $option2Inventory * $option2Cost?></td>
                <td><?php echo $sold?></td>
                <td><?php echo $Revenue ?></td>
                <td><?php echo $Profit ?></td>

                <?php
                }
                }
                else
                {
                    echo "No data available at this time";
                }
                ?>
        </table>
    </div>
    <hr>

    <div class="container">
        <h2>Report for Baby Bracelets</h2>

        <table id = "user_table" >
            <tr >
                <th>ID</th>
                <th>Product Name</th>
                <th>Options</th>
                <th>Additional option Price</th>
                <th>Additional option Cost</th>
                <th>Inventory</th>
                <th>Inventory Cost</th>
                <th>Sold</th>
                <th>Revenue</th>
                <th>Profit</th>

            </tr>

            <!-- looping each agency in each row -->
            <?php
            if($ProductBABYBRACELETS ->num_rows != 0)
            {
            while ($rows = $ProductBABYBRACELETS->fetch_assoc())
            {
            ?>
            <tr id="rows<?php echo $rows['productID'];?>">

                <?php
                $ID = $rows['productID'];
                $name = $rows['pname'];
                $type = $rows['ptype'];
                $Price = $rows['price'];
                $Inventory = $rows['inventory'];
                $pCost = $rows['pCost'];
                $stock = $rows['stock'];
                $option1 = $rows['option1'];
                $option2 = $rows['option2'];
                $option1Price = $rows['option1Price'];
                $option2Price = $rows['option2Price'];
                $option1Cost = $rows['option1Cost'];
                $option2Cost = $rows['option2Cost'];
                $option1Inventory = $rows['option1Inventory'];
                $option2Inventory = $rows['option2Inventory'];
                $option1Stock = $rows['option1Stock'];
                $option2Stock = $rows['option2Stock'];

                $sold2 = $option2Inventory - $option2Stock;
                $sold1 = $option1Inventory - $option1Stock;
                $sold = $sold1.", ". $sold2;

                $Revenue1 = $sold1 * $option1Price;
                $Revenue2 = $sold2 * $option2Price;
                $Revenue = $Revenue1.", ". $Revenue2;

                $Profit1 = $Revenue1 - ($option1Inventory * $option1Cost);
                $Profit2 = $Revenue2 - ($option2Inventory * $option2Cost);
                $Profit = $Profit1.", ". $Profit2;

                ?>

                <td><?php echo $ID?></td>
                <td><?php echo $name?></td>
                <td><?php echo $option1.", " . $option2?></td>
                <td><?php echo $option1Price.", " . $option2Price?></td>
                <td><?php echo $option1Cost.", " . $option2Cost?></td>
                <td><?php echo $option1Inventory.", " . $option2Inventory?></td>
                <td><?php echo $option1Inventory * $option1Cost.", " . $option2Inventory * $option2Cost?></td>
                <td><?php echo $sold?></td>
                <td><?php echo $Revenue ?></td>
                <td><?php echo $Profit ?></td>

                <?php
                }
                }
                else
                {
                    echo "No data available at this time";
                }
                ?>
        </table>
    </div>
    <hr>

    <div class="container">
        <h2>Report for Wedding Bracelets</h2>

        <table id = "user_table" >
            <tr >
                <th>ID</th>
                <th>Product Name</th>
                <th>Options</th>
                <th>Additional option Price</th>
                <th>Additional option Cost</th>
                <th>Inventory</th>
                <th>Inventory Cost</th>
                <th>Sold</th>
                <th>Revenue</th>
                <th>Profit</th>

            </tr>

            <!-- looping each agency in each row -->
            <?php
            if($ProductMOTHERBRACELETS ->num_rows != 0)
            {
            while ($rows = $ProductMOTHERBRACELETS->fetch_assoc())
            {
            ?>
            <tr id="rows<?php echo $rows['productID'];?>">

                <?php
                $ID = $rows['productID'];
                $name = $rows['pname'];
                $type = $rows['ptype'];
                $Price = $rows['price'];
                $Inventory = $rows['inventory'];
                $pCost = $rows['pCost'];
                $stock = $rows['stock'];
                $option1 = $rows['option1'];
                $option2 = $rows['option2'];
                $option3 = $rows['option3'];
                $option4 = $rows['option4'];
                $option1Price = $rows['option1Price'];
                $option2Price = $rows['option2Price'];
                $option3Price = $rows['option3Price'];
                $option4Price = $rows['option4Price'];
                $option1Cost = $rows['option1Cost'];
                $option2Cost = $rows['option2Cost'];
                $option3Cost = $rows['option3Cost'];
                $option4Cost = $rows['option4Cost'];
                $option1Inventory = $rows['option1Inventory'];
                $option2Inventory = $rows['option2Inventory'];
                $option3Inventory = $rows['option3Inventory'];
                $option4Inventory = $rows['option4Inventory'];
                $option1Stock = $rows['option1Stock'];
                $option2Stock = $rows['option2Stock'];
                $option3Stock = $rows['option3Stock'];
                $option4Stock = $rows['option4Stock'];

                $sold2 = $option2Inventory - $option2Stock;
                $sold3 = $option3Inventory - $option3Stock;
                $sold4 = $option4Inventory - $option4Stock;
                $sold1 = $option1Inventory - $option1Stock;
                $sold = $sold1.", ". $sold2. ", ". $sold3.", ".$sold4;

                $Revenue1 = $sold1 * $option1Price;
                $Revenue2 = $sold2 * $option2Price;
                $Revenue3 = $sold3 * $option3Price;
                $Revenue4 = $sold4 * $option4Price;
                $Revenue = $Revenue1.", ". $Revenue2. ", ". $Revenue3.", ".$Revenue4;

                $Profit1 = $Revenue1 - ($option1Inventory * $option1Cost);
                $Profit2 = $Revenue2 - ($option2Inventory * $option2Cost);
                $Profit3 = $Revenue3 - ($option3Inventory * $option3Cost);
                $Profit4 = $Revenue4 - ($option4Inventory * $option4Cost);
                $Profit = $Profit1.", ". $Profit2. ", ". $Profit3.", ".$Profit4;

                ?>

                <td><?php echo $ID?></td>
                <td><?php echo $name?></td>
                <td><?php echo $option1.", " . $option2 .", ". $option3.", ". $option4?></td>
                <td><?php echo $option1Price.", " . $option2Price .", ". $option3Price.", ". $option4Price?></td>
                <td><?php echo $option1Cost.", " . $option2Cost .", ". $option3Cost.", ". $option4Cost?></td>
                <td><?php echo $option1Inventory.", " . $option2Inventory .", ". $option3Inventory.", ". $option4Inventory?></td>
                <td><?php echo $option1Inventory * $option1Cost.", " . $option2Inventory * $option2Cost .", ". $option3Inventory * $option3Cost.", ". $option4Inventory * $option4Cost?></td>
                <td><?php echo $sold?></td>
                <td><?php echo $Revenue ?></td>
                <td><?php echo $Profit ?></td>

                <?php
                }
                }
                else
                {
                    echo "No data available at this time";
                }
                ?>
        </table>
    </div>
    <hr>
</form>


</body>
</html>