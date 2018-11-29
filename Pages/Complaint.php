
/**
 * Created by PhpStorm.
 * User: Deekshita
 * Date: 29-11-2018
 * Time: 11:55
 */
<?php include('home.php.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2> We're sorry for the inconvenience. </h2>
        <p>Let us know what went wrong to help serve you better!</p>
        <hr>
    </div>

<label for="complaint"><b>Complaint</b></label>
        <input type="text" name="Order ID" placeholder="Enter Order ID" autofocus>
    <input type="text" name="Product ID" placeholder="Enter Product ID" autofocus>
    <input type="text" name="Complaint" placeholder="Type here" autofocus>
    <button type="button" name="Submit" onClick="document.location.href='Report.php';"class="Submit">Submit

    </button>
</form>
</body>
</html>