
<!DOCTYPE html>
<html>
<head>
    <title>Awesome Jewelry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='../styles/style.css' />
</head>
    <body>
    <ul>
        <li class="<?php if($currentPage =='home'){echo 'active';}?>"> <a href="index.php">Home</a> </li>
        <!-- <li class="<?php if($currentPage =='homeOld'){echo 'active';}?>"> <a href="homeOld.php">HomeOld</a> </li> -->

        <?php
        if(isset($_SESSION['loggedIn']))
        {
            if($_SESSION['adminFlag'] == 1 )
            { 
        ?>
                <!-- <li class="<?php if($currentPage =='homeOld'){echo 'active';}?>"> <a href="Customizebracelet.php">Customize</a> </li> -->
                <!-- <li class="<?php if($currentPage =='homeOld'){echo 'active';}?>"> <a href="CustomizebraceletOld.php">CustomizeOld</a> </li> -->
                <li class="<?php if($currentPage =='Report'){echo 'active';}?>"> <a href="Report.php">Report</a></li>
                <li class="<?php if($currentPage =='Registered User'){echo 'active';}?>"> <a href="RegisteredUserReport.php">DB Tables</a></li>
                <!-- <li class="<?php if($currentPage =='Complaint'){echo 'active';}?>"> <a href="Complaint.php">Complaint</a></li> -->

        <?php 
            } 
        } 
        ?>

        <li class="<?php if($currentPage =='About'){echo 'active';}?>"><a href="AboutUs.php">About US</a></li>
        <li class="<?php if($currentPage =='cart'){echo 'active';}?>" style="float:right"><a href="Cart.php">Cart</a></li>

        <?php
            if(isset($_SESSION['loggedIn']))
            {
                if($_SESSION['loggedIn'] == "True" )
                {
                    ?>
                    <li style="float:right"><a href="../Process/LogOut_Process.php">Logout</a></li>
                    <li style="float:right" class="<?php if($currentPage =='user'){echo 'active';}?>"><a href="PurchaseHistory.php"><?php echo $_SESSION['fname'] ?> </a></li>

                    <?php 
                }
                else{ ?>
                    <li style="float:right" class="<?php if($currentPage =='Register'){echo 'active';}?>"> <a href="Register.php">Register</a></li>
                    <li style="float:right" class="<?php if($currentPage =='LogIn'){echo 'active';}?>"> <a href="LogIn.php">LogIn</a></li>
                    <?php 
                } 
            }else{ ?>
                    <li style="float:right" class="<?php if($currentPage =='Register'){echo 'active';}?>"> <a href="Register.php">Register</a></li>
                    <li style="float:right" class="<?php if($currentPage =='LogIn'){echo 'active';}?>"> <a href="LogIn.php">LogIn</a></li>
        <?php }?>

    </ul>
    </body>
</html>