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
   <link rel="stylesheet" href="css/main2.css">
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
                        <a class = "nav-link text-uppercase text-dark" href = "./about.php">about us</a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark" href = "./contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="contact">
        <h1 class="text-center">CONTACT US</h1>
        <div class="row" style="margin-top: 50px;">
            <h3 class="text-center" style="font-weight: bold; color: darkslategray; line-height: 2rem;">CONTACT US</h3>
            <div class="col-md-4 py-3 py-md-0">
                
                <div class="card">
                    <i class="fas fa-phone"> Phone</i>
                    <h6>+88-01812345653</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fa-solid fa-envelope"> Email</i>
                    <h6>timetravel.support@gmail.com</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fa-solid fa-location-dot"> Address</i>
                    <h6>Uttara, Sector-7, Dhaka 1230</h6>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Name">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Email">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="number" class="form-control form-control" placeholder="Phone">
            </div>
           <div class="form-group" style="margin-top: 30px;">
            <textarea class="form-control" id=""rows="5" placeholder="Message"></textarea>
        </div>
        <div id="messagebtn" class="text-center"><button>Send Message</button></div>
        </div>
    </div>

    <section>
        <div>
            <h2 style="color: white;">
                fgh
            </h2>
        </div>
    </section>
    <!-- contact -->



    <!-- end of navbar -->
  <!--Section: Contact v.2-->
<!-- <section class="mb-4">

    
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

       
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

               
                <div class="row">

                   
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    

                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
               
                <div class="row">

                    
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
       

    </div>

</section> -->
<!--Section: Contact v.2-->
<!--Section: Contact v.2-->
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
  <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); ">
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