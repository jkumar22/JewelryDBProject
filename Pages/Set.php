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
        <h2>Sets!</h2>
    </div>
<body>

<h2>SETS</h2>

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <h2>SET1</h2>
        <p>Price $50</p>
        <img src="s5.jpg"/>
    </div>
    <div class="column" style="background-color:#bbb;">
        <h2>SET2</h2>
        <p>Price $75</p>
        <img src="s3.jpg"/>
    </div>
</div>
<div class="row">
    <div class="column" style="background-color:#ccc;">
        <h2>SET3</h2>
        <p>Price $100</p>
        <img src="s1.jpg"/>
    </div>
    <div class="column" style="background-color:#ddd;">
        <h2>SET4</h2>
        <p>Price $80</p>
        <img src="s2.jpg"/>
    </div>
</div>

</body>
</html>

