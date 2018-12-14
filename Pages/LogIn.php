<?php include('../Process/LogIn_Process.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
    </head>

    <body>
    <?php $currentPage ='LogIn'; include 'header.php'; ?>
    <body background="../Images/bg4.jpg">
        <form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
            <div class="container">
                <h2>Welcome to Awesome Jewelry!</h2>
                <p>Please login to shop at the world's best Jewelry Store.</p>
                <span class="error"><?php echo $Login_Error ;?></span></br>
                <hr>
                <label for="Fname"><b>Username</b></label>
                <span class="error"><?php echo $Username_Error ;?></span>
                <input type="text" placeholder="john@email.com" name="Username" value="<?= $Username?>" autofocus>

                <label for="Fname"><b>Password</b></label>
                <span class="error"><?php echo $Password_Error ;?></span>
                <input type="password" name="Password" placeholder="Password" value="<?= $Password ?>">

                <div class="clearfix">
                    <button type="submit" name="submit" class="signupbtn">Log In</button>
                    <button type="button" name="Cancel" onClick="document.location.href='index.php';" class="cancelbtn">Cancel</button>
                </div>
            </div>

        </form>
    </body>
</html>