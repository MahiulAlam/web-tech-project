<?php 
include('../Admin/Logincheck/Logincheck.php');
?>

 
<html>
    <head>
        <title> Admin Login</title>
    </head>
    <link rel= "stylesheet" type= "text/css" href= "../Admin/Css/mycsstwo.css" >
    <div class="topnav">
<a href="Login.php">Admin Login</a>
<a href="restuarant.php">Registration</a>
<a href="homepage.php">Home</a>
</div>

    <body>
       

       <center>
            <div class="login-box">
            <div class="form-box">
            <h1>ADMIN LOGIN</h1>
       
            <form action="" method="POST">
                <table>
                    <tr>
                    
                        <td align="left"><p4>User Name:</p4></td>
                        <td align="left"><div class="textbox"><input type="text" name="username" placeholder="Username"><?php echo $error;?></div></td>
                        <td align="left"><span style="color:red;"></span></td>
                       
                    </tr>
                    <tr>
                    
                        <td align="left"><p4>Password:</p4></td>
                        <td align="left"><div class="textbox"><input type="password" name="password" placeholder="Password"><?php echo $error;?></div></td>
                        <td align="left"><span style="color:red;"></span></td>
                       
                    </tr>
                    <tr>
                       
                           <br><br><td><input class="btn" type="submit" name="submit" value="Sign in">
                           <br><br><input class="btn" type="submit" name="back" value="Sign up ?"></td> 
                            </div>
                            </div>

</center>
                    </tr>
                </table>
            </form>
     
    </body>
</html>