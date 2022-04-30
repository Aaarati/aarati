<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />

</head>
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
        background-color: #904a0a;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #904a0a;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>
<body>
<div class="container">

<nav>
        <h2 class="logo_name"> <?php  echo $_SESSION['uname'] ?> , Music School Dashboard</h2>
        <ul class="nav-links" id="nav-links">
          <li><a href="dashboard.php">Contact</a></li>
          <li><a href="enroll.php">Enrolled</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php" class="login"> Logout</a></li>
        </ul>
        <!-- <a href="logout.php" class="login"> Logout</a> -->


      </nav>



    <h1>About <a href="insertabout.php">++</a></h1>
    <hr>

    <table>
        <tr id="header">
            <th>Image</th>
            <th>Description </th>
            <th colspan="2">Action</th>
            
        </tr>
        <tr>
        <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT first,last,email,course,level,status FROM record";
                  $sql="SELECT * FROM about ORDER BY id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr>
                <td  class="photo" id="image"><?php echo '<img src="uploads/'. $row["file"].'"height= "300" width="300" alt=" ">'; ?></td>

            <td><?php echo $row['description']; ?> </td>
            
            <td  class=" "><a href="editabout.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td  class=" "><a href="deleteabout.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

            

        </tr>
        <?php
                    }
                  }
                  ?>
                  </tr>
        
    
        

    </table>


</div>
</body>
</html>