<?php
#include_once("config.php");
if(isset($_POST['submit'])){

    $username= $_POST['uname'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM login
            where uname='$username' AND password= '$password' ";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['uname'] = $username;
        
        // echo "connected";
        header("Location: dashboard.php");
        
    }else{
        echo "login failed";
    }


}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./index.php">
	<link rel="stylesheet" type="text/css" href="css/a.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<body>
<div class="slider">

	<div class="load">
	</div>
	<div class="content">
		
		<div class="logo-inbox">
			<img src="img/man.jpg" class="man">
			<h1>Log-in Here</h1>
			<form>
				<p>Username</p>
				<input type="text" name="" placeholder="Enter Username">
				<p>Password</p>
				<input type="Password" name="" placeholder="Enter Password">
				<input type="submit" name="" value="Log-in">
				<a href="#">Forgot Password!!</a><br>
				<a href="c.php">Don't have an Account?</a>
			</form>
		</div>
	</div>
</div>


<div class="footer">
	<div class="footer1">
		<div class="footer11">
			<h3>CONTACT US</h3><br>
			Mitrapark<br>
			Kathmandu  -44600<br>
			Nepal<br><br>
		
		</div>
		<div class="footer12">
			<br><br>
Phone:(01)4464710<br>
Tel:(01) 4734461, <br>
(02) 4962437, (05) 4477982<br>
mobile:(+977) 9871235640<br>
E-mail: snbook23@gmail.com
		</div>
	</div>
	<div class="footer2">
			<div class="socialdiv"><img src="img/fb.png" class="social"></div>
			<div class="socialdiv"><img src="img/insta.png" class="social"></div>
			<div class="socialdiv"><img src="img/twit.png" class="social"></div>
			<div class="socialdiv"><img src="img/mes.png" class="social"></div>
			<div class="socialdiv"><img src="img/google.png" class="social"></div>
	</div>
</div>


</body>
</html>