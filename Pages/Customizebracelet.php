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
        <h2> BABY BRACELETS</h2>
        <div class="column" style="background-color:antiquewhite;">

            <img src="Images/pearlring.jpg" alt="babybracelet1" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
                <select name="Size">
                    <option value="">Select...</option>
                    <option value="S">S(0-24 months)</option>
                    <option value="M">M(2+)</option>
                    <option value="L">(3+</option>
                </select>

            <label for="color"><b>Color</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option>
                <option value="">Gold</option>
                <option value="">Silver</option></select>

            <label for="BabyName"><b>Baby's Name</b></label>
            <input type="text" placeholder="Enter Baby's Name" name="BabyName" autofocus>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>
        <div class="column" style="background-color:white;">
            <img src="img1" alt="babybracelet2" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S(0-24 months)</option>
                <option value="M">M(2+)</option>
                <option value="L">(3+</option>
            </select>

            <label for="color"><b>Color</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option>
                <option value="">Gold</option>
                <option value="">Silver</option></select>

            <label for="BabyName"><b>Baby's Name</b></label>
            <input type="text" placeholder="Enter Baby's Name" name="BabyName" autofocus>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>
        <div class="column" style="background-color:antiquewhite;">
            <img src="img1" alt="babybracelet2" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S(0-24 months)</option>
                <option value="M">M(2+)</option>
                <option value="L">(3+</option>
            </select>

            <label for="color"><b>Color</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option>
                <option value="">Gold</option>
                <option value="">Silver</option></select>

            <label for="BabyName"><b>Baby's Name</b></label>
            <input type="text" placeholder="Enter Baby's Name" name="BabyName" autofocus>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>


    </div>