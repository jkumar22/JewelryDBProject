<?php include('../DBConnection/DBconnection.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='Complaint'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>We're sorry for the inconvenience.</h2>
        <p>Let us know what went wrong to help serve you better!</p>
        <hr>
               <!-- <span class="error"><?php echo $Login_Error ;?></span></br> -->
                <label><p><u>Please provide more information about the Product</u></p></label></br>


                <label><b>OrderID</b></label>
                <!-- <span class="error"><?php echo $Username_Error ;?></span> -->
                <input type="text" placeholder="Enter Order ID" name="OrderID" value="" autofocus>

                <label><b>Product ID</b></label>
                <!-- <span class="error"><?php echo $Password_Error ;?></span> -->
                <input type="text" placeholder="ProductID" name="ProductID" value="">

                <label for="Fname"><b>Description</b></label>
                <!-- <span class="error"><?php echo $Password_Error ;?></span> -->
                <input type="text" name="Description" placeholder="Enter a brif description of the problem you are having" value="">

                <div class="clearfix">
                    <button type="submit" name="submit" class="signupbtn">Submit </button>
                    <button type="button" name="Cancel" onClick="document.location.href='index.php';" class="cancelbtn">Cancel</button>
                </div>
            </div>

        </form>
    </body>
</html>