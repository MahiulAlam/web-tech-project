<?php
include('../Admin/db.php');
 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
echo "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"registration",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['password'],$_POST['birthdate'],$_POST['gender']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);
}
}

else if(isset($_POST["logout"]))
    {
        session_start();
        header("Location: Login.php");
    }  
?>