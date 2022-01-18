<?php
include('db.php');
session_start(); 

$validatename=$validateemail=$firstname=$email=$validatepassword=$password=$validateusername=$username=$gender=$validateaddress=$validatemobilenumber="";
$validatepassword=$validatebirthdate=$validateregistrationtime=$confirmpassword=$v1=$v2=$v3="";


    if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $connection = new db();
    $conobj=$connection->OpenCon();
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $confirmpassword = $_POST["confirmpassword"];
    $address = $_POST["address"];
   $mobilenumber = $_POST["mobilenumber"];
   $registrationtime = $_POST["registrationtime"];


    $userQuery=$connection->InsertUser($conobj,"employee",$firstname,$username,$email,$password,$birthdate,$gender,$address,$mobilenumber,$registrationtime);

    if(empty($_POST["firstname"])||!preg_match("/^[a-zA-Z-' ]*$/",$firstname))
    {
        $validatename="Valid Name is required.";
    }
    else{
            $validatename="Your Name is ".$firstname;
        }


        if(empty($_POST["address"])||!preg_match("/^[a-zA-Z-' ]*$/",$address))
    {
        $validateaddress="Valid address is required.";
    }
    else{
            $validateaddress="Your address is ".$address;
        }


    if (empty($_POST["email"]) || !preg_match("/@/",$email)) {
        $validateemail = "Valid Email is required";
    } 
    else{
        $validateemail = "Your email is ".$email;
    }
    
    if ( $birthdate==null)
    {   
        $validatebirthdate = "you have to select your birthday ";
    }

    if ( $mobilenumber==null)
    {   
        $validatemobilenumber = "you have to select your mobileNumber ";
    }



    if ( $registrationtime==null)
    {   
        $validateregistrationtime = "you have to select your registrationtime ";
    }


    if(empty($password))
    {
        $validatepassword = "Invalid password";
    }
    elseif((strlen($password))<6)
    {
        $validatepassword="Atleast 6";
    }
    elseif(!preg_match("/@#%/",$password))
    {
        $validatepassword="Use at least one /@#%/";
    }
    else{
        $validatepassword = "Your password successful ";
    }

    if(empty($username)|| (strlen($username))<5)
    {
        $validateusername = "Invalid user name";
    }
    else{
        $validateusername = "Your username is ".$username;
    }

    if($password!=$confirmpassword){
        $validatecpassword = "Password doesn't match.";
    }

   

    else{

    if(isset($_POST["gender1"])){
        echo $v1=$_POST["gender1"];
    }
    elseif(isset($_POST["gender2"])){
        echo $v2=$_POST["gender2"];
    }elseif(isset($_POST["gender3"])){
        echo $v3=$_POST["gender3"];
    }
 }
 $connection->CloseCon($conobj);
 }

 ?>


<!DOCTYPE HTML>
<html>

<style>
body {
  background: url("fd.jpg")no-repeat;
  background-size: cover;
}
.wordcolor{
    background:rgb(213, 156, 174);
}
.form-box{
    width: 500px;
    background: rgba(255,93,71,0.8);
    margin: auto;
    padding: 40px 0;
    color:#fff;
    box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
}

h1{
        color:rgb(255, 113, 47);
        margin-left: 20px;
    }

</style>

<head>
<link rel= "stylesheet" type= "text/css" href= "../Employee/color.css" >

</head>

<body>

<div class="form-box">

 <center>
    <h1 style="background-color:green;"> Employee Registration </h1>



    <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="post" name="form" onsubmit="return validated()" >
    
        <table>
            <tr> <td style="background-color:violet;">Name:</td>
                <td> <input type="text" name="firstname"> <?php echo $validatename;?> 
                <div id="name_error"></div></td></tr>
                
            <tr>
                <td style="background-color:violet;" >User Name:</td>
                <td><input type="text" name="username"> <?php echo $validateusername;?>
                <div id="username_error"></div></td></tr>



                <tr>
                <td style="background-color:violet;" >Email:</td>
                <td><input type="text" name="email"> <?php echo $validateemail;?>
                <div id="email_error"></div></td></tr>


           
            <tr>
                <td style="background-color:violet;" >Password:</td>
                <td><input type="password" name="password"> <?php echo $validatepassword;?>
                <div id="password_error"></div></td></tr>


           
            <tr>
                <td style="background-color:violet;" >Confirm Password:</td>
                <td><input type="password" name="confirmpassword"> <?php echo $validatepassword;?></td></tr>
               



            <tr>
                <td style="background-color:violet;" >Gender</td>
                <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                    <?php echo $v1;?>
                    <?php echo $v2;?>
                    <?php echo $v3;?>

                
                <div id="gender_error"></div></td>


            </tr>
            <tr>
                <td style="background-color:violet;" >Date of Birth <br></td>
                <td><input type="date" name="birthdate"> <?php echo $validatebirthdate;?> 
            </tr>
            <div id="birthdate_error"></div></td>



            <tr> <td style="background-color:violet;" >Address:</td>
                <td> <input type="text" name="address"> <?php echo $validateaddress;?> 
                <div id="address_error"></div></td></tr>



                <tr> <td style="background-color:violet;" >MobileNumber:</td>
                <td> <input type="text" name="mobilenumber"> <?php echo $validatemobilenumber;?> 
                <div id="mobilenumber_error"></div></td></tr>


                <tr>
                <td style="background-color:violet;" >Registration Time <br></td>
                <td><input type="date" name="registrationtime"> <?php echo $validateregistrationtime;?> </td></tr>
           


            <tr>

                <td><input input class="top" type="submit" value="submit">
                    
                </td>
               

            </tr>

</div>

            

        </table>
        <tr><td align="left"><a href="login.php">LOGIN</a></td>
</center>




    </form>
    <script src="../Employee/val.js"></script>
</body>

</html>