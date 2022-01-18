<?php
  include "connection.php";

session_start();
/*if(isset($_POST['submit']))
      {*/
        $count=0;
        $sql="SELECT UserName from `users`";
        $res=mysqli_query($db,$sql);

        $first = $_POST["first"];
        $last = $_POST["last"];
        $password = $_POST["password"];
        $emai = $_POST["email"];

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['UserName']==$last)
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
         /* mysqli_query($db,"INSERT INTO `users` VALUES('', '".$_POST["first"]."', '".$_POST["last"]."', '".$_POST["password"]."', 'Customer', '".$_POST["email"]".', '');");*/
         mysqli_query($db,"INSERT INTO `users` VALUES('', '$first', '$last', '$password', 'Customer', '$emai', '');");
   
       
        }
     

     
 
?>
