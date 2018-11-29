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
           <div id="btnContainer">
           </div>

        <br>
           <div class="row">
        <h2>EARRINGS</h2>
          <div class="column" style="background-color:antiquewhite;">
              <img src="C:\Users\HarshalDhamade\PhpstormProjects\JewelryDBProject\Images\cb4.jpg" alt="earring1" width="100" height="100" align="middle">
            <p><b>Price: 7$</b></p>
              <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart">Add to Cart</button>
          </div>
            <div class="column" style="background-color:white;">

            <img src="" alt="earring2" width="100" height="100" align="middle">
            <p><b>Price: 15$</b></p>
                <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart"> Add to Cart</button>
            </div>
            <div class="column" style="background-color:antiquewhite;">

                <img src="" alt="earring3" width="100" height="100" align="middle">
                <p><b>Price: 15$</b></p>
                <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart"> Add to Cart</button>
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

            </style>
        </div>

        </div>
<div>
        <div class="container">
            <div id="btnContainer"
            </div>
            <br>

          <div class="row">
            <br>
            <h2> BABY BRACELETS</h2>
            <div class="column" style="background-color:antiquewhite;">
                <img src="" alt="BabyBracelet1" width="100" height="100" align="middle">
                <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

           </div>
            <div class="column" style="background-color:white;">
                <img src="" alt="BabyBracelet2" width="100" height="100" align="middle">
                <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

            </div>
              <div class="column" style="background-color:antiquewhite;">
                  <img src="" alt="BabyBracelet3" width="100" height="100" align="middle">
                  <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

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

       </style>
          </div>
        </div>

        <div class="container">
            <h2></h2>

            <div>
                <div id="btnContainer">
                </div>

                <br>
                <div class="row">
                    <h2>SETS</h2>
                    <div class="column" style="background-color:antiquewhite;">
                        <img src="" alt="set1" width="100" height="100" align="middle">
                        <p><b>Price:30$</b></p>
                        <a href="#" class="button">Add to cart</a>
                    </div>
                    <div class="column" style="background-color:white;">

                        <img src="" alt="set2" width="100" height="100" align="middle">
                        <p><b>Price: 45$</b></p>
                        <a href="#" class="button">Add to cart</a>
                    </div>
                    <div class="column" style="background-color:antiquewhite;">

                        <img src="" alt="set3" width="100" height="100" align="middle">
                        <p><b>Price: 65$</b></p>
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

                    </style>
                </div>

            </div>
            <div>
                <div class="container">
                    <div id="btnContainer"
                </div>
                <br>

                <div class="row">
                    <br>
                    <h2> MOTHER'S BRACELETS</h2>
                    <div class="column" style="background-color:antiquewhite;">
                        <img src="" alt="MotherBracelet1" width="100" height="100" align="middle">
                        <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                    </div>
                    <div class="column" style="background-color:white;">
                        <img src="" alt="MotherBracelet2" width="100" height="100" align="middle">
                        <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                    </div>
                    <div class="column" style="background-color:antiquewhite;">
                        <img src="" alt="MotherBracelet3" width="100" height="100" align="middle">
                        <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

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

                    </style>
                </div>
            </div>

</form>
</body>
</html>