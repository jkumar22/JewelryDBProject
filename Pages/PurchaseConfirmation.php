<?php include('../DBConnection/DBconnection.php');

$userID = $_SESSION['userID']; //User ID

$userId = $Fname = $Lname = $Email = $CreditCard = $Phone = $Address1 = $Address2 = $City = $State = $Zip = $Country = "";


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
            $Phone = $rows['phone'];
            $Address1 = $rows['address1'];
            $Address2 = $rows['address2'];
            $City = $rows['city'];
            $State = $rows['state'];
            $Zip = $rows['zip'];
            $Country = $rows['country'];
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='confirmationPage'; include 'header.php'; ?>
<form class="modal-content" style="width:50%">
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
        <div class="clearfix" style="width:40%">
            <Button type="button" class="signupbtn" onClick="document.location.href='index.php';"/>Return Home!</Button>
        </div>

    </div>
</form>
</body>
</html>