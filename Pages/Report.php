<?php include('../DBConnection/DBconnection.php');

$NECKLACES = $EARRINGS = $SETS = $WEDDINGBRACELETS = $GMBRACELETS = $BABYBRACELETS = $MOTHERBRACELETS = $EVERYDAYJEWELRY = 5; 

//SELECT COUNT(`productID`) FROM `CART` WHERE `productID` IN (SELECT `productID` FROM `EARRINGS`) GROUP BY `productID`
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM NECKLACES);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $NECKLACES = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM EARRINGS);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $EARRINGS = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM SETS);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $SETS = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM WEDDINGBRACELETS);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $WEDDINGBRACELETS = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM GMBRACELETS);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $GMBRACELETS = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM BABYBRACELETS);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $BABYBRACELETS = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM MOTHERBRACELETS);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $MOTHERBRACELETS = $rows['total']; }}
$sql = $dbCon ->query("SELECT COUNT(productID) as total FROM CART WHERE productID IN (SELECT productID FROM EVERYDAYJEWELRY);");
if($sql ->num_rows != 0){while ($rows = $sql->fetch_assoc()){ $EVERYDAYJEWELRY = $rows['total']; }}

$dataPoints = array( 
	array("y" => $NECKLACES, "label" => "Necklaces" ),
	array("y" => $EARRINGS, "label" => "Earring" ),
	array("y" => $SETS, "label" => "Sets" ),
	array("y" => $WEDDINGBRACELETS, "label" => "Wedding Bracelets" ),
	array("y" => $GMBRACELETS, "label" => "GM's Bracelets" ),
	array("y" => $BABYBRACELETS, "label" => "Baby Bracelets" ),
	array("y" => $MOTHERBRACELETS, "label" => "Mother's Bracelets" ),
	array("y" => $EVERYDAYJEWELRY, "label" => "Everyday Jewelry" )
);

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
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>

<body>
<?php $currentPage ='Report'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Yearly Report</h2>
        <p></p>
        <hr>
		<div id="YearlyReport" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </div>
</form>
</body>
</html>