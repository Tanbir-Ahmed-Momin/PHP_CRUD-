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
    <link rel="stylesheet" href="css/pdetals.css">
    
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
    <section>
        <div>
            <div class="container mt-5 mb-5" style="padding-top: 4rem">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="images p-3">
                                        <div class="text-center p-4"> <img id="main-image" src="../public/asset/frontend/imagess/w1.jpg" width="250" /> </div>
                                        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="../public/asset/frontend/imagess/w1.jpg" width="70"> <img onclick="change_image(this)" src="../public/asset/frontend/imagess/w1.jpg" width="70"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center"> </div>
                                        </div>
                                        <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                            <h5 class="text-uppercase">Smart watch</h5>
                                            <div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
                                                <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div>
                                            </div>
                                        </div>
                                        <p class="about">Shop from a wide range watch from orianz. Pefect for your everyday use, you could pair it with a stylish pair of Belt or pin complete the look.</p>
                                       
                                        <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
<!-- custom js -->
<script src = "js/script.js"></script>
</body>
</html>