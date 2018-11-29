<<?php include('../DBConnection/DBconnection.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='home'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Customize your Bracelets!</h2>
    </div>

    <div class="container">
        <div id="btnContainer"
    </div>
    <br>

    <div class="row">
        <br>
        <h2>  BRACELETS</h2>
        <div class="column" style="background-color:antiquewhite;">

            <img src="Images/gm1.jpg" alt="GMBraclets1" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
            <p><h3>Gemcolor?</h3>
            <label for="Gemcolor"><b>Color</b></label>
            <select name="color" id="color">
                <option value="" selected="selected">Select</option>
                <option value="">Blue</option>
                <option value="">Red</option>
                <option value="">Green</option>
                <option value="">Cyan</option>
                <option value="">Brown </option>
            </select>


            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>
        <div class="column" style="background-color:white;">
            <img src="gm2" alt="GMbraclet2" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>

            <label for="color"><b>GEM Color</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option>

                <option value="">Blue</option>
                <option value="">Red</option>
                <option value="">Green</option>
                <option value="">Cyan</option>
            </select>


            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>
        <div class="column" style="background-color:antiquewhite;">
            <img src="gm2" alt="GMbraclet3" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>

            <label for="color"><b>GEM Color</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option>
                <option value="">Cyan</option>
                <option value="">Green</option>
                <option value="">Brown</option>
                <option value="">Blue</option>
            </select>


            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>


    </div>