<?php include('../Process/Ragister_Process.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<form class="modal-content" method="post" style="width:50%" action= "<?= $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <div class="container">
        <button type="button" name="Cancel" class="cancelbtn" onClick="document.location.href='RegisteredUserReport.php'">UserTable</button>
        </br></br></br>

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

        <label for="address"><b>Address</b></label>
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
            <option value="AL"<?php if ( $State=="AL") echo "selected";?>>Alabama</option>
            <option value="AK"<?php if ( $State=="AK") echo "selected";?>>Alaska</option>
            <option value="AZ"<?php if ( $State=="AZ") echo "selected";?>>Arizona</option>
            <option value="AR"<?php if ( $State=="AR") echo "selected";?>>Arkansas</option>
            <option value="CA"<?php if ( $State=="CA") echo "selected";?>>California</option>
            <option value="CO"<?php if ( $State=="CO") echo "selected";?>>Colorado</option>
            <option value="CT"<?php if ( $State=="CT") echo "selected";?>>Connecticut</option>
            <option value="DE"<?php if ( $State=="DE") echo "selected";?>>Delaware</option>
            <option value="DC"<?php if ( $State=="DC") echo"selected";?>>District Of Columbia</option>
            <option value="FL"<?php if ( $State=="FL") echo "selected";?>>Florida</option>
            <option value="GA"<?php if ( $State=="GA") echo "selected";?>>Georgia</option>
            <option value="HI"<?php if ( $State=="HI") echo "selected";?>>Hawaii</option>
            <option value="ID"<?php if ( $State=="ID") echo "selected";?>>Idaho</option>
            <option value="IL"<?php if ( $State=="IL") echo "selected";?>>Illinois</option>
            <option value="IN"<?php if ( $State=="IN") echo "selected";?>>Indiana</option>
            <option value="IA"<?php if ( $State=="IA") echo "selected";?>>Iowa</option>
            <option value="KS"<?php if ( $State=="KS") echo "selected";?>>Kansas</option>
            <option value="KY"<?php if ( $State=="KY") echo "selected";?>>Kentucky</option>
            <option value="LA"<?php if ( $State=="LA") echo "selected";?>>Louisiana</option>
            <option value="ME"<?php if ( $State=="ME") echo "selected";?>>Maine</option>
            <option value="MD"<?php if ( $State=="MD") echo "selected";?>>Maryland</option>
            <option value="MA"<?php if ( $State=="MA") echo "selected";?>>Massachusetts</option>
            <option value="MI"<?php if ( $State=="MI") echo "selected";?>>Michigan</option>
            <option value="MN"<?php if ( $State=="MN") echo "selected";?>>Minnesota</option>
            <option value="MS"<?php if ( $State=="MS") echo "selected";?>>Mississippi</option>
            <option value="MO"<?php if ( $State=="MO") echo "selected";?>>Missouri</option>
            <option value="MT"<?php if ( $State=="MT") echo "selected";?>>Montana</option>
            <option value="NE"<?php if ( $State=="NE") echo "selected";?>>Nebraska</option>
            <option value="NV"<?php if ( $State=="NV") echo "selected";?>>Nevada</option>
            <option value="NH"<?php if ( $State=="NH") echo "selected";?>>New Hampshire</option>
            <option value="NJ"<?php if ( $State=="NJ") echo "selected";?>>New Jersey</option>
            <option value="NM"<?php if ( $State=="NM") echo "selected";?>>New Mexico</option>
            <option value="NY"<?php if ( $State=="NY") echo "selected";?>>New York</option>
            <option value="NC"<?php if ( $State=="NC") echo "selected";?>>North Carolina</option>
            <option value="ND"<?php if ( $State=="ND") echo "selected";?>>North Dakota</option>
            <option value="OH"<?php if ( $State=="OH") echo "selected";?>>Ohio</option>
            <option value="OK"<?php if ( $State=="OK") echo "selected";?>>Oklahoma</option>
            <option value="OR"<?php if ( $State=="OR") echo "selected";?>>Oregon</option>
            <option value="PA"<?php if ( $State=="PA") echo "selected";?>>Pennsylvania</option>
            <option value="RI"<?php if ( $State=="RI") echo "selected";?>>Rhode Island</option>
            <option value="SC"<?php if ( $State=="SC") echo "selected";?>>South Carolina</option>
            <option value="SD"<?php if ( $State=="SD") echo "selected";?>>South Dakota</option>
            <option value="TN"<?php if ( $State=="TN") echo "selected";?>>Tennessee</option>
            <option value="TX"<?php if ( $State=="TX") echo "selected";?>>Texas</option>
            <option value="UT"<?php if ( $State=="UT") echo "selected";?>>Utah</option>
            <option value="VT"<?php if ( $State=="VT") echo "selected";?>>Vermont</option>
            <option value="VA"<?php if ( $State=="VA") echo "selected";?>>Virginia</option>
            <option value="WA"<?php if ( $State=="WA") echo "selected";?>>Washington</option>
            <option value="WV"<?php if ( $State=="WV") echo "selected";?>>West Virginia</option>
            <option value="WI"<?php if ( $State=="WI") echo "selected";?>>Wisconsin</option>
            <option value="WY"<?php if ( $State=="WY") echo "selected";?>>Wyoming</option>
        </select><BR>

        <label for="zip"><b>Zipcode</b></label>
        <span class="error"><?php echo $Zip_Error ;?></span>
        <input type="text" placeholder="Enter Zipcode" name="zip" value="<?= $Zip ?>">

        <label for="country"><b>Country</b></label> <BR>
        <span class="error"><?php echo $Country_Error;?></span>
        <select name="country" id="country">
            <option value="USA">United States of America</option>
        </select>

        <div class="clearfix">
            <button type="submit" name="submit" class="signupbtn">Sign Up</button>
            <button type="button" name="Cancel" class="cancelbtn">Cancel</button>
        </div>
    </div>
</form>
</body>
</html>