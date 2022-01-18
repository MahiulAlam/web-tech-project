
<!DOCTYPE html>
<html>
<head>

  <title>Restaurant Management System</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
      
    </script> 
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script type="text/javascript" src="register.js"></script>

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>
 

			 <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">Restaurant Management System</a>
          </div>
         	<UL class="nav navbar-nav">
				
					
					
					<li><a href="login.php">Log In</a></li>
				</UL>
          </nav>
		
<section>
  <div align="center">

    <div class="box2">
        <h1 style="text-align: center; font-size: ">  Restaurant Management System </h1>
        <h1 style="text-align: center; font-size: 25px;">Customer Sign Up Form</h1><br>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input  type="text" name="first" id="first" placeholder="Full Name" required=""> <br><br>
          <input  type="text" name="last" id="last" placeholder="User Name" required=""> <br><br>
         
          <input  type="password" name="password" id="password" placeholder="Password" required=""> <br><br>
           
          <input  type="text" name="email" id="email" placeholder="Email" required=""><br><br>
         

          <input  type="button" id="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
      <p id="msg"></p>
     
    </div>
  </div>
</section>

     
 
</body>
</html>