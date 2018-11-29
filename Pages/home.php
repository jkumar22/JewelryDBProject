<?php include('../DBConnection/DBconnection.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='home'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Welcome to Awesome Jewelry Home!</h2>
        <p>Buy the best Jewelry in the world.</p>
        <div>

        <div id="btnContainer"
        </div>
    <br>

        <div class="row">
     <h2>EARRINGS</h2>
        <div class="column" style="background-color:antiquewhite;">

            <img src="pearlring.jpg" alt="earring1" width="100" height="100" align="middle">
            <p><b>Price: 7$</b></p>            <a href="#" class="button">Add to cart</a>
        </div>

        <div class="column" style="background-color:white;">

            <img src="img1" alt="earring2" width="100" height="100" align="middle">
            <p><b>Price: 15$</b></p>
            <a href="#" class="button">Add to cart</a>
        </div>
        <div class="column" style="background-color:antiquewhite;">

            <img src="img1.jpg" alt="earring3" width="100" height="100" align="middle">
            <p><b>Price: 17$</b></p>
            <a href="#" class="button">Add to cart</a>
        </div>

            <style>
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                cursor: pointer;

            .column
            {
                padding:0 15px 0 15px;
            }

        </style>


    </div>
        <div class="container">
            <div id="btnContainer"
            </div>
            <br>

        <div class="row">
            <br>
            <h2> BABY BRACELETS</h2>
            <div class="column" style="background-color:antiquewhite;">

                <img src="Images/pearlring.jpg" alt="earring1" width="100" height="100" align="middle">
                <p><b>Price: 7$</b></p>

                <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

            </div>

        </div>
        <style>
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 25px;
                text-align: left;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                cursor: pointer;

            .column
            {
                padding:0 50px 0 50px;
                width: 75px;
            }

        </style>

    </div>

</form>
</body>
</html>