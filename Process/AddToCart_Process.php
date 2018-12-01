<?php

include('../DBConnection/DBconnection.php');

$Username = $Password = "";
$Username_Error = $Password_Error = $Login_Error= "";
$dbUsername = $dbUsername = $dbPassword = $dbadminFlag = ""; 
$IsError = "false";

if($_SERVER["REQUEST_METHOD"] == "AddtoCart")
{
	header('Location: ../Pages/Cart.php');
}

?>