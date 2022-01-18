<?php 
include('../Employee/pinfo.php');



$username=$password="";
?>

<html>
    <head>

    <link rel= "stylesheet" type= "text/css" href= "../Employee/color.css" >
</head>
<center>
<div class="wdd">

        <title> Employee Login</title>
    </head>
    <body>
        <center><h1 style="background-color:violet;">Login</h1></center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td style="background-color:grey;" align="left">User Name:</td>
                        <td align="left"><input type="text" value="<?php echo $username;?>" name="username"></td>
                        <td align="left"><span style="color:red;">*<?php echo $error;?></span></td>
                    </tr>
                    <tr>
                        <td style="background-color:grey;" align="left">Password:</td>
                        <td align="left"><input type="password" value="<?php echo $password;?>" name="password"></td>
                        <td align="left"><span style="color:red;">*<?php echo $error;?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input input class="top" type="submit" name="submit" value="Login">
                        </td>
                    </tr>
                    </div>
                </table>
            </form>
        </center>
        <tr><td input class="top" align="left"><a href="employeeRegistration.php"><input  input class="top"  type="submit" name="search"value=" Sign Up?"></a></td>
    </body>
</html>