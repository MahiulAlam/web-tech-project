<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function CheckUserone($conn,$table,$username)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
 return $result;
 }

 

function InsertUser($conn,$table,$firstname, $username, $email,$password,$birthdate,$gender)
{
    $result = "INSERT INTO " . $table . " (firstname,username,email,password,birthdate,gender)
    VALUES('$firstname','$username','$email','$password','$birthdate','$gender')";
    if ($conn->query($result) === TRUE) {
        echo "New record created successfully";
        return $result;
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
}

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$password,$birthdate,$gender)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', password='$password',birthdate='$birthdate', gender='$gender' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}