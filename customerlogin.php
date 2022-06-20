<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin/style.css">
</head>
<body>
	<?php
		if (isset($_POST['Login'])) {
		if (isset($_POST['username']) && !empty($_POST['username'])) {
			$username = $_POST['username'];
		}
		else{
			$errusername = 'Please enter your username';
		}
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$password = md5($_POST['password']);
		}
		else{
			$errpassword = 'Please enter your password';
		}
		if (isset($username) && isset($password)) {
			$conn = mysqli_connect('localhost','root','','bookstore');
			$sql = "SELECT * FROM customers WHERE
					username = '$username' AND password = '$password'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			if (mysqli_num_rows($result) == 1) {
					session_start();
				$_SESSION['customer'] = $username;
				$_SESSION['customerID'] = $row['customerID'] ;
				header("location:customerdashboard.php");	
			}
			else{
				$error = "Wrong Username or Password.Please try again!";
				}
			}
		}
	?>	 
	<script type="text/javascript">
    	function userinput(){
	      username = document.login.username.value;
	      password = document.login.password.value;
		  if(username == ""){
	        document.getElementById("username_err").innerHTML ="Please enter your Username!"; 
	         return false;
	      }
	      if(password=="") {
	          document.getElementById("password_err").innerHTML ="Please enter your Password!";
	          return false;
	       }
	    }
  	</script>
            <?php
			include "navbar.php";
			?>
	<div class="container-fluid login-container ">	
		<div class="row  w-100">
			
		</div>
    	<div class="col-sm-12 d-flex justify-content-center flex-column shadow-lg rounded-2"></div>
		<!-- <div id ="login-body"> -->
			<form method="post" name = "login" action="" class="p-4" >
				<h2>Welcome back!</h2>
					<!-- <div id="login-content" class="mb-3"> -->
						<div class="mb-3">
							<label  for="exampleFormControlInput1" class="form-label">Username</label><br>
							<input type="text"
							 name="username"
							  class="form-control"
	                          id="exampleFormControlInput1  login-username" 
	                          placeholder="Enter your Username" 
	                          maxlength="30"><br>
							<span id="username_err"><?php if(isset($errusername)){echo $errusername;}?></span><br>
					    </div>
					    <div class="mb-3">
							<label  for="exampleFormControlInput1" class="form-label">Password</label><br>
							<input type="password" 
							name="password" 
							class="form-control"
	                        id="exampleFormControlInput1  login-password"
	                        placeholder="Enter your Password"><br>
							<span id="password_err"><?php if (isset($errpassword)) {echo $errpassword;}?></span>
						    <span class="error"><?php if(isset($error)){ echo $error;}?></span><br>
					</div>
						<input type="submit" class="buttons" value="Login" onclick="return userinput()" name="Login" id="login-submit"><br>
						<p>Don't have an account? <a href="registration.php">Sign Up</a></p>
					<!-- </div> -->
			</form><hr>

			<div id="login-btn-grp">
			<button class="buttons mb-3"><a href="admin/Adminlogin.php" style="text-decoration: none; color: #fff">Admin</a></button>
			
		<!-- </div> -->
	</div>
</body>
</html>