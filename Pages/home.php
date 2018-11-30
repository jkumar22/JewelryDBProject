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
              <img src="..\Images\er.jpg" alt="earring1" width="100" height="100" align="middle" >
            <p><b>Price: 7$</b></p>
              <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart" value="1">Add to Cart</button>

          </div>
            <div class="column" style="background-color:white;">

            <img src="..\Images\er2.jpg" alt="earring2" width="100" height="100" align="middle">
            <p><b>Price: 15$</b></p>
                <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart"> Add to Cart</button>
            </div>
            <div class="column" style="background-color:antiquewhite;">

                <img src="..\Images\er4.jpg" alt="earring3" width="100" height="100" align="middle">
                <p><b>Price: 15$</b></p>
                <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';class="Add to Cart"> Add to Cart</button>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">4 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
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
            <div id="btnContainer">
            </div>
            <br>

          <div class="row">
            <br>
            <h2> BABY BRACELETS</h2>
            <div class="column" style="background-color:antiquewhite;">
                <img src="..\Images\cb1.jpg" alt="BabyBracelet1" width="100" height="100" align="middle">
                <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

           </div>
            <div class="column" style="background-color:white;">
                <img src="..\Images\cb2.jpg" alt="BabyBracelet2" width="100" height="100" align="middle">
                <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

            </div>
              <div class="column" style="background-color:antiquewhite;">
                  <img src="..\Images\cb3.jpg" alt="BabyBracelet3" width="100" height="100" align="middle">
                  <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

              </div>





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
                    <div id="btnContainer">
                </div>
                <br>

                <div class="row">
                    <br>
                    <h2> MOTHER'S BRACELETS</h2>
                    <div class="column" style="background-color:antiquewhite;">
                        <img src="..\Images\mb6.jpg" alt="MotherBracelet1" width="100" height="100" align="middle">
                        <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                    </div>
                    <div class="column" style="background-color:white;">
                        <img src="..\Images\mb2.jpg" alt="MotherBracelet2" width="100" height="100" align="middle">
                        <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                    </div>
                    <div class="column" style="background-color:antiquewhite;">
                        <img src="..\Images\mb3.jpg" alt="MotherBracelet3" width="100" height="100" align="middle">
                        <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                    </div>


                    <style>
                        .button {
                            background-color: #4CAF50;
                            border: none;
                            color: white;
                            padding: 15px 15px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 14px;
                            margin: 4px 2px;
                            cursor: pointer;

                    </style>
                </div>
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
                <div id="btnContainer">
                </div>
                <br>
                <div class="row">
                <br>
                <h2>SETS</h2>
                <div class="column" style="background-color:antiquewhite;">
                    <h6>Set1</h6>

                    <img src="..\Images\s5.jpg"alt="s5" width="100" height="100" align="middle">
                    <p>Price $50</p>
                    <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart"> Add to Cart</button>
                </div>

                <div class="column" style="background-color:white;">
                    <h6>Set2</h6>

                    <img src="..\Images\s3.jpg"alt="s3" width="100" height="100" align="middle">
                    <p>Price $75</p>
                    <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart"> Add to Cart</button>
                </div>


                <div class="column" style="background-color:antiquewhite;">


                    <h6>Set3</h6>
                <img src="..\Images\s1.jpg"alt="s1" width="100" height="100" align="middle">
                    <p>Price $65</p>
                   <button type="button" name="Add to Cart" onClick="document.location.href='Cart.php';"class="Add to Cart"> Add to Cart</button>
                </div>
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
                    <div id="btnContainer">
                    </div>
                    <br>

                    <div class="row">
                        <br>
                        <h2>GMBRACELETS</h2>
                        <div class="column" style="background-color:antiquewhite;">
                            <h6>GMBracelet1</h6>
                            <img src="..\Images\gm5.jpg" alt="gm5" width="100" height="100" align="middle">
                            <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                        </div>
                        <div class="column" style="background-color:white;">
                            <h6>GMBracelet2</h6>
                            <img src="..\Images\gm1.jpg" alt="gm1" width="100" height="100" align="middle">
                            <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                        </div>
                        <div class="column" style="background-color:antiquewhite;">
                            <h6>GMBracelet3</h6>
                            <img src="..\Images\gm3.jpg" alt="gm3" width="100" height="100" align="middle">
                            <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                        </div>
                    </div>


    </div>
        <div class="container">
            <div id="btnContainer">
            </div>
            <br>

            <div class="row">
                <br>
                <h2>WEDDING BRACELETS</h2>
                <div class="column" style="background-color:antiquewhite;">
                    <h2>WeddingBracelet1</h2>
                    <img src="..\Images\W1.jpg" alt="W1" width="100" height="100" align="middle">
                    <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                </div>
                <div class="column" style="background-color:white;">
                    <h6>WeddingBracelet2</h6>
                    <img src="..\Images\W2.jpg" alt="W2" width="100" height="100" align="middle">
                    <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                </div>
                <div class="column" style="background-color:antiquewhite;">
                    <h6>WeddingBracelet3</h6>
                    <img src="..\Images\W3.jpg" alt="W3" width="100" height="100" align="middle">
                    <button type="button" name="Customize" onClick="document.location.href='Customizebracelet.php';"class="Customize"> Customize</button>

                </div>
            </div>
        </div>

        <div class="container">
        <div id="btnContainer">
        </div>
        <br>


</form>
</body>
</html>