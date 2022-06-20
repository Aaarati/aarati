<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container-fluid  p-0">
      <div class="container-fluid restaurants-navbar p-0 m-0">
        <?php
          include "navbar.php";
        ?>
      </div>

      <div class="container-fluid  p-0 m-0">
    <h2>Books</h2><hr>
    </div>

    <div class="container-fluid">
      <div class="row">
        <?php
        $conn=mysqli_connect('localhost','root','','bookstore');
        $sql = "SELECT * FROM productionhouse ORDER BY productionhouseID DESC";
        $res = mysqli_query($conn, $sql); 
          $data = [];
          if (mysqli_num_rows($res) > 0) {
          while ($row = mysqli_fetch_assoc($res)) {
          array_unshift($data, $row);
          }
        }
        ?>        
        <?php
          foreach ($data as $d) {
        ?>
        <div class="col-md-4" style="padding-bottom: 15px;">
          <div class="card">
            <img class="card-img-top rest-img" src="css/images/<?php echo $d['image'] ?>"/>
            
            <div class="card-block rest-info">
              <h4 class="card-title"><?php echo $d['book_name'];?></h4>
              <i class="fas fa-map-marker-alt"></i>&nbsp;<span><?php echo $d['address'];?></span>
              <!-- <p><a class="btn btn-outline-dark" href="menu.php?restaurantID=<?php echo $d['restaurantID'] ?>">View Menu</a></p> -->
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div><hr>

    
  </div>
  <script src="javascript/all.js"></script>
</body>
</html>