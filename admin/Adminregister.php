
<?php
        include_once("config.php");

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password = $_POST['password'];
    

    
        $sql = "INSERT INTO Adminlogin(username,password)
        Values('$username','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            // echo"New Record is uploaded";
            header("Location: Adminlogin.php");
            // header("Location: displayclasswork.php");
        }else{
            "Record not uploaded".mysqli_error($conn);
        }
    
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SN Book store</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container signup-container">
      <div class="row w-50">
        <div
          class="col-sm-12 d-flex justify-content-center flex-column shadow-lg rounded-2"
        >
          <form action="" class="p-4" method="POST">
            <h1 class="h4 text-capitalize">sign up</h1>
            <hr />

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Username</label
              >
              <input
                type="text"
                name="username"
                class="form-control"
                required
              />
               
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Password</label
              >
              <input
              name="password"
              type="password"
              class="form-control"
            
              />
              
            </div>

            <input type="submit" name="submit" class="buttons mb-3" value="submit">
           

            <p class="text-center fw-bold">
              Have A Account?
              <a href="Adminlogin.php" class="text-decoration-none form-links"
                >login now</a
              >
            </p>
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
