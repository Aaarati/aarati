
<?php
include_once("admin/config.php");
if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    
        $sql = "INSERT INTO  register(firstname,lastname,username,email,address,phone,password)
        Values('$fname','$lname','$uname','$email','$address','$phone','$password')";
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
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  </head>
<body>

<div class="wrapper">
    <div class="title">
Customer Registration form
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >

    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="firstname" required>
       </div>
       <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lastname" required>
       </div>
       <div class="inputfield">
          <label>User Name</label>
          <input type="text" class="input" name="username" required>
       </div>

         
       <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email" required>
       </div>  
       <div class="inputfield">
          <label>Address</label>
          <input type="text" class="input" name="address" required>
       </div>  
       <div class="inputfield">
          <label>Phone</label>
          <input type="number" class="input" name="phone" required>
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="number" class="input" name="password" required>
       </div>
       
       

      <div class="inputfield">
        <input type="submit" value="Submit"  name="submit" class="btn">
      </div>
    </div>
</div>
</form>

</body>
</html>

