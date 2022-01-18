<!DOCTYPE html>
<html>
<head>

<title> Delete Food </title>
<style>




input{
    width: 60%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;


}
</style>

</head>
<link rel= "stylesheet" type= "text/css" href= "../Employee/color.css" >
<body>
   <center>
   <div class="wdd">
     <h1> Delete Food </h1>
     <form action="" method="POST">
     <input type="text" name="id" placeholder="Enter id to delete food item" /></br>
     <input input class="top" type="submit" name="delete" value= "Delete food item" /><br>
     </form>
     </div>
     </center>
     </table>
        <tr><td align="left"><a href="all.php" input class="topp" > Previous Page</a></td>
     </body>
     </html>





<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);



//$conn = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($conn, 'mydb');

if(isset($_POST['delete']))

{
    $fid = $_POST['id'];

    $query = "DELETE FROM foodlist WHERE fid='$fid' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Delete") </script>';
    }

    else{

        echo '<script type="text/javascript"> alert("Data is not Delete") </script>';
    } 

}

?>



