<center>
<?php
session_start(); 

include('../Admin/Logincheck/Updatecheck.php');


//if(empty($_SESSION["username"])) // Destroying All Sessions
//{
//header("Location: ../control/login.php"); // Redirecting To Home Page
//}
?>


<!DOCTYPE html>
<html>
<body>
<link rel= "stylesheet" type= "text/css" href= "../Admin/Css/mycsstwo.css" >
<title>Admin Administration </title>
<div class="topnav">
<a href="admins.php">My Home</a>
<a href="Employeeup.php">Employee</a>
<a href="Customerup.php">Customer</a>
<a href="delivarymanup.php">Delivary Man</a>
</div>
<div class="form-boxfour">
<h1>As-Salamu-Alayqum<br>
Welcome to Administration Panel </h1>
</div>




<div class="form-boxtwo">

<h2>MY Profile</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>
<br><br>
<?php

$radio1=$radio2=$radio3="";
$checkbox1=$checkbox2=$checkbox3="";
$firstname=$email=$password=$profession=$dob=$address="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"Registration",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $password=$row["password"];
      $dob=$row["birthdate"];
      
     

      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

  } 
}
  else {
    echo "0 results";
  }


?>
<form action='' method='post'>
  
Firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >
Email : <input type='text' name='email' value="<?php echo $email; ?>" >
Date of Birth : <input type='date' name='birthdate' value="<?php echo $dob; ?>" >
Password : <input type='password' name='password' value="<?php echo $password; ?>" >
<br>
<br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?> >Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other
<br>
 
  <br>
     <input class="btnfive" name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>




</body>
</html>


<h2>Do you want to Log Out<br> <a href="logout.php"><td><input class="btnfive" type="submit" name="logout" value="Logout"></a></h2></center>
</div>