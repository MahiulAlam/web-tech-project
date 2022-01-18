<?php
include('db.php');
session_start(); 

$validatename = $validateemail = $firstname =$validbirthdate = $email = $validatepassword = $password = $validateusername = $username = "";
$validatecpassword = $confirmpassword = $birthdate = $gender = $genderErr =$chk = "";


    if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $connection = new db();
    $conobj=$connection->OpenCon();
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $confirmpassword = $_POST["confirmpassword"];

  
    if ( $birthdate==null)
    {   
        $validbirthdate = "you have to select your birthday ";
    } 
    else if(isset($_REQUEST["birthdate"])) {
        $validbirthdate = "your birthday is " . $_REQUEST["birthdate"];
    }

    if(empty($_POST["firstname"])||!preg_match("/^[a-zA-Z-' ]*$/",$firstname))
    {
        $validatename="Valid Name is required.";
    }
    else{
            $validatename="Your Name is ".$firstname;
        }
    if (empty($_POST["email"]) || !preg_match("/@/",$email)) {
        $validateemail = "Valid Email is required";
    } 
    else{
        $validateemail = "Your email is ".$email;
    }

    if(empty($password))
    {
        $validatepassword = "Invalid password";
    }
    else if((strlen($password))<6)
    {
        $validatepassword="Atleast 6";
    }
    else if(!preg_match("/#/",$password))
    {
        $validatepassword="Use at least one /#/";
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

    if($confirmpassword == null){
        $validatecpassword = "Password dosen't match.";
    }
    else if($password == $confirmpassword) {
        $validatecpassword = "Password match.";
     
    }
   
    if (!isset($_REQUEST["gender"])) {
        $genderErr = " you have to select gender";
    }  else {
        $gender = $_REQUEST["gender"];
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery=$connection->InsertUser($conobj,"registration",$firstname,$username,$email,$password,$birthdate,$gender);
        $connection->CloseCon($conobj);
    }
    

 }
 

 ?>

<!DOCTYPE HTML>
<html>

<link rel= "stylesheet" type= "text/css" href= "../Admin/Css/mycsstwo.css" >

<div class="topnav">
<a href="Login.php">Admin Login</a>
<a href="restuarant.php">Registration</a>
<a href="homepage.php">Home</a>
</div>


<head>
    <title>Admin Registration Form </title>
    
</head>

<body>
<div class="form-boxxx">
 <center>
    
    
    <h1>Admin Registration Form</h1>
    <form class="login_form" action="<?php echo $_SERVER["PHP_SELF"];?>"method="post" name="form" onsubmit="return validated()">
    <br><br>
        <table>
            <tr> <td>Name:</td>
                <td><div class="textbox"><input type="text" placeholder="Name" name="firstname"> <?php echo $validatename;?></div>
                <div id="name_error">Valid Name is required</div></td></tr>
            <tr>
                <td>Email:</td>
                <td><div class="textbox"><input type="text" placeholder="Email" name="email"> <?php echo $validateemail;?></div>
                <div id="email_error">Valid Email is required</div></td></tr>
           
            <tr>
                <td>User Name:</td>
                <td><div class="textbox"><input type="text" placeholder="Username" name="username"> <?php echo $validateusername;?></div>
                <div id="user_error">Valid Username is required</div></td></tr>
           
            <tr>
                <td>Password:</td>
                <td><div class="textbox"><input type="password" placeholder="Password" name="password"> <?php echo $validatepassword;?></div>
                <div id="pass_error">Valid Password is required</div></td></tr>
           
            <tr>
                <td>Confirm Password:</td>
                <td><div class="textbox"><input type="password" placeholder="Confirm Password" name="confirmpassword"> <?php echo $validatecpassword;?></div>
                <div id="cpass_error">Doesn't match</div><br></td></tr>
            
            <tr>
                <td>Gender</td>
                <td>
                
                
                  <input type="radio" name="gender"
               
                  value="female">Female 
                  <input type="radio" name="gender"
                 
                  value="male">Male  
                  <input type="radio" name="gender"
                
                  value="other">Other  
                  <?php echo $genderErr;?>
                
                

                </td>
            </tr>
            <tr>
                <td>Date of Birth <br></td>
                <td><br><div class="textbox"><input type="date" id="birthdate" name="birthdate"><?php echo $validbirthdate;?></div></td>
            </tr>
            <tr>
</div>
                <td><input class="btnthree" type="submit" value="submit"><br>
                    <input class="btnthree" type="reset">
                </td>


            </tr>


        </table>
        
    </form>
    <script src="../Admin/validation.js"></script>
            <tr><td align="left">
          <br><a href="Login.php"> <td><input class="btntwo" type="submit" value="Sign in?"></a></td></tr>
          
          </center> 
</body>

</html>