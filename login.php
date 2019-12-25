<html>
<head>
<title>Transparent login form</title>
<style>
			       #error1,#error2{
				         color:red;
						 visibility:hidden;
						 }
			</style>
            <script src="validate.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image/beachoo.jpg">
<div class="login-box">
<img src="image/avatar.png" class="avatar">
     <h1>Login here</h1>
	 <form method="post">
		  <p>Username</p>
		  <input type="text" name="t1" id="id1" value=""
		  placeholder="Enter Username"
		  
		  oninput="val_user()"><p
		  id="error1">*User name required</p>
				 
		  
		  <p>Password</p>
		  <input type="password" name="t2" id="id2" value=""
		  placeholder="Enter password"
		  
		         oninput="val_pass()"><p
				 id="error2">*Password required</p>
				 
			
		  <input type="submit" name="btn" id="id3" value="LOGIN"
		   onclick="validate()">
		   
		   <a href="signupform.php"><button type="button">SIGNUP</button></a>
		   
		  </form>
		</div>
		<?php
			if(isset($_POST["btn"]))
			{ 
				$user=$_POST["t1"];
				$pass=$_POST["t2"];
				
				include("connect.php");
				$sql="select * from login where username='". $user. "'
				and pass='". $pass. "'";
				$rs=mysqli_query($con,$sql);
				if(mysqli_num_rows($rs)==1)
				{
					session_start();
					$_SESSION["username"]=$user;
					$_SESSION["pass"]=$pass;
					header("location:index.html");
				}
				else
				echo "<script>alert('invalid username/password')</script>";
		
			}
			
		?>
</body>
</html>