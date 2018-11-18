<?php


include('../DBConnection/DBconnection.php');

$Fname = $Lname = $Email = $Address = $Address2 = $City = $State = $Zip = $Country = "";
$Fname_Error = $Lname_Error = $Email_Error = $Address_Error = $Address2_Error = $City_Error = $State_Error = $Zip_Error = $Country_Error = "";
$IsError = "false";

//if (isset($_POST['submit']))
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //First Name
    $IsError = "false";
    $InputValue = $_POST["Fname"];
    if (validateInput($InputValue) == "true")
    {
        $Fname = DoublecheckText($InputValue);
        $Fname_Error = "";
    }
    else{
        $Fname_Error = validateInput($InputValue);
    }

    //Last Name
    $InputValue = $_POST["Lname"];
    if (validateInput($InputValue) == "true")
    {
        $Lname = DoublecheckText($InputValue);
        $Lname_Error = "";
    }
    else{
        $Lname_Error = validateInput($InputValue);
    }

    //email
    $InputValue = $_POST["email"];
    if (validateInput($InputValue) == "true")
    {
        $Email = DoublecheckText($InputValue);
        $Email_Error = "";
    }
    else{
        $Email_Error = validateInput($InputValue);
    }
    if (!filter_var($InputValue, FILTER_VALIDATE_EMAIL)) {
        $Email_Error = "Invalid email format";
        $IsError = "true";
    }

    //Address
    $InputValue = $_POST["address"];
    if (validateInput($InputValue) == "true")
    {
        $Address = DoublecheckText($InputValue);
        $Address_Error = "";
    }
    else{
        $Address_Error = validateInput($InputValue);
        $IsError = "true";
    }

    //Address2
    $InputValue = $_POST["address2"];
    if (!empty($InputValue))
    {
        $Address2 = DoublecheckText($InputValue);
    }

    //City
    $InputValue = $_POST["city"];
    if (validateInput($InputValue) == "true")
    {
        $City = DoublecheckText($InputValue);
        $City_Error = "";
    }
    else{
        $City_Error = validateInput($InputValue);
        $IsError = "true";
    }

    //State
    $InputValue = $_POST["state"];
    if (validateInput($InputValue) == "true")
    {
        $State = DoublecheckText($InputValue);
        $State_Error = "";
    }
    else{
        $State_Error = validateInput($InputValue);
        $IsError = "true";
    }

    //zip
    $InputValue = $_POST["zip"];
    if (validateZipInput($InputValue) == "true")
    {
        $Zip = DoublecheckText($InputValue);
        $Zip_Error = "";
    }else{
        $Zip_Error = validateZipInput($InputValue);
        $IsError = "true";
    }

    //Country
    $InputValue = $_POST["country"];
    if (validateInput($InputValue) == "true")
    {
        $Country = DoublecheckText($InputValue);
        $Country_Error = "";
    }
    else{
        $Country_Error = validateInput($InputValue);
        $IsError = "true";
    }

    date_default_timezone_set("America/New_York");
    $dateval = date("Y-m-d h:i:sa");

    if ($IsError == "false")
    {
        $sql_add = "INSERT INTO USER (fname,lname,email,address1,address2,city,state,zip,country,date)
			VALUES ('$Fname','$Lname','$Email','$Address','$Address2','$City','$State','$Zip','$Country','$dateval')";

        if (mysqli_query($dbCon, $sql_add))
        {
            header('Location: /Pages/ConfirmationPage.php');
        }
        else
        {
            echo  "Error: " . $sql_add . "<br>" . mysqli_error($dbCon);
        }
    }

}

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

function validateZipInput($value)
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

    if((!preg_match("/^([0-9]{5})?$/i",$value)) && (!preg_match("/^([0-9]{5})(-[0-9]{4})?$/i",$value))) // check if name only contains correct Zip
    {
        $ValueIsInvalid = "Invalid Entry, Must be between 5-9 digits";
        $Error = true;
        $IsError = "true";
        return $ValueIsInvalid;
    }
    if ($Error == false)
    {
        return "true";
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