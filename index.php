<?php
require 'database/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Login Form</title>
</head>
<body background="indexbg.jpg" >
	<div clas="topnav" id="myTopnav">
		<a href="#home" class="active">Home</a>
		<a href="#news">News</a>
		<a href="#contact">Contect</a>
		<div class="dropdown">
			<button class="dropbtn">Dropdown
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Page 1</a>
				<a href="#">Page 2</a>
				<a href="#">page 3</a>
			</div>
		</div>
		<a href="#about">About</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		<div>

	  <div id="Mainwrapper">
	  	<form method="post" enctype="multipart/form-data">
	  		<table align="center" style="color:white;width:365px;position:relative;top:200px;height: 200px;"border="1">
	  		<tr>
	  			<td style="position: relative;left: 50px;bottom: 5px;">
	  			<center><h3>Login Form</h3></center></td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<center>Username</center></td>
	  			<td><input type="text" name="username" placeholder="type username" style="color: black;"/></td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<center>Password</center></td>
	  			<td><input type="password" name="password" placeholder="type password" style="color: black;"/></td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<center>
	  					<input type="submit" name="SignIn" value="Login" style="background-color:white;color:black;width:100px;height: 40px;position: relative;top:5px;"/></center>
	  				</center> 
	  			</td>
	  			<td>
	  				<center><a href="register.php"><input type="button" name="Register" value="Register" style="background-color: white; color: black;width: 150px; height: 40px; position: relative;"></a></center>
	  			</td>
	  		</tr>
			</table>	
		</form>
</body>
</html>
<?php
if(isset($_POST['SignIn'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query1="select * FROM admin where username='$username' AND password='$password'";
	$runquery1=mysqli_query($con,$query1);
	if(mysqli_num_rows($runquery1)>0){
		header('location:Mainpage.php');
		$_SESSION['username']=$username;
	}
	
	else {
		echo'<script>("Invalid username and password")</script>';
	}
}

?>
 
 