<!DOCTYPE html>
<?php
$cookie_name = ".";
$cookie_value = ".";
setcookie($cookie_name, $cookie_value, time() + (300 * 30), "/");
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
echo "'" . $cookie_name . "' ";
} else {
echo "'" . $cookie_name . "'";
echo ": " . $_COOKIE[$cookie_name];
}
?>
</body>
</html

<head>
	<title>Restaurant Management System</title>
	<link type="text/css" rel="stylesheet"  href="welcome.css">

</head>

<body>
	<div class="main"> 
		<nav>
			
			<UL>
				<li><a href="welcome.php">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="profile.php">Purchases</a></li>
				<li><a href="myProfile.php">My Profile</a></li>

				
				
				<?php 
					session_start();
					if(isset($_SESSION['email'])){
						
						echo "
							<li><a href=".'"logout.php">Log Out'."</a></li>
						</UL>";
	
						
					}
					else{
					echo "<li><a href=".'"login.php">Login'."</a></li>
						</UL>";

					 	
					}
				?>
		</nav>
	</div>
	<div class="welcome">
		<div class="panel">
			<p><span >Welcome to</span></p>
			<p><span class="bfont"> <span class="cyan">Restaurant Management System</span></span></p>
			
			</p>
		</div>
		
	</div>
</body>
</html>
