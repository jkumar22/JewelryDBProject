<?php include('../DBConnection/DBconnection.php');

$size = $BabyName = $color= ""; 


if (isset($_POST['Remove']))
{
        $size = $_POST['size'];
        $color = $_POST['Bcolor'];
        $BabyName = $_POST['BabyName'];

        //$Option = "Size:" . $size . " Color:" . $color . " Name:" . $name;
        Echo $size;
        echo $color;
        echo $BabyName;
        //Echo $Option;

    // printing the changed recor
}?>

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
        <div id="btnContainer"></div>
    <br>
        <div class="row">
        <br>
        <h2> BABY BRACELETS</h2>
        <div class="column" style="background-color:antiquewhite;">
            <img src="..\Images\cb1.jpg" alt="babybracelet1" width="100" height="100" align="middle">
            <p><h3>Size?</h3>

                <select name="size">
                    <option value="S" <?= $size == 'S' ? ' selected="selected"' : "" ?>>S(0-24 months)</option>
                    <option value="M" <?= $size == 'M' ? ' selected="selected"' : "" ?>>M(2+)</option>
                    <option value="L" <?= $size == 'L' ? ' selected="selected"' : "" ?>>(3+</option></select>
            
            <label for="color"><b>Color</b></label>
            
            <select name="Bcolor">
                <option value="Gold"   <?= $color == 'Gold' ? ' selected="selected"' : "" ?> >Gold</option>
                <option value="Silver" <?= $color == 'Silver' ? ' selected="selected"' : "" ?> >Silver</option>
            </select>

            <label for="BabyName"><b>Baby's Name</b></label>
            
            <input type="text" placeholder="Enter Baby's Name" name="BabyName" value="<?= $BabyName ?>" autofocus>
            
            <p><b>Price: 17$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
            <button type="submit" name="Remove" value="<?= $productID ?>" >Add</button>

        </div>
        <div class="column" style="background-color:white;">
            <img src="..\Images\cb2.jpg" alt="babybracelet2" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S(0-24 months)</option>
                <option value="M">M(2+)</option>
                <option value="L">(3+</option></select>
            <label for="color"><b>Color</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option>
                <option value="">Gold</option>
                <option value="">Silver</option></select>
            <label for="BabyName"><b>Baby's Name</b></label>
            <input type="text" placeholder="Enter Baby's Name" name="BabyName">
            <p><b>Price: 25$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>
        <div class="column" style="background-color:antiquewhite;">
            <img src="..\Images\cb3.jpg" alt="babybracelet2" width="100" height="100" align="middle">
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
            <input type="text" placeholder="Enter Baby's Name" name="BabyName">
            <p><b>Price:$35</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div></div>
    <div class="container">
        <div id="btnContainer"></div>
    <br>
        <div class="row">
        <br>
        <h2> MOTHER'S BRACELETS</h2>
        <div class="column" style="background-color:antiquewhite;">
            <img src="..\Images\mb6.jpg" alt="motherbracelet1" width="100" height="100" align="middle">
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
            <p><b>Price: $117</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>
        <div class="column" style="background-color:white;">
            <img src="..\Images\mb2.jpg" alt="motherbracelet2" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="XS">XS</option><option value="S">S</option>
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
                <option value="">random</option></select>
            <p><b>Price: 217$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>
        <div class="column" style="background-color:antiquewhite;">
            <img src="..\Images\mb3.jpg" alt="motherbracelet3" width="100" height="100" align="middle">
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
                <option value="">random</option></select>
            <p><b>Price: 127$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div></div></div>
    <div class="row">
        <br>
        <h2>GMBRACELETS</h2>
        <div class="column" style="background-color:antiquewhite;">
            <img src="..\Images\gm5.jpg" alt="gm5" width="100" height="100" align="middle">
            <p><h3>Size</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option></select>
            <p><h3>Gemcolor</h3>
            <label for="Gemcolor"><b>Color</b></label>
            <select name="color" id="color">
                <option value="" selected="selected">Select</option>
                <option value="">Blue</option><option value="">Red</option>
                <option value="">Green</option>
                <option value="">Cyan</option><option value="">Brown </option>
            </select>
            <p><b>Price: 125$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>
        <div class="column" style="background-color:white;">
            <img src="..\Images\gm1.jpg" alt="gm5" width="100" height="100" align="middle">
            <p><h3>Size</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option></select>
            <label for="color"><b>GemColor</b></label>
            <select name="color" id="colot">
                <option value="" selected="selected">Select</option><option value="">Blue</option>
                <option value="">Red</option>
                <option value="">Green</option>
                <option value="">Cyan</option></select>
            <p><b>Price: 125$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>
        <div class="column" style="background-color:antiquewhite;">
            <img src="..\Images\gm3.jpg" alt="gm5" width="100" height="100" align="middle">
            <p><h3>Size</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option></select>
            <label for="color"><b>GemColor</b></label>
            <select name="color" id="color">
                <option value="" selected="selected">Select</option>
                <option value="">Cyan</option>
                <option value="">Green</option>
                <option value="">Brown</option>
                <option value="">Blue</option></select>
            <p><b>Price: 187$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div></div></div>

</form>
</body>
</html>