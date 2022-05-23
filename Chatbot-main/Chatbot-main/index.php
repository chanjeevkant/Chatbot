<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Login Page</title>
<link rel="stylesheet" href="css/stylex.css">
-->
<style>
body 
{
  background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-smart-robot-arm-advertising-background-backgroundrobotblue-backgrounddark-backgroundlightlight-image_68405.jpg' );
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}



</style>



</head>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
	

<!-- <body style="background-color:#bdc3c7"> -->
	
	<div id="main-wrapper">
		<center>
			<h2><strong id="log">Login</strong></h2>
			<div class="imgcontainer">
			<img style="border-radius:50%" src="data:image/png;base64,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" class="avatar"/>
		</center>
	
		<form class="myform" action="index.php" method="post">

			<div class="inner_container">

			<label><b id="un">Username:</b></label><br>
			<input name="username" id="us" type="text" class="inputvalues" placeholder="Enter Username here..." required/><br>
			<label><b id="pas">Password:</b></label><br>
			<input name="password" id="pass" type="password" class="inputvalues" placeholder="Your Password..." required/><br>
			
			<a href="homepage.php"><input name="login" type="button" id="login_btn" value="Login"/></a><br>
			
			<a href="register.php"><input type="button" id="register_btn" value="Register"/></a> <br>
			
			<a href="admin.php"><input type="button" id="admin_btn" value=" Login as Admin"/></a>
		
		</div>

		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$query="select * from users WHERE username='$username' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				// valid
				$_SESSION['username']= $username;
				header('location:homepage.php');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>
		
	</div>
</body>
</html>