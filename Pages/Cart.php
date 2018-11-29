<?php

include('../DBConnection/DBconnection.php');

if((isset($_SESSION['loggedIn'])) && ($_SESSION['loggedIn'] == "True" ))
{

}else
{
    $message = "Please Login to view your cart. Thank You!";
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>if(confirm('$message')){document.location.href='LogIn.php'}else{document.location.href='index.php'};</script>";
    //header('Location: LogIn.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='cart'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Your Awesome Jewelry Cart!</h2>
        <p>Fill up your cart.</p>
        <hr>
    </div>
</form>
</body>
</html>