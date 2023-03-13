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
   <link rel="stylesheet" href="css/main4.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    

    <nav class = "navbar navbar-expand-lg navbar-light bg-light py-4 fixed-top " style="position: sticky; top: 0;">
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
                                    aria-expanded="false" style="font-size: 1.5rem;"
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


<div class="container wrapper" style="padding-top: 1.3rem; margin-top: 0.2rem">
    <h3 style="color: darkslategray; text-align: center; font-weight: bold; font-size: 3rem;">Checkout Page</h3>
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <!-- <div style="display: table; margin: auto;">
                        <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                        <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                        <span class="step_thankyou check-bc step_complete">Thank you</span>
                    </div> -->
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>    
            <div class="row cart-body" >
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <!-- <div class="panel-heading">
                             <div class="pull-right">Review Order<small><a class="afix-1" href="#">Edit Cart</a></small></div>
                        </div> -->
                        <div class="panel-body"style="padding-top: 3rem;">
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="../public/asset/frontend/imagess/i5.jpg" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12" style="font-weight: bold;font-size: 1.6rem;">Smart Watch</div>
                                    <div class="col-xs-12" style="font-weight: bold;font-size: 1.6rem;"><small>Quantity:  <span>1</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6style="font-size: 1.6rem;"><span>Tk </span>4500 Tk</h6style=>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="../public/asset/frontend/imagess/w4.webp" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12" style="font-weight: bold;font-size: 1.6rem;">Smart Watch</div>
                                    <div class="col-xs-12" style="font-weight: bold;font-size: 1.6rem;"><small>Quantity:  <span>2</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6 style="font-size: 1.6rem;"><span>Tk </span>3400 Tk</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="../public/asset/frontend/imagess/watch2.png" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12" style="font-weight: bold;font-size: 1.6rem;">Smart Watch</div>
                                    <div class="col-xs-12" style="font-weight: bold;font-size: 1.6rem;"><small>Quantity: <span>3</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6style="font-size: 1.6rem;"><span>Tk </span>5500 Tk</h6style=>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong style="font-size: 2rem;">Subtotal:</strong>
                                    <div class="pull-right" style="font-size: 1.6rem;"><span>Tk </span><span>10,600</span></div>
                                </div>
                                <div class="col-xs-12">
                                    <!-- <small>Shipping</small> -->
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong style="font-size: 2rem;">Total Amount:</strong>
                                    <div class="pull-right"style="font-size: 1.6rem; "><span>Tk </span><span>10800</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <!-- <div class="panel-heading">Address</div> -->
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4 style="font-size: 2rem; font-weight: bold;color: darkslategray; text-align: center;">Shipping Address</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Country:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="country" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>First Name:</strong>
                                    <input type="text" name="first_name" class="form-control" value="" />
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Last Name:</strong>
                                    <input type="text" name="last_name" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>City:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>District:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="district" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip_code" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phone Number:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email Address:</strong></div>
                                <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                    <div class="panel panel-info"style="padding-top: 3rem;">
                        <!-- <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div> -->
                        <h4 style="font-size: 2rem; font-weight: bold;color: darkslategray; text-align: center;">Secure Payment</h4>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card Type:</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">select</option>
                                        <option value="5">Debit Card</option>
                                        <option value="6">Credit Card</option>
                                        <!-- <option value="7">American Express</option>
                                        <option value="8">Discover</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong> Card Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Date</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span style="font-weight: bold; color: black;">Pay secure using other payment method: </span>
                                    <!-- <div class="col-md-12"><strong></strong></div> -->
                                <!-- <div class="col-md-12"> -->
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">select</option>
                                        <option value="5">Bkash</option>
                                        <option value="6">Rocket</option>
                                        <option value="6">Nogod</option>
                                        <!-- <option value="7">American Express</option>
                                        <option value="8">Discover</option> -->
                                    </select>
                                <!-- </div> -->
                            </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">Amex</li>
                                    </ul> -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                    <button type="submit" class="btn btn-primary btn-submit-fix" style="text-align: center;" ></button>
                                </div> -->
                                <div>
                                    <a href="invoice.php"  class="btn btn-primary "style="font-size: 1.3rem; justify-content: end; color: black; font-weight: bold; ">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CREDIT CART PAYMENT END-->
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
    </div>

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
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>