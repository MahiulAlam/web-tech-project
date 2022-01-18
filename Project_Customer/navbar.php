<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<body>

      <nav>
    
          
            <h1><a class="navbar-brand active">Restaurant Management System</a></h1>
          </div>
          <ul class="nav navbar-nav">
            <li><h2><a href="welcome.php">HOME</a></h2></li>
            
            <?php
              if($_SESSION['role']=="Admin")
              {
                ?>
                <li><h1><a href="</a></h1></li>
             <?php   
              }
              else{
                ?>
                 <li><h1><a href="menu.php">MENU</a><h1></li>
              <?php   
              }
            ?>

               </ul>
          <?php
            if(isset($_SESSION['name']))
            {

          ?>
                <ul class="nav navbar-nav">
                <div style="background-image: url('../includes/body.jpg');">

                  <li><h1><a href="myprofile.php">PROFILE</a><h1></li>
                 

                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                    <div style="color: white">
                    
                      <?php
                           $q=mysqli_query($db,"SELECT * FROM users where UserName='$_SESSION[name]';");
                           $row=mysqli_fetch_assoc($q);
                        echo "<img class='img-circle profile_img' height=20 width=20 src='images/".$row['Pic']."'>";
                        echo " ".$_SESSION['name']; 
                      ?>
                    </div>
                  </a></li>
                  <li><h1><a href="logout.php"><span> LOGOUT</span></a></h1></li>
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="login.php"><span class=""> LOGIN</span></a></li>
                
                <li><a href="registration.php"><span class=""> SIGN UP</span></a></li>
              </ul>
                <?php
            }
          ?>

      </div>
    </nav>
  
</body>
</html>