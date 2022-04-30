<?php
include_once("admin/config.php");
if(isset($_POST['submit'])){
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password=$_POST['password'];
    

    
        $sql = "INSERT INTO  reigister(firstname,lastname,username,email,address,phone,password)
        Values('$firstname','$lastname','$username','$email','$address','$phone','$password')";
    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location: index.php");
    }else{
        // echo"data not inserted".mysqli_error($conn);
    }
    
    
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/a.css">
	<link rel="stylesheet" type="text/css" href="css/reg.css"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
  
  </head>
<body>

<div class="wrapper">
    <div class="title">
      Registration  Form
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
    	<div class="slider">

	<div class="load">
	</div>
	<div class="content">
	
		<h1>Customer Registration </h1>
		<div id ="maindiv">
			<form name = "register" onsubmit="return false">
				<h2>Register Here!</h2>
				<div id="first">
					<label>FirstName:</label><br>
					<input type="text" name="fname" id="fname" placeholder="Enter your UserName" maxlength="30"><br><br>
					<label>LastName:</label><br>
					<input type="text" name="lname" id="lname" placeholder="Enter your LastName" maxlength="30"><br><br>

					<label>UserName:</label><br>
					<input type="text" name="uname" id="uname" placeholder="Enter your Username"><br><br>
								
					<label>Phone:</label><br>
					<input type="text" name="phone" id="phone" placeholder="Enter your Contact number"><br><br>

					<label >Address:</label><br>
					<input type="address name="address" id="address" placeholder="Enter your address"><br><br>
				
					<label>Email ID:</label><br>
					<input type="text" name="email" id="email" placeholder="Enter your Email"><br><br>
				
					
					<label >Password:</label><br>
					<input type="password" name="cpassword" placeholder="Create new Password">
					</select><br><br>
					
					

					<input type="submit" name="submit" id="submit"onclick="userinput()">&nbsp;&nbsp;&nbsp;
					<input type="reset" id="reset">&nbsp;&nbsp;&nbsp;<br><br>
				</div>
			</form>
			
		</div>
	</div>
</div>

<div class="copy">	
<div class="Copyright"> Copyright ©2022 All rights reserved | This site is made by Aarati.</div>
</div>

</body>
</html>




<div id="first">
       
          <label>First Name</label>
          <input type="text" class="input" name="firstname" required>
      
       
          <label>Last Name</label>
          <input type="text" class="input" name="lastname" required>
       
       
          <label>User Name</label>
          <input type="text" class="input" name="username" required>
       
          <label>Email</label>
          <input type="email" class="input" name="email" required>
     
          <label>Address</label>
          <input type="text" class="input" name="address" required>
      
          <label>Phone</label>
          <input type="number" class="input" name="phone" required>
   
          <label>Password</label>
          <input type="number" class="input" name="password" required>
       
        <input type="submit" value="Submit"  name="submit" class="btn">
    
    </div>















