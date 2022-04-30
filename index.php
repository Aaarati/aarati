<!DOCTYPE html>
<html>
  <head>
    <title>Book Store Management system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand  h1 fs-4" href="#">SN Book Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0  justify-content-center">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login/a.php">login</a>
        </li>
    </div>
  </div>
</nav>
<header>
  
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div   class="carousel-inner h-75 w-100">
    <div class="carousel-item active">
      <img src="./image/1.jpg" class="d-block w-100 " alt="./image/1.jpg">
      <div class="carousel-caption  d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/2.jpg" class="d-block w-100" alt="./image/2.jpg">
      <div class="carousel-caption  d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/3.jpg" class="d-block w-100" alt="./image/3.jpg">
      <div class="carousel-caption  d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>


 <!--about us part start-->
 <section main="main_heading my-5" id="about">
   <div class=" text-center ">
     <h1 class="display-4 mt-5" >About us</h1>
       <hr class="w-25 mx-auto" />
</div>
<div class="container ">
  <div class="row my-5 ">
    <div class="col-lg-6 col-md-6 col-12 col-xxl-6 w-50">
      <figure class>
        <img src="image/1.jpg" alt="about image" class="img-fluid about_img" >
      </figure>
    </div>

 
  <div class="col-lg-6 col-md-6 col-12 col-xxl-6  ">
    <h3>Our Books</h3> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.  
    </p>
    <button type="button" class="btn btn-info"data-bs-toggle="tooltip" data-bs-placement="right" title=" Tooltip on right" >Check more</button>
  </div>
  </div>
  
</div>

</section>

 <!--about us part end-->


<!--Our Books parts-->
  <section main="main_heading my-5" id="about">
   <div class=" text-center mt-5">
     <h1 class="display-4 mt-5" >About us</h1>
       <hr class="w-25 mx-auto" />
</div>
<div class="container services d-grid">
  <div class="row">
  <div class="col-md-4 col-10 col-xxl-4 mx-auto">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row ">
    <div class="col-md-4">
      <img src="image/textbook1.jpg" class="img-fluid rounded-start" alt="book">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
</div>
</div>
</div>


<div class="col-md-4 col-10 col-xxl-4 mx-auto">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row ">
    <div class="col-md-4">
      <img src="image/textbook1.jpg" class="img-fluid rounded-start" alt="book">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
</div>
</div>
</div>


<div class="col-md-4 col-10 col-xxl-4 mx-auto">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row ">
    <div class="col-md-4">
      <img src="image/textbook1.jpg" class="img-fluid rounded-start" alt="book">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
</div>
</div>
</div>
</div>



</div>
    
</section>
<!--Ourbook parts end-->

          

<script src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

   </body>
   </html>


