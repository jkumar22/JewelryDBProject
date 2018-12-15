<?php include('../DBConnection/DBconnection.php');

$productID = $purchaseID = $description = "";
$userID = $_SESSION['userID'];

if (isset( $_GET['secureVar1'] ) && isset( $_GET['secureVar2'] ) )
{
    $productID = $_GET['secureVar1']; // ProductID
    $purchaseID = $_GET['secureVar2'];
}

if (isset($_POST['submitComplain']))
{
    $productID = strip_tags($_POST['productID']);
    $purchaseID = strip_tags($_POST['purchaseID']);
    $description = strip_tags($_POST['description']);

    $sql_add = "INSERT INTO complain (productID,purchaseID,userID,description)
			VALUES ('$productID','$purchaseID','$userID','$description')";

    if (mysqli_query($dbCon, $sql_add))
    {
        $message = "Thank you for your feedback!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
        echo  "Error: " . $sql_add . "<br>" . mysqli_error($dbCon);
    }

// printing the changed recor
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='Complaint'; include 'header.php'; ?>
<body background="../Images/bg4.jpg">
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>We're sorry for the inconvenience.</h2>
        <p>Let us know what went wrong to help serve you better!</p>
        <hr>
               <!-- <span class="error"><?php echo $Login_Error ;?></span></br> -->
                <label><p><u>Please provide more information about the Product</u></p></label></br>


                <label><b>OrderID</b></label>
                <!-- <span class="error"><?php echo $Username_Error ;?></span> -->
                <input type="text" placeholder="Enter Order ID" name="purchaseID" value="<?= $purchaseID ?>" autofocus>

                <label><b>Product ID</b></label>
                <!-- <span class="error"><?php echo $Password_Error ;?></span> -->
                <input type="text" placeholder="ProductID" name="productID" value="<?= $productID ?>">

                <label for="Fname"><b>Description</b></label>
                <!-- <span class="error"><?php echo $Password_Error ;?></span> -->
                <input type="text" name="description" placeholder="Enter a brif description of the problem you are having" value="">

                <div class="clearfix">
                    <button type="submit" name="submitComplain" class="signupbtn">Submit </button>
                    <button type="button" name="Cancel" onClick="document.location.href='index.php';" class="cancelbtn">Cancel</button>
                </div>
            </div>

        </form>
    </body>
</html>