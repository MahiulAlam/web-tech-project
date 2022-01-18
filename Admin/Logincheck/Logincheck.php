<?php
include('../Admin/db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) 
{
$error = "insert Username or Password or invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"registration",$username,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
setcookie("username",$username,time() + 86400);
header("Location: admins.php");
   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}
else if(isset($_POST["back"]))
    {
        session_start();
        header("Location: restuarant.php");
    }

?>