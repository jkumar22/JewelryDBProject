<?php include('../DBConnection/DBconnection.php');

$userID = $_SESSION['userID']; //User ID

$userId = $Fname = $Lname = $Email = $CreditCard = $Phone = $Address1 = $Address2 = $City = $State = $Zip = $Country = $Rating = "";


$sql = $dbCon ->query("SELECT * FROM USER WHERE userID = '$userID'");
    if($sql ->num_rows != 0)
    {
        while ($rows = $sql->fetch_assoc())
        {
            $userId = $rows['userID'];                    
            $Fname = $rows['fname'];
            $Lname = $rows['lname'];
            $Email = $rows['email'];
            $CreditCard = substr($rows['creditCard'],-4);
            $Address1 = $rows['address1'];
            $Address2 = $rows['address2'];
            $City = $rows['city'];
            $State = $rows['state'];
            $Zip = $rows['zip'];
            $Country = $rows['country'];
        }
    }
        if (isset($_POST['submitRating']))
        {
            $Rating = strip_tags($_POST['rating']);
            $sql = $dbCon ->query("UPDATE USER SET rating = '$Rating'  WHERE userID = '$userID'");
            $message = "Thank you for rating us!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            // printing the changed recor
            header('Location: home.php');
        }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='confirmationPage'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "PurchaseConfirmation.php">
    <div class="container">
        <h2>Thank you <?= $Fname ?>,for Purchasing Awesome Jewellery!</h2>
        <p>Your Jewelary is on your way.</p>
        <p><b>Shipped to:</b></p>
        <p><?= $Fname ?> <?= $Lname ?></p>
        <p><?= $Address1 ?></p>
        <p><?= $Address2 ?></p>
        <p><?= $City ?> <?= $State ?>, <?= $Zip ?></p>
        <p><b>Using CreditCard ending with:</b> <?= $CreditCard ?> </p>
        </br>
        <hr>
        <p> <h3>Please rate us!</h3></p>
        <div class="clearfix" style="width:40%">
            <select name="rating">
                <option value="1"<?php if ( $Rating=="1") echo "selected";?>>1</option>
                <option value="2"<?php if ( $Rating=="2") echo "selected";?>>2</option>
                <option value="3"<?php if ( $Rating=="3") echo "selected";?>>3</option>
                <option value="4"<?php if ( $Rating=="4") echo "selected";?>>4</option>
                <option value="5"<?php if ( $Rating=="5") echo "selected";?>>5</option>
            </select>
        </div>
        <div class="clearfix" style="width:40%">
            <button type="submit" name="submitRating" class="signupbtn">Rate</button>
        </div>
        <div class="clearfix" style="width:40%">
            <Button type="button" class="signupbtn" onClick="document.location.href='index.php';"/>Return Home!</Button>
        </div>
    </div>

    </div>
        </br></br></br></br>

    </div>
</form>
</body>
</html>