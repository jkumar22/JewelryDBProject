<?php

session_start();

session_destroy();

$message = "You have now logged out.\\nCOME BACK SOON!!";
echo "<script type='text/javascript'>alert('$message');</script>";

header('Location: ../Pages/index.php');

?>