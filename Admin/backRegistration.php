<?php
session_start();
 
if(session_destroy()) // Destroying All Sessions
{
header("Location: restuarant.php"); // Redirecting To Home Page
}
?>