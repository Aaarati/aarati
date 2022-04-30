<?php
        include_once("config.php");

if(isset($_POST['submit'])){
    $username= $_POST['uname'];
    $password = $_POST['password'];
    

    
        $sql = "INSERT INTO login(uname,password)
        Values('$username','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo"New Record is uploaded";
            header("Location: login.php");
            // header("Location: displayclasswork.php");
        }else{
            "Record not uploaded".mysqli_error($conn);
        }
    
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>SN Book Store</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
  </head>
  <body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<div class="adjust">
<div class="wrapper">
    <div class="title">
        Register Form
    </div>
    <div class="form">
        <div class="inputfield">
            <label>Username</label>
            <input type="text" class="input" name="uname" required>
        </div>  
        <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input" name="password">
        </div>  
        
        
        <div class="inputfield">
        <input type="submit" value="Submit"  name="submit" class="btn">
        </div>
    </div>
</div>
</div>

</form>
</body>
</html>
