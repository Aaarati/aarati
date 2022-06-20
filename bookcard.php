
<?php
  include './admin/config.php';
  $sql="SELECT * FROM productionhouse";
  $result=mysqli_query($conn,$sql);
  $data=[];

  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      array_push($data,$row);
    }
  }

  // $sql1="SELECT * FROM users";
  // $result1=mysqli_query($con,$sql1);
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link
      rel="stylesheet"
      type="text/css"
      href="./bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
include("navbar.php") 
?>
<div class="container h-auto w-100">
        <div class="text-center mt-5">
          <h1 class="display-4 mt-5">Our Book</h1>
          <hr class="w-25 mx-auto mb-5" />
        </div>
        

    
 <div class="row">
  <?php
    foreach($data as $d){
?>
          <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
    <img src="./admin/uploads/<?php echo $d['image']?>" alt="book" />
    <div class="card_body">
        <h2 class="card_title"><?php echo $d['book_name'] ?></h2>
        <!-- <p class="card_desc">
            <?php echo $d['book_desc'] ?>
        </p> -->
        <!-- <p class="card_price">Rs <?php echo $d['food_price'] ?></p> -->
        <a href="#" class="btn btn-primary">add to cart</a>
    </div>
</div>
<?php } ?>
            </div>
   </div>
</div>

<script src="./bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    </script>
  </body>
</html>
























