<!DOCTYPE html>
<html>
  <head>
    <title>Book Store Management system</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      type="text/css"
      href="./bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand h1 fs-4" href="#">SN Book Store</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarSupportedContent"
        >
          <ul
            class="navbar-nav justify-content-center w-100 ml-auto mb-2 mb-lg-0"
          >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#book">Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact us</a>
            </li>
          </ul>
          
              <div class="me-2">
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="buttons" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>

    <section class="slider">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner h-75 w-100">
          <div class="carousel-item active">
            <img
              src="./image/1.jpg"
              class="d-block w-100"
              alt="./image/1.jpg"
            />
            <div class="carousel-caption d-md-block">
              <h5>Get your new books with best price</h5>
             
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./image/2.jpg"
              class="d-block w-100"
              alt="./image/2.jpg"
            />
            <div class="carousel-caption d-md-block">
              <h5>Explore your favourite books</h5>
             
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./image/3.jpg"
              class="d-block w-100"
              alt="./image/3.jpg"
            />
            <div class="carousel-caption d-md-block">
              <h5>what book are you looking for?</h5>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!--about us part start-->
  
    <?php 
include("about.php");
 ?> 
  
    <!--about us part end-->

    <!--Our Books parts-->
    <section class="main_heading my-5" id="book">
      <div class="container h-auto w-100">
        <div class="text-center mt-5">
          <h1 class="display-4 mt-5">Our Book</h1>
          <hr class="w-25 mx-auto mb-5" />
        </div>

        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div
              class="d-flex justify-content-center align-items-center shadow-lg cards"
            >
              <div class="col-sm-4">
                <img src="image/textbook1.jpg " alt="book" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title">python</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmodtempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  
                    <button class="buttons mb-md-1"> <a  class="text-decoration-none text-white"
                      href="customerlogin.php">Buy Book</a>
                    </button>
                    <button class="btn btn-secondary">Add to cart</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div
              class="d-flex justify-content-center align-items-center shadow-lg cards"
            >
              <div class="col-sm-4">
                <img src="image/textbook1.jpg " alt="book" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title">Bython</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmodtempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  
                    <button class="buttons mb-md-1"> <a  class="text-decoration-none text-white"
                      href="customerlogin.php">Buy Book</a>
                    </button>
                    <button class="btn btn-secondary">Add to cart</button>
                  
                </div>
              </div>
            </div>
          </div>

         <div class="col-12 col-md-6 col-lg-4">
            <div
              class="d-flex justify-content-center align-items-center shadow-lg cards"
            >
              <div class="col-sm-4">
                <img src="image/textbook1.jpg " alt="book" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title">Bython</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmodtempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  
                    <button class="buttons mb-md-1"> <a  class="text-decoration-none text-white"
                      href="customerlogin.php">Buy Book</a>
                    </button>
                    <button class="btn btn-secondary">Add to cart</button>
                  
                </div>
              </div>
            </div>
          </div>


          <div class="col-12 col-md-6 col-lg-4">
            <div
              class="d-flex justify-content-center align-items-center shadow-lg cards"
            >
              <div class="col-sm-4">
                <img src="image/textbook1.jpg " alt="book" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title">Bython</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmodtempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  
                    <button class="buttons mb-md-1"> <a  class="text-decoration-none text-white"
                      href="customerlogin.php">Buy Book</a>
                    </button>
                    <button class="btn btn-secondary">Add to cart</button>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div
              class="d-flex justify-content-center align-items-center shadow-lg cards"
            >
              <div class="col-sm-4">
                <img src="image/textbook1.jpg " alt="book" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title">Bython</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmodtempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  
                    <button class="buttons mb-md-1"> <a  class="text-decoration-none text-white"
                      href="customerlogin.php">Buy Book</a>
                    </button>
                    <button class="btn btn-secondary">Add to cart</button>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div
              class="d-flex justify-content-center align-items-center shadow-lg cards"
            >
              <div class="col-sm-4">
                <img src="image/textbook1.jpg " alt="book" class="img-fluid" />
              </div>
              <div class="col-sm-8">
                <div class="card-body">
                  <h5 class="card-title">Bython</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmodtempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  
                    <button class="buttons mb-md-1"> <a  class="text-decoration-none text-white"
                      href="customerlogin.php">Buy Book</a>
                    </button>
                    <button class="btn btn-secondary">Add to cart</button>
                  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--Ourbook parts end-->

    <!--Contact part start-->
    <section id="contact">
      <div class="container w-100">
        <div class="text-center">
          <h1 class="display-4 mt-5">Contact us</h1>
          <hr class="w-25 mx-auto" />
        </div>
        <?php 
include("contact.php");
 ?> 
      </div>
    </section>

    <!--Contact part end-->

    <!--footer part -->
    <?php 
    include 'footer.php';
    ?>
    <!--Footer part end-->
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


























