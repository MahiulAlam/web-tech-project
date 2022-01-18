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




function InsertUser($conn,$table,$firstname,$username,$email,$password,$birthdate,$gender,$address,$mobilenumber,$registrationtime)
{
    $result = "INSERT INTO " . $table . " (firstname,username,email,password,birthdate,gender,address,mobilenumber,registrationtime)
    VALUES('$firstname','$username','$email','$password','$birthdate','$gender','$address','$mobilenumber','$registrationtime')";
    if ($conn->query($result) === TRUE) {
        echo "New record created successfully";
        return $result;
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
}


function InsertUsertwo($conn,$table,$fid,$fname,$fquantity,$fprice)
{
    $result = "INSERT INTO " . $table . " (fid,fname,fquantity,fprice)
    VALUES('$fid','$fname','$fquantity','$fprice')";
    if ($conn->query($result) === TRUE) {
        echo "New FOOD item added successfully";
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


function CloseCon($conn)
 {
 $conn -> close();
 }
}