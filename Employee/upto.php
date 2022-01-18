<html>
<head>
<title>Update Food Menu</title>
<head>

<link rel= "stylesheet" type= "text/css" href= "../Employee/color.css" >
<body>

<div class="form-boxone">



<style>
<style>



body{
    background-color: blue;
}
input{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15 px;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;
}


</style>
</head>
<body>
   <center>
<h1> Search Data and Update Menu </h1>
<form action= "" method="POST" style="background-color: pink">
<input type="text" name="id" placeholder="Enter id"/><br/>
<input input class="top" type="submit" name="search" value="Search Data"/>



</form>



<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if(isset($_POST['search']))
{
  
 
$fid=$_POST['id'];
$query="SELECT *FROM foodlist where fid='$fid'";
#$userQuery=$connection->CheckUser($conobj,'employee',$id);
$query_run= mysqli_query($conn,$query);
 
while($row = mysqli_fetch_array($query_run))
{
    
?>
<form action="" method="POST">

<td><input input class="topp" type="text" name="fid" value="<?php echo $row['fid'] ?>"/></td><tr>
 
    
    <td><input input class="topp" type="text" name="fname" value="<?php echo $row['fname'] ?>"/></td><tr>
 
   
    <td><input input class="topp" type="text" name="fquantity" value="<?php echo $row['fquantity'] ?>"/></td><tr>
 
 
    <td><input input class="topp" type="text" name="fprice" value="<?php echo $row['fprice'] ?>"/><br></td><tr>
 
  
    
    <input input class="topp" type="submit" name="update" value="Update"><br>

</form>
 
<?php
 
 
    }
}
 
 
?>
</center>
</table>
        <tr><td  align="left"><a href="all.php" input class="topp" > Previous Page</a></td>

</body>
</html>
 
<?php
 
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn= new mysqli($dbhost, $dbuser, $dbpass,$db);
if(isset($_POST['update']))
{
    $fid=$_POST['fid'];
    $fname=$_POST['fname'];
    $fquantity=$_POST['fquantity'];
    $fprice=$_POST['fprice'];
 
    $querytwo="UPDATE foodlist SET fid='$_POST[fid]',fname='$_POST[fname]',fquantity='$_POST[fquantity]',fprice='$_POST[fprice]' where fid='$_POST[fid]' ";
$query_runtwo=mysqli_query($conn,$querytwo);
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
