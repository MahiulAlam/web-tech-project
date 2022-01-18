<!DOCTYPE HTML>
<html>


<head>

<link rel= "stylesheet" type= "text/css" href= "../Employee/color.css" >
<style>
body {
  background: url("ph.jpg")no-repeat;
  background-size: cover;
}

</style>
</head>



<body>

<div class="form-boxone">

<?php

include('db.php');
session_start(); 

$validatefid=$validatefname=$validatefquantity=$validatefprice="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $connection = new db();
   $conobj=$connection->OpenCon();
   $fid = $_POST["fid"];
   $fname = $_POST["fname"];
   $fquantity = $_POST["fquantity"];
   $fprice = $_POST["fprice"];


   $userQuery=$connection->InsertUsertwo($conobj,"foodlist",$fid,$fname,$fquantity,$fprice);

   if ( $fid==null)
    {   
        $validatefid = "you have to select your food id ";
    }


    if ( $fname==null)
    {   
        $validatefname = "you have to select your food name ";
    }


    if ( $fquantity==null)
    {   
        $validatefquantity = "you have to select food quantity ";
    }


    if ( $fprice==null)
    {   
        $validatefprice = "you have to select food price ";
    }


}



?>

 <center>
    <h1> Main Menu Card For Add Food</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post">
    
        <table>

                
        <tr> <td>fid:</td>
                <td> <input class="btn" type="text" name="fid"><?php echo $validatefid;?></td></tr>
           
        <tr> <td>fname:</td>
                <td> <input class="btn" type="text" name="fname"><?php echo $validatefname;?></td></tr>

       <tr> <td>fquantity:</td>
                <td> <input class="btn" type="text" name="fquantity"><?php echo $validatefquantity;?></td></tr>
           
        <tr> <td>fprice:</td>
                <td> <input class="btn" type="text" name="fprice"><?php echo $validatefprice;?></td></tr>
               
                <tr>

                <td><input input class="top" type="submit" value="confirm">
                   
                </td>
               

            </tr>
        
            

        
</center>
</table>
        <tr><td align="left"><a href="all.php" input class="topp"> Previous Page</a></td>
    </form>

    
</body>

</html>