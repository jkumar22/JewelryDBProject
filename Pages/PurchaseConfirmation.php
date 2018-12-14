<?php include('../DBConnection/DBconnection.php');

$userID = $_SESSION['userID']; //User ID

$userId = $Fname = $Lname = $Email = $CreditCard = $Phone = $Address1 = $Address2 = $City = $State = $Zip = $Country = "";


$sql = $dbCon ->query("SELECT * FROM USER WHERE userID = '$userID'");
    if($sql ->num_rows != 0)
    {
        while ($rows = $sql->fetch_assoc())
        {
            $userId = $rows['userID'];                    
            $Fname = $rows['fname'];
            $Lname = $rows['lname'];
            $Email = $rows['email'];
            $CreditCard = substr($rows['creditCard'],-4);
            $Phone = $rows['phone'];
            $Address1 = $rows['address1'];
            $Address2 = $rows['address2'];
            $City = $rows['city'];
            $State = $rows['state'];
            $Zip = $rows['zip'];
            $Country = $rows['country'];
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='confirmationPage'; include 'header.php'; ?>
<form class="modal-content" style="width:50%">
    <div class="container">
        <h2>Thank you <?= $Fname ?>,for Purchasing Awesome Jewellery!</h2>
        <p>Your Jewelary is on your way.</p>
        <p><b>Shipped to:</b></p>
        <p><?= $Fname ?> <?= $Lname ?></p>
        <p><?= $Address1 ?></p>
        <p><?= $Address2 ?></p>
        <p><?= $City ?> <?= $State ?>, <?= $Zip ?></p>
        <p><b>Using CreditCard ending with:</b> <?= $CreditCard ?> </p>
        </br>
        <hr>
        <div class="clearfix" style="width:40%">
            <Button type="button" class="signupbtn" onClick="document.location.href='index.php';"/>Return Home!</Button>
        </div>
    </div>
    <div class="container">
        <div class="rate">
        <p> Please rate us!</p>
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
        <style>
           * {
                margin: 0;
                padding: 0;
            }
            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }
            .rate:not(:checked) > input {
                position:absolute;
                top:-9999px;
            }
            .rate:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ccc;
            }
            .rate:not(:checked) > label:before {
                content: '★ ';
            }
            .rate > input:checked ~ label {
                color: deepskyblue;
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
                color: #deb217;
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
                color: #c59b08;
            }
        </style>
    </div>
    </div>
</form>
</body>
</html>