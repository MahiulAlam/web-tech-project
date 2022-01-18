<html>
<head>
<title> Search food into textbox </title>

<style>


body{
    background-color: whitesmoke;
}

input{
    width :40%;
    height: 12%;
    border-radius : 05px;
    paddind: 8px 15px 8px 15 px;
    margin: 10px 0px 15px opx;
    box-shadow: 1px 1px 2px 1px grey;
}


</style>

</head>
<link rel= "stylesheet" type= "text/css" href= "../Employee/color.css">
<body>


<center>
<div class="wdd">


<h1> Search FOOD with Food id <h1>

<form action="" method="Post">
<input type="text" name="id" placeholder="Enter ID To Search"/> <br/>
<input  input class="top" type="submit" name="search"value="Search Data">

</div>

</form>


<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

if(isset($_POST['search']))
{
    $fid = $_POST['id'];
    $query = "SELECT *FROM foodlist where fid= '$fid' ";
    $query_run = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($query_run))

    {
        ?>

        <from action="" method="POST">
        <input type="text" name="fid" value= "<?php echo $row['fid'] ?>"/><br>
        <input input class="topp" type="text" name="fname" value= "<?php echo $row['fname'] ?> "/><br>
        <input input class="topps" type="text" name="fquantity" value= "<?php echo $row['fquantity'] ?> "/><br>
        <input input class="toppp" type="text" name="fprice" value= "<?php echo $row['fprice'] ?> "/><br>
        

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