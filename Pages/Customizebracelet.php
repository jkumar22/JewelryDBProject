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

            <img src="" alt="babybracelet1" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
                <select name="Size">
                    <option value="">Select...</option>
                    <option value="S">S(0-24 months)</option>
                    <option value="M">M(2+)</option>
                    <option value="L">(3+</option>
                </select>

            <label for="color"><b>Color</b></label>
            <select name="color" id="color">
                <option value="" selected="selected">Select</option>
                <option value="">Gold</option>
                <option value="">Silver</option></select>*

            <label for="BabyName"><b>Baby's Name</b></label>
            <input type="text" placeholder="Enter Baby's Name" name="BabyName" autofocus required>
            <p><b>Price: 17$</b></p>
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
            <p><b>Price: 25$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>
        <div class="column" style="background-color:antiquewhite;">
            <img src="" alt="babybracelet2" width="100" height="100" align="middle">
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
            <p><b>Price:$35</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

        </div>


    </div>
    <div class="container">
        <div id="btnContainer"
    </div>
    <br>

    <div class="row">
        <br>
        <h2> MOTHER'S BRACELETS</h2>
        <div class="column" style="background-color:antiquewhite;">

            <img src="" alt="motherbracelet1" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

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
                <option value="">Green</option>

            </select>

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

            <img src="" alt="motherbracelet2" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

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
                <option value="">Green</option>

            </select>

            <label for="shape"><b>Shape</b></label>
            <select name="shape" id="shape">
                <option value="" selected="selected">Select</option>
                <option value="">circle</option>
                <option value="">oval</option>
                <option value="">triangle</option>
                <option value="">random</option>
            </select>
            <p><b>Price: 217$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>
        <div class="column" style="background-color:antiquewhite;">

            <img src="" alt="motherbracelet3" width="100" height="100" align="middle">
            <p><h3>Size?</h3>
            <select name="Size">
                <option value="">Select...</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

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
                <option value="">Green</option>

            </select>

            <label for="shape"><b>Shape</b></label>
            <select name="shape" id="shape">
                <option value="" selected="selected">Select</option>
                <option value="">circle</option>
                <option value="">oval</option>
                <option value="">triangle</option>
                <option value="">random</option>
            </select>
            <p><b>Price: 127$</b></p>
            <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
        </div>

        iv class="container">
        <div id="btnContainer">
        </div>
        <br>

        <div class="row">
            <br>
            <h2> GM BRACELETS</h2>
            <div class="column" style="background-color:antiquewhite;">

                <img src="Images/gm1.jpg" alt="GMBraclets1" width="100" height="100" align="middle">
                <p><h3>Size</h3>
                <select name="Size">
                    <option value="">Select...</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
                <p><h3>Gemcolor</h3>
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

                <label for="color"><b>GemColor</b></label>
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

                <label for="color"><b>GemColor</b></label>
                <select name="color" id="colot">
                    <option value="" selected="selected">Select</option>
                    <option value="">Cyan</option>
                    <option value="">Green</option>
                    <option value="">Brown</option>
                    <option value="">Blue</option>
                </select>


                <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>

    </div>
</form>
</body>
</html>
