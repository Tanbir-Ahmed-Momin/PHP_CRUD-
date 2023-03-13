<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "../public/asset/frontend/css/main.css">
    <link rel="stylesheet" href="css/main1.css">
    
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href=""> -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
/>
          <!-- Google Fonts -->
      <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
       rel="stylesheet"
/>
   <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
   />
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

    <body>
    
        <!-- navbar -->
        <nav class = "navbar navbar-expand-lg navbar-light bg-light py-4 fixed-top">
            <div class = "container">
                <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "../index.php">
                    <img src = "../public/asset/frontend/imagess/logoo.png" alt = "site icon">
                    <span class = "text-uppercase fw-lighter ms-2">Time Travel</span>
                </a>
    
                <div class = "order-lg-2 nav-btns">
                    <button type = "button" class = "btn position-relative">
                        <i class = "fa fa-shopping-cart"></i>
                        <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                    </button>
                    <button type = "button" class = "btn position-relative">
                        <i class = "fa fa-heart"></i>
                        <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                    </button>
                    <button type = "button" class = "btn position-relative">
                        <i class = "fa fa-search"></i>
                    </button>
                    <a href="./Authentication/login.php"> <button type = "button" class = "btn position-relative">
                        <i class = "fa fa-user"></i>
                    </button></a>
                </div>
    
                <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                    <span class = "navbar-toggler-icon"></span>
                </button>
    
                <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                    
                    <ul class = "navbar-nav mx-auto text-center">
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "../index.php">home</a>
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <!-- <a class = "nav-link text-uppercase text-dark" href = "#collection">Category</a> -->
                            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
                                <!-- <div class="container-fluid"> -->
                                  <ul class="navbar-nav" style="font-size: 1rem; color: black;">
                                    <!-- Dropdown -->
                                    <li class="nav-item dropdown">
                                      <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="navbarDropdownMenuLink"
                                        role="button"
                                        data-mdb-toggle="dropdown"
                                        aria-expanded="false"
                                      >
                                        CATEGORY
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                          <a class="dropdown-item" href="category.php">Watch Collection for Male</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="category1.php">Watch Collection for Female</a>
                                        </li>
                                        <li>
                                          <a class="dropdown-item" href="category2.php">Watch Collection for Children</a>
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                <!-- </div> -->
                              <!-- </nav> -->
                        </li>
                        <li class = "nav-item px-2 py-2">
                            <!-- <a class = "nav-link text-uppercase text-dark" href = "#special">specials</a> -->
                        </li>
                        <!-- <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "#blogs">blogs</a>
                        </li> -->
                        <li class = "nav-item px-2 py-2">
                            <a class = "nav-link text-uppercase text-dark" href = "about.php">about us</a>
                        </li>
                        <li class = "nav-item px-2 py-2 border-0">
                            <a class = "nav-link text-uppercase text-dark" href = "contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar -->
    

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="../index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="category.php">Categories <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.php">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Exclusive Watch Collection for Children</h1>
        <p class="lead text-muted mb-0">You can get here more exclusive watch collection and you won't desperate...</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                </ol> -->
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <!-- <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.php">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="category.php">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item"><a href="category.php">Morbi leo risus</a></li>
                    <li class="list-group-item"><a href="category.php">Porta ac consectetur ac</a></li>
                    <li class="list-group-item"><a href="category.php">Vestibulum at eros</a></li>
                </ul>
            </div> -->
            <!-- <div class="card bg-light mb-3"> -->
                <!-- <div class="card-header bg-success text-white text-uppercase">Last product</div> -->
                <div class="card-body">
                    <!-- <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="bloc_left_price">99.00 $</p> -->
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../public/asset/frontend/imagess/waa3.jpg" height="300px" width="300px" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Smart Watch</a></h4>
                            <p class="card-text">Sports Wristband TPE Watch Strap</p>
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold">3500 Tk</p>
                                </div>
                                <div class="col">
                                    <a href="cart.php" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../public/asset/frontend/imagess/waa5.jpg" height="300px" width="300px" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Smart Watch</a></h4>
                            <p class="card-text">Sports Wristband TPE Watch Strap.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold">4000 Tk</p>
                                </div>
                                <div class="col">
                                    <a href="cart.php" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../public/asset/frontend/imagess/waa7.jpg"height="300px" width="300px" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Smart Watch</a></h4>
                            <p class="card-text">Sports Wristband TPE Watch Strap.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold">4500 Tk</p>
                                </div>
                                <div class="col">
                                    <a href="cart.php" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../public/asset/frontend/imagess/waa9.jpg"height="300px" width="300px" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Smart Watch</a></h4>
                            <p class="card-text">Sports Wristband TPE Watch Strap</p>
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold">2800 Tk</p>
                                </div>
                                <div class="col">
                                    <a href="cart.php" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../public/asset/frontend/imagess/waa8.webp"height="300px" width="300px" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Smart Watch</a></h4>
                            <p class="card-text">Sports Wristband TPE Watch Strap.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold">3400 Tk</p>
                                </div>
                                <div class="col">
                                    <a href="cart.php" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../public/asset/frontend/imagess/waa4.jpg"height="300px" width="300px" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Smart Watch</a></h4>
                            <p class="card-text">Sports Wristband TPE Watch Strap.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold">3950 Tk</p>
                                </div>
                                <div class="col">
                                    <a href="cart.php" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="category2.php">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="category.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="category1.php">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->

<footer class = "bg-dark py-5">
    <div class = "container">
        <div class = "row text-white g-4">
            <div class = "col-md-6 col-lg-3">
                <a class = "text-uppercase text-decoration-none brand text-white" href = "../index.php">Time Travel</a>
                <p class = "text-white text-muted mt-3">Time Travel watches are crafted from the finest raw materials and assembled with scrupulous attention </p>
            </div>

            <div class = "col-md-6 col-lg-3">
                <h5 class = "fw-light">Links</h5>
                <ul class = "list-unstyled">
                    <li class = "my-3">
                        <a href = "../index.php" class = "text-white text-decoration-none text-muted">
                            <i class = "fas fa-chevron-right me-1"></i> Home
                        </a>
                    </li>
                    <li class = "my-3">
                        <a href = "category.php" class = "text-white text-decoration-none text-muted">
                            <i class = "fas fa-chevron-right me-1"></i> Category
                        </a>
                    </li>
                    <!-- <li class = "my-3">
                        <a href = "#" class = "text-white text-decoration-none text-muted">
                            <i class = "fas fa-chevron-right me-1"></i> Contact Us
                        </a>
                    </li> -->
                    <li class = "my-3">
                        <a href = "about.php" class = "text-white text-decoration-none text-muted">
                            <i class = "fas fa-chevron-right me-1"></i> About Us
                        </a>
                    </li>
                </ul>
            </div>

            <div class = "col-md-6 col-lg-3">
                <h5 class = "fw-light mb-3">Contact Us</h5>
                <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                    <span class = "me-3">
                        <i class = "fas fa-map-marked-alt"></i>
                    </span>
                    <span class = "fw-light">
                        Level-5, Rajuk Rajib, Cosmo Shopping Complex, Plot-71 Sector-7, Dhaka 1230
                    </span>
                </div>
                <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                    <span class = "me-3">
                        <i class = "fas fa-envelope"></i>
                    </span>
                    <span class = "fw-light">
                        timetravel.support@gmail.com
                    </span>
                </div>
                <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                    <span class = "me-3">
                        <i class = "fas fa-phone-alt"></i>
                    </span>
                    <span class = "fw-light">
                        +88-01543768921
                    </span>
                </div>
            </div>

            <div class = "col-md-6 col-lg-3">
                <h5 class = "fw-light mb-3">Follow Us</h5>
                <div>
                    <ul class = "list-unstyled d-flex">
                        <li>
                            <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <!-- <li>
                            <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
         <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Copyright © 2023 timetravel.com. Powered by 
    <a class="text-white" href="../index.php">Time Travel</a>
  </div>
  <!-- Copyright -->
    </div>
</footer>
<!-- end of footer -->




<!-- jquery -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src = "js/jquery-3.6.0.js"></script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- bootstrap js -->
<script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- custom js -->
<script src = "js/script.js"></script>
</body>
</html>

