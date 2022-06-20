<?php
session_start();
if (!isset($_SESSION['username'])){
	header('location:Adminlogin.php');
	}
$productionhouseID = $_REQUEST['productionhouseID'];
$conn = mysqli_connect('localhost','root','','bookstore');
	if (isset($_POST['submit'])) {
		$productionhouseID1=$_POST['productionhouseID'];
		$book_name = $_POST['book_name'];
		$address = $_POST['address'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
    $image=$_FILES['image']['name'];
    if ($image=="") {
    $sql = "UPDATE productionhouse SET book_name = '$book_name' , address = '$address',email='$email',phone='$contact'WHERE productionhouseID = '$productionhouseID1'";
    mysqli_query($conn, $sql);
      if (mysqli_affected_rows($conn) == 1){
      }
      else{
      echo "Data update failed".mysqli_error($conn);
      }
    }
		else{
      $sql = "UPDATE productionhouse set book_name = '$book_name' , address = '$address',email='$email',phone='$contact',image ='$image'where productionhouseID = '$productionhouseID1'";
    mysqli_query($conn, $sql);
    move_uploaded_file($_FILES["image"]["tmp_name"],"css/images/".$image);
      if (mysqli_affected_rows($conn) == 1){
      }
      else{
      echo "Data update failed".mysqli_error($conn);
      }
    }
	}
	$sql1 = "SELECT * FROM productionhouse WHERE productionhouseID = $productionhouseID";
	$book = mysqli_query($conn, $sql1);
	$data = mysqli_fetch_assoc($book);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
 <!--<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css" />-->

     <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
     /> 

     
  <style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #08746e;
      /*  background-color: #08746e;*/
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color:#004643;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        tr:hover {
        background-color: #c7efcf;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>
  </head>
  <body>
    <div class="container-fluid dashboard font">
      <div class="row px-3 py-4  font d-flex align-items-center heading-color">
        <div class="col-sm-6">
          <h5 class="text-white text-uppercase ">sn bookstore</h4>
        </div>
        <div
          class="col-sm-6 d-flex justify-content-end align-items-center gap-5"
        >
          <h5 class=" h5 text-capitalize text-white">Welcome user</h5>
          <button class="buttons"><a href="login.php" class="text-decoration-none text-white">logout</a></button>
        </div>
      </div>
      <div class="row min-vh-100">
        <div class="col-sm-2  px-4 ">
          <nav class="">
            <ul>
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="book.php">List of books</a></li>
              <li><a href="customerregistration.php">Customer registration</a></li>
                <li><a href="orders.php" class="active">Orders</a></li>
            
            </ul>
          </nav>
        </div>
        <div class="col-sm-10 p-3">
          <form class="row py-3 " enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
          <input type="hidden" name="productionhouseID" value="<?php echo $data['productionhouseID'] ?>">
            <div class="col-md-12">
              <input type="text" name="book_name" placeholder="Book Name" class="form-control"value="<?php echo $data['book_name']; ?>" required><br>
            </div>
            <div class="col-md-12">
              <input type="text" name="email" class="form-control" value="<?php echo $data['email'];?>" required placeholder="Email Address"><br>
            </div>
            <div class="col-md-12">
              <input type="text" name="address" class="form-control" value="<?php echo $data['address']; ?>" placeholder="Address" required><br>
            </div>
            <div class="col-md-12">
              <input type="text" name="contact" class="form-control" value="<?php echo $data['phone']; ?>" placeholder="Contact Number" required><br>
            </div>
          
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Thumbnail</label>
              <input type="file" name="image" class="form-control" value="<?php echo $data['image'];?>" id="inputGroupFile01">
            </div>
            <div class="col-md-12 mt-3">
              <button class="btn btn-warning" type="submit" name="submit" onclick="alert('Books Details Updated Successfully!')">Update book</button>
            </div>
          </form>
        
      </div>
    </div>
     
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


















