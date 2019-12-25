<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<style>

body{
color:white;
}
.wrap{
      width:350px;
	  margin:auto;
	  background:transparent;
	  margin-top:50px;
	  padding:5px;
	  }
form{
     padding:10px;
	 font-family:arial;
	 border:1px dotted white;
	 }
h2
{
       text-align:center;
	   background:orange;
	   color:white;
	   padding:10px;
	   border-radius:10px;
	   }
input{
      padding:10px;
	  margin:5px;
	  border-radius:5px;
	  border:none;
	  }
	  input[type=text],input[type=email],input[type=number],input[type=password]{
	  width:90%;
	  }
	  input[type=submit]{
	  width:95%;
	  background:orange;
	  cursor:pointer;
	  font-size:18px;
	  font-weight:bold;
	  color:white;
	  }
	  input[type=submit]:hover{
	  background:yellow;
	  }
	  

</style>
</head>
<body background="image/khai.jpg">
    <div class ="wrap">
        <form method="post" action="#">
		
		     <h2> SignUp </h2>
			 <label>username</label>
			 <input type="text" name="t1" 
			 placeholder="Enter Name">
			 
			 
			 <label align="center">password</label>
			 <input type="password" name="t2" 
			 placeholder="Enter Password">
			 
			 <br>
			 <br>
                      <!--<a href="form.html"><button type="button">Submit Now</button></a>-->					  
					  <input type="submit" name="btn"
		               value="SignUp">
					    
	     
				
		</form>
    </div>
</body>
</html>
<?php
     if(isset($_POST["btn"]))
	 {
		 $user=$_POST["t1"];
		 $pass=$_POST["t2"];
		 
		 include("connect.php");
		 $sql="insert into login(username,pass)
		 values('".$user."','".$pass."')";
		 $n=mysqli_query($con,$sql);
		 if($n==1)
		 {
			 
		echo "<script>window.location.href='login.php'</script>";
		 }
	 }
	
?>

