<?php include('../DBConnection/DBconnection.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='About'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <h2>Let's Learn about Awesome Jewelry!</h2>
        <p>Everyone one of us guarantee your satisfactory with our product.</p>
        <hr >
        <p>
            <B>Krishna Sahithi Devulapalli</B> </br>
            krisah@umich.edu
        </p>
        <p>
            <B>Vishvadha Kari</B> </br>
            vkari@umich.edu
        </p>
        <p>
            <B>Jay Patel</B> </br>
            jnpatel@umich.edu
        </p>
        <p>
            <B>Deekshita Seenivasan</B> </br>
            sdeekshi@umich.edu
        </p>
        <p>
            <B>Sriyashaswini Vore</B></br>
            srvore@umich.edu
        </p>
    </div>
</form>
</body>
</html>