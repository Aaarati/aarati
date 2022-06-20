
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:Adminlogin.php');
}
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
 
     <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
     /> 
  </head>

  <style>
   
    
    table {
       
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
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
        background-color: #c7efcf;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
       
    /*@media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }*/
</style>
  <body>
    <div class="container-fluid dashboard font">
      <div class="row px-3 py-4  font d-flex align-items-center heading-color">
        <div class="col-sm-6">
          <h5 class="text-white text-uppercase ">sn bookstore</h4>
        </div>
        <div
         class="col-sm-6 d-flex justify-content-end align-items-center gap-5">
          <h5 class=" h5 text-capitalize text-white">Welcome user</h5>
          <button class="buttons"><a href="login.php" class="text-decoration-none text-white">logout</a></button>
        </div>
      </div>
      <div class="row min-vh-100">
        <div class="col-sm-2  px-4 ">
          <nav class="">
            <ul>
              <li><a href="dashboard.php" >Dashboard</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="book.php" class="active">Books</a></li>
              <li><a href="customerregistration.php" >Customer registration</a>
              <li><a href="orders.php">Orders</a></li>
              
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-10 p-3">

    <h1>List of book</h1>
    <hr>

   
 
<div class="row mt-3">
    <table class="table">
      <thead>
        <tr id="header">
             <th scope="col">S.N</th> 
            <th scope="col">Bookname</th>
            
            <th scope="col">Thumbnail</th>
            <th scope="col">Actions</th>
            
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
                  include_once("config.php");
                  // create a query
               
                  $sql="SELECT * FROM productionhouse ORDER BY productionhouseID asc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
            <td><?php echo $row['productionhouseID']; ?></td>
            <td><?php echo $row['book_name']; ?> </td>
            
            <td><img src="uploads/<?php echo $row['image']?>" height="150px" width="150px">
          </td>
            
             
            <td  class=" "><a href="deletebook.php?id=<?php echo $row["productionhouseID"]; ?>">Delete</a></td>

            

        </tr>

        <?php
                    }
                  }
                  ?>
                  </tr>
        
    
        </tbody>
     </table>
</div>
<div class="row mt-3">
            <button  class="buttons mb-3" type="submit" name="submit" >
            <a href="addbook.php"class="buttons mb-3"
                >Add Book</a></button>
          
      </div>
        
    
        
 
                   <!-- <p class="text-capitalize">welcome to customer page</p> -->
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









































































