<?php include('../DBConnection/DBconnection.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='confirmationPage'; include 'header.php'; ?>
<form class="modal-content" style="width:50%">
    <body background="../Images/bg4.jpg">
    <div class="container">
        <h2>Thank you for Registering!</h2>
        <p>You can now shop our Awesome Jewelry.</p>
        <p>Have a great journy!</p>
        <hr>
        <div class="clearfix" style="width:40%">
            <Button type="button" class="signupbtn" onClick="document.location.href='index.php';"/>Return Home!</Button>
        </div>

    </div>
</form>
</body>
</html>