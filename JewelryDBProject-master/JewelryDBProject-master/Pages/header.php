<!DOCTYPE html>
<html>
<head>
    <title>MLK Volunteer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='../styles/style.css' />
</head>
<div id="wrapperHeader">
    <div id="header">
        <div class = "center">
        </div>
    </div>
</div>
    <body>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>

        <?php
        session_start();
        if($_SESSION['adminFlag'] == 1 )
        {
        ?>
            <li><a href="Report.php">Report</a></li>
            <li><a href="RegisteredUserReport.php">UserTable</a></li>
        <?php }?>

        <li><a href="AboutUs.php">About US</a></li>

        <li class="active" style="float:right"><a href="">Cart</a></li>



        <?php
        session_start();
        if($_SESSION['loggedIn'] == "True" )
        {
            ?>
            <li style="float:right"><a href="../Process/LogOut_Process.php">Logout</a></li>
        <?php }else{ ?>
            <li style="float:right"><a href="Register.php">Register</a></li>
            <li style="float:right"><a href="LogIn.php">LogIn</a></li>
        <?php } ?>

    </ul>
    </body>
</html>