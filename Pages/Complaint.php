<?php include('../DBConnection/DBconnection.php');
$productID = $purchaseID = $description = "";
$userID = $_SESSION['userID'];
$IsError = "false";
$productID = $purchaseID = $description = "";
$productID_Error = $purchaseID_Error = $description_Error = "";

if (isset( $_GET['secureVar1'] ) && isset( $_GET['secureVar2'] ) )
{
    $productID = $_GET['secureVar1']; // ProductID
    $purchaseID = $_GET['secureVar2'];
}

if (isset($_POST['submitComplain']))
{
    $IsError = "false";

    $InputValue = $_POST["productID"];
    if (validateInput($InputValue) == "true")
    {
        $productID = DoublecheckText($InputValue);
        $productID_Error = "";
    }
    else{
        $productID = DoublecheckText($InputValue);
        $productID_Error = validateInput($InputValue);
        $IsError = "True";

    }

    $InputValue = $_POST["purchaseID"];
    if (validateInput($InputValue) == "true")
    {
        $purchaseID = DoublecheckText($InputValue);
        $purchaseID_Error = "";
    }
    else{
        $purchaseID = DoublecheckText($InputValue);
        $purchaseID_Error = validateInput($InputValue);
        $IsError = "True";

    }

    $InputValue = $_POST["description"];
    if (validateInput($InputValue) == "true")
    {
        $description = DoublecheckText($InputValue);
        $description_Error = "";
    }
    else{
        $description = DoublecheckText($InputValue);
        $description_Error = validateInput($InputValue);
        $IsError = "True";

    }

    if ($IsError == "false")
    {

        $sql_add = "INSERT INTO complain (productID,purchaseID,userID,description)
                VALUES ('$productID','$purchaseID','$userID','$description')";

        if (mysqli_query($dbCon, $sql_add)) {
            $message = "Thank you for your feedback!!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Location: home.php');

        } else {
            echo "Error: " . $sql_add . "<br>" . mysqli_error($dbCon);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage ='Complaint'; include 'header.php'; ?>
    <body background="../Images/bg4.jpg">
        <form class="modal-content" method="post" style="width:50%" action="Complaint.php">
            <div class="container">
                <h2>We're sorry for the inconvenience.</h2>
                <p>Let us know what went wrong to help serve you better!</p>
                <hr>
                <label><p><u>Please provide more information about the Product</u></p></label></br>
                <label><b>OrderID</b></label>
                <span class="error"><?php echo $purchaseID_Error ;?></span>
                <input type="text" placeholder="Enter Order ID" name="purchaseID" value="<?= $purchaseID ?>" autofocus>

                <label><b>Product ID</b></label>
                <span class="error"><?php echo $productID_Error ;?></span>
                <input type="text" placeholder="ProductID" name="productID" value="<?= $productID ?>">

                <label for="Fname"><b>Description</b></label>
                <span class="error"><?php echo $description_Error ;?></span>
                <input type="text" name="description" placeholder="Enter a brif description of the problem you are having" value="">

                <div class="clearfix">
                    <button type="submit" name="submitComplain" class="signupbtn">Submit </button>
                    <button type="button" name="Cancel" onClick="document.location.href='index.php';" class="cancelbtn">Cancel</button>
                </div>
            </div>
        </form>
    </body>
</html>

<?php

function validateInput($value)
{
    $valueIsEmpty = $ValueIsInvalid = "";
    $Error = false;

    if(empty($value))
    {
        $valueIsEmpty = "Required!";
        $Error = true;
        $IsError = "true";
        return $valueIsEmpty;
    }
    else if (!preg_match("/^[0-9a-zA-Z ].*$/",$value))// check if name only contains letters and whitespace
    {
        $ValueIsInvalid = "Invalid Entry";
        $Error = true;
        $IsError = "true";
        return $ValueIsInvalid;
    }
    else if ($Error == false)
    {
        $Good = "true";
        return $Good;
    }
}
function DoublecheckText($data)
{
    $data = strip_tags($data);
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>