<?php

session_start();

$_SESSION['loggedIn'] = "False";
$_SESSION['adminFlag'] = 0;
$_SESSION['userID'] = "";

$message = "You have logged out.\\nCOME BACK SOON!!";
echo "<script type='text/javascript'>alert('$message');</script>";

header('Location: ../Pages/index.php');

?>