<html>
    <head>
        <title>Employee Panel</title>
        <link rel= "stylesheet" type= "text/css" href= "../Admin/Css/mycsstwo.css" >
        <div class="topnav">
<a href="admins.php">My Home</a>
<a href="Employeeup.php">Employee</a>
<a href="Customerup.php">Customer</a>
<a href="delivarymanup.php">Delivary Man</a>
</div>
        <style>

input{

width:150px;
height:5%;
border:1px;
border-radius:05px;
padding:8px 15px 8px 15px;
margin:10px 0px 15px 0px;
box-shadow:1px 1px 2px 1px gray;

}

            </style>
</head>
<body>
    <center>
    <div class="form-boxfour">
<h1>As-Salamu-Alayqum<br>
Welcome to Employee Panel </h1>
</div>
    <div class="input">
    <div class="form-boxsix">
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Username"><br>
            <input type="submit" name="search" value="Search Data">
            <input type="submit" name="delete" value="Dalete">
            <input type="submit" name="finish" value="Finish">
            </div>
</div>
            
            
</form>



<?php
#include('../Project/db.php');
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $connection = new mysqli($dbhost, $dbuser, $dbpass,$db);
if(isset($_POST['search']))
{
    if (empty($_POST['id']))
    {
echo "You must insert or valid username";

    }
    else
    {

$id=$_POST['id'];
$query="SELECT * FROM employee where username='$id'";
#$userQuery=$connection->CheckUser($conobj,'employee',$id);
$query_run= mysqli_query($connection,$query);


while($row = mysqli_fetch_array($query_run))
{
    
?>
<form action="" method="POST">
<div class="form-boxthree">
    <tr><td>Name:</td>
    <td><input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"/></td><tr>

    <tr><td>Username:</td>
    <td><input type="text" name="username" value="<?php echo $row['username'] ?>"/></td><tr>

    <tr><td>Email:</td>
    <td><input type="text" name="email" value="<?php echo $row['email'] ?>"/><br></td><tr>

    <tr><td>Password:</td>
    <td><input type="text" name="password" value="<?php echo $row['password'] ?>"/></td><tr>

    <tr><td>Birthdate:</td>
    <td><input type="text" name="birthdate" value="<?php echo $row['birthdate'] ?>"/><br></td><tr>

    <tr><td>Gender:</td>
    <td><input type="text" name="gender" value="<?php echo $row['gender'] ?>"/></td><tr>

    <tr><td>Address:</td>
    <td><input type="text" name="address" value="<?php echo $row['address'] ?>"/><br></td><tr>

    <tr><td>Number:</td>
    <td><input type="text" name="mobilenumber" value="<?php echo $row['mobilenumber'] ?>"/></td><tr>

    <tr><td>Join Date:</td>
    <td><input type="text" name="registrationtime" value="<?php echo $row['registrationtime'] ?>"/><br></td><tr>
    <input type="submit" name="update" value="Update"><br>
</div>
</form>


<?php


}
    }
}


if(isset($_POST['delete']))
{
$iid=$_POST['id'];
$queryone="DELETE FROM employee WHERE username='$iid'";
$query_runone=mysqli_query($connection,$queryone);
if($query_runone)
{
echo "Data Delete";

}
else
{
echo "Data not delete";
}
}
?>
</center>
</body>
</html>


<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $connection = new mysqli($dbhost, $dbuser, $dbpass,$db);
if(isset($_POST['update']))
{
    $fname=$_POST['firstname'];
    $uname=$_POST['username'];
    $eemail=$_POST['email'];
    $password=$_POST['password'];
    $Bdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $mobilenumber=$_POST['mobilenumber'];
    $rtime=$_POST['registrationtime'];

    $querytwo="UPDATE employee SET firstname='$_POST[firstname]',username='$_POST[username]',email='$_POST[email]',password='$_POST[password]',birthdate='$_POST[birthdate]',gender='$_POST[gender]',address='$_POST[address]',mobilenumber='$_POST[mobilenumber]',registrationtime='$_POST[registrationtime]' where username='$_POST[username]' ";
$query_runtwo=mysqli_query($connection,$querytwo);
if($query_runtwo)
{
    echo'<script> alert("successfull update")</script>';
}
else
{
    echo'<script> alert("Update fail")</script>';
}
}
?>
<?php

if(isset($_POST['finish']))
{

    header("Location: Employeeup.php");

}
?>