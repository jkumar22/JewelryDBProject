<?php include('../Process/Ragister_Process.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage = 'Register'; include 'header.php'; ?>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>">
    <div class="container">
        <h2>Welcome to Awesome Jewelry!</h2>
        <p>Register to buy the best Jewelry in the world. It has magic powers.</p>
        <hr>

        <label for="Fname"><b>First Name</b></label>
        <span class="error"><?php echo $Fname_Error ;?></span>
        <input type="text" placeholder="Enter First Name" name="Fname" value="<?= $Fname ?>" autofocus>

        <label for="Lname"><b>Last Name</b></label>
        <span class="error"><?php echo $Lname_Error ;?></span>
        <input type="text" placeholder="Enter Last Name" name="Lname" value="<?= $Lname ?>">

        <label for="email"><b>Email</b></label>
        <span class="error"><?php echo $Email_Error ;?></span>
        <input type="text" placeholder="Enter Email" name="email" value="<?= $Email ?>">

        <label for="password"><b>Password</b></label>
        <span class="error"><?php echo $Password_Error ;?></span>
        <input type="password" name="Password" placeholder="Password" value="<?= $Password ?>">

        <label for="password"><b>Confirm Password</b></label>
        <span class="error"><?php echo $ConfirmPassword_Error ;?></span>
        <input type="password" name="ConfirmPassword" placeholder="Confirm Password" value="<?= $ConfirmPassword ?>">

        <label for="CreditCard"><b>Credit Card</b></label>
        <span class="error"><?php echo $CreditCard_Error ;?></span>
        <input type="text" name="CreditCard" placeholder="4115105553560544" value="<?= $CreditCard ?>">

        <div style="width:100%;">
            <div style="width:20%; float:left; margin-right:50px">
                <label for="cvv"><b>CVV</b></label>
                <span class="error"><?php echo $cvv_Error ;?></span>
                <input type="text" placeholder="434" name="cvv" value="<?= $cvv ?>">
            </div>
            <div style="width:30%; float:left; margin-right:10px">
                <label for="cvv"><b>Experation date</b></label>
                <span class="error"><?php echo $ExperationDate_Error ;?></span>
                <input type="text" placeholder="11/2019" name="ExperationDate" value="<?= $ExperationDate ?>">
            </div>
        </div>
        </br></br></br></br></br>

        <label for="address"><b>Shipping Address</b></label>
        <span class="error"><?php echo $Address_Error;?></span>
        <input type="text" placeholder="Enter Address" name="address" value="<?= $Address ?>">

        <label for="address2"><b>Address2</b></label>
        <span class="error"><?php echo $Address2_Error;?></span>
        <input type="text" placeholder="apt. 123" name="address2" value="<?= $Address2 ?>">

        <label for="city"><b>City</b></label>
        <span class="error"><?php echo $City_Error ;?></span>
        <input type="text" placeholder="Enter City name" name="city" value="<?= $City ?>">

            <label for="state"><b>State</b></label>
            <span class="error"><?php echo $State_Error;?></span>
            <select name="state" id="state">
                <option value="" selected="selected">Select a State</option>
                <?php 
                    $sql = $dbCon ->query("SELECT * FROM ZipCode");
                    if($sql ->num_rows != 0)
                    {
                        while ($rows = $sql->fetch_assoc())
                        {
                            $ID = $rows['ZipID'];
                            $StateName = $rows['StateName'];
                            $StateAbbreviation = $rows['StateAbbreviation'];
                            $ZipMinimum = $rows['ZipMinimum'];
                            $ZipMaximum = $rows['ZipMaximum'];
                            $ShippingCost = $rows['ShippingCost'];
                ?>
            <option value="<?= $ID ?>"<?php if ( $State=="<?= $ID ?>") echo "selected";?>><?= $StateName ?></option>
                <?php }}?>
            </select><BR>

        <label for="zip"><b>Zipcode</b></label>
        <span class="error"><?php echo $Zip_Error ;?></span>
        <input type="text" placeholder="Enter Zipcode" name="zip" value="<?= $Zip ?>">

        <label for="country"><b>Country</b></label> <BR>
        <span class="error"><?php echo $Country_Error;?></span>
        <select name="country" id="country">
            <option value="USA">United States of America</option>
        </select>
        <div id="section2">
            <label>Receive our newsletter<input type="checkbox" name="newsletter" value="Yes" checked="checked"><span class="checkmark"></span></label>
        </div>
        <div class="clearfix">
            <button type="submit" name="submit" class="signupbtn">Sign Up</button>
            <button type="button" name="Cancel" onClick="document.location.href='index.php';" class="cancelbtn">Cancel</button>
        </div>
    </div>
</form>
</body>
</html>