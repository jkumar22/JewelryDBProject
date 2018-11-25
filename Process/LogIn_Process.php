<?php

include('../DBConnection/DBconnection.php');

$Username = $Password = "";
$Username_Error = $Password_Error = $Login_Error= "";
$dbUsername = $dbUsername = $dbPassword = $dbadminFlag = ""; 
$IsError = "false";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $IsError = "false";
    //email
    $InputValue = $_POST["Username"];
    if (validateInput($InputValue) == "true")
    {
        $Username = DoublecheckText($InputValue);
        $Username_Error = "";
    }
    else{
        $Username_Error = validateInput($InputValue);
    }
    if (!filter_var($InputValue, FILTER_VALIDATE_EMAIL)) {
        $Username_Error = "Invalid Username";
        $IsError = "true";
    }

    //password
    $InputValue = $_POST["Password"];
    if (empty($_POST["Password"])) {
        $Password_Error= "Missing Password";
        $isError = true;
    }else {
        $Password = DoublecheckText($InputValue);
    }

    if ($IsError == "false")
    {
//        $message = $Password;
//        echo "<script type='text/javascript'>alert('$message');</script>";
//        echo $Password;
        $sql = "SELECT userID, email, password, adminFlag FROM LOGIN WHERE email = '$Username' AND password = '$Password'";
        //$sql = "SELECT * FROM LOGIN";
        $result = mysqli_query($dbCon, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $userId = $row["userID"];
                $dbUsername = $row["email"];
                $dbPassword = $row["password"];
                $dbadminFlag = $row["adminFlag"];
            }
        }
        if ($Username == $dbUsername && $Password == $dbPassword)
        {


            echo $Username . " : " . $dbUsername . "<br>";
            echo $Password . " : " . $dbPassword . "<br>";
            echo $dbadminFlag . "<br>";

            $_SESSION['loggedIn'] = "True";
            $_SESSION['userID'] = $userId;
            $_SESSION['adminFlag'] = $dbadminFlag;

            if($dbadminFlag == 1){
                echo "Admin is logged in";
            }
            else if($dbadminFlag == 0){
                echo "User is logged in";
            }

            $sql = "SELECT fname FROM USER WHERE userID = '$userId'";
            $result = mysqli_query($dbCon, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['fname'] = $row["fname"];
                }
            }
            echo $Username . " : " . $_SESSION['fname'] . "<br>";

            header('Location: index.php');
        }
        else
            {
                $_SESSION['loggedIn'] = "False";
                $_SESSION['adminFlag'] = 0;
                $message = "Username and/or Password incorrect.\\nTry again.";
            //echo "<script type='text/javascript'>alert('$message');</script>";
            $Password = "";
            $Login_Error = "Invalid Login Credentials, Try Again!" ;

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