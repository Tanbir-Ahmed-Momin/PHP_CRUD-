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
</head>
<body>
    <section>
        <div>
            <h3>
                Your Total Product
            </h3>
        </div>
    </section>
    <section>
    
    <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
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
                                      <a class="dropdown-item" href="category.php">Watch Collection for Female</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item" href="category.php">Watch Collection for Children</a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            <!-- </div> -->
                          <!-- </nav> -->
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <!-- <a class = "nav-link text-uppercase text-dark" href = "">specials</a> -->
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
   </section>

<!-- <section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 15px;">
            <div class="card-body text-black">
  
              <div class="row">
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">Samsung Galaxy M11 64GB</h5>
                      <h6 style="color: #9e9e9e;">Color: white</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">799$</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/6.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">Headphones Bose 35 II</h5>
                      <h6 style="color: #9e9e9e;">Color: Red</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">239$</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                      <h5 class="text-primary">iPad 9.7 6-gen WiFi 32GB</h5>
                      <h6 style="color: #9e9e9e;">Color: rose pink</h6>
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">659$</p>
                        <div class="def-number-input number-input safari_only">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                            type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
  
                  <div class="d-flex justify-content-between px-x">
                    <p class="fw-bold">Discount:</p>
                    <p class="fw-bold">95$</p>
                  </div>
                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">2261$</h5>
                  </div>
  
                </div>
                <div class="col-lg-6 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>
  
                  <form class="mb-5">
  
                    <div class="form-outline mb-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>
  
                    <div class="form-outline mb-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        value="John Smith" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>
  
                    <div class="row">
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22"
                            size="7" id="exp" minlength="7" maxlength="7" />
                          <label class="form-label" for="typeExp">Expiration</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-5">
                        <div class="form-outline">
                          <input type="password" id="typeText" class="form-control form-control-lg"
                            value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                          <label class="form-label" for="typeText">Cvv</label>
                        </div>
                      </div>
                    </div>
  
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                        href="#!">obcaecati sapiente</a>.</p>
  
                    <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>
  
                    <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                      <a href="#!"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                    </h5>
  
                  </form>
  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section>
    <div>
        <h2>
            something
        </h2>
    </div>
  </section>
  <section class="h-100 h-custom">
    <div class="container h-100 py-5">
      <h2 style="text-align: center; margin-bottom: 3rem; font-weight: bold; color: darkslategray; text-decoration: underline;"> Your Cart </h2>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
  
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="h5">Selected Item</th>
                  <th scope="col">Produt Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <div class="d-flex align-items-center">
                      <img src="../public/asset/frontend/imagess/w4.webp" height="300px" width="240px" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                      <div class="flex-column ms-4">
                        <p class="mb-2">Smart Watch</p>
                        <p class="mb-0">Blue Belt</p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle">
                    <p class="mb-0" style="font-weight: 500;">Smart Watch</p>
                  </td>
                  <td class="align-middle">
                    <div class="d-flex flex-row">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
  
                      <input id="form1" min="0" name="quantity" value="2" type="number"
                        class="form-control form-control-sm" style="width: 50px;" />
  
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle">
                    <p class="mb-0" style="font-weight: 500;">4500 Tk</p>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="border-bottom-0">
                    <div class="d-flex align-items-center">
                      <img src="../public/asset/frontend/imagess/i5.jpg"height="300px" width="240px" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                      <div class="flex-column ms-4">
                        <p class="mb-2">Smart Wach</p>
                        <p class="mb-0">Pink Belt</p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">Smart Watch</p>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <div class="d-flex flex-row">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
  
                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" style="width: 50px;" />
  
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">4200 Tk</p>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="border-bottom-0">
                    <div class="d-flex align-items-center">
                      <img src="../public/asset/frontend/imagess/w5.webp"height="300px" width="240px" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                      <div class="flex-column ms-4">
                        <p class="mb-2">Smart Wach</p>
                        <p class="mb-0">Gray Belt</p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">Smart Watch</p>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <div class="d-flex flex-row">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
  
                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" style="width: 50px;" />
  
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">4200 Tk</p>
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="border-bottom-0">
                    <div class="d-flex align-items-center">
                      <img src="../public/asset/frontend/imagess/w2.jpg"height="300px" width="240px" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                      <div class="flex-column ms-4">
                        <p class="mb-2">Smart Wach</p>
                        <p class="mb-0">White Chain Belt</p>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">Smart Watch</p>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <div class="d-flex flex-row">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
  
                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" style="width: 50px;" />
  
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </td>
                  <td class="align-middle border-bottom-0">
                    <p class="mb-0" style="font-weight: 500;">4200 Tk</p>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
  
          <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
            <div class="card-body p-4">
  
              <div class="row">
                <!-- <h5>Please Select your Payment Method :------</h5> -->
                <!-- <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                
                  <form>
                   
                    <div class="d-flex flex-row pb-3">
                      <div class="d-flex align-items-center pe-2">
                        
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                          value="" aria-label="..." checked />
                      </div>
                      <div class="rounded border w-100 p-3">
                        <p class="d-flex align-items-center mb-0">
                          <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                          Card
                        </p>
                      </div>
                    </div>
                    <div class="d-flex flex-row pb-3">
                      <div class="d-flex align-items-center pe-2">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                          value="" aria-label="..." />
                      </div>
                      <div class="rounded border w-100 p-3">
                        <p class="d-flex align-items-center mb-0">
                          <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card
                        </p>
                      </div>
                    </div>
                    <div class="d-flex flex-row">
                      <div class="d-flex align-items-center pe-2">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                          value="" aria-label="..." />
                      </div>
                      <div class="rounded border w-100 p-3">
                        <p class="d-flex align-items-center mb-0">
                          <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>Bkash
                        </p>
                      </div>
                      
                      
                    </div>
                  </form> -->
                </div>
                <div class="col-md-6 col-lg-4 col-xl-6">
                  <div class="row">
                    <div class="col-12 col-xl-6">
                      <!-- <div class="form-outline mb-4 mb-xl-5">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="John Smith" />
                        <label class="form-label" for="typeName">Name on card</label>
                      </div> -->
  
                      <!-- <div class="form-outline mb-4 mb-xl-5">
                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                          size="7" id="exp" minlength="7" maxlength="7" />
                        <label class="form-label" for="typeExp">Expiration</label>
                      </div> -->
                    </div>
                    <div class="col-12 col-xl-6">
                      <!-- <div class="form-outline mb-4 mb-xl-5">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div> -->
  
                      <!-- <div class="form-outline mb-4 mb-xl-5">
                        <input type="password" id="typeText" class="form-control form-control-lg"
                          placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                        <label class="form-label" for="typeText">Cvv</label>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-xl-3 ">
                  <div class="d-flex justify-content-between" style="font-weight: 500;justify-content: end;">
                    <p class="mb-2">Subtotal</p>
                    <p class="mb-2">9700 Tk</p>
                  </div>
  
                  <div class="d-flex justify-content-between" style="font-weight: 500;">
                    <p class="mb-0">Shipping</p>
                    <p class="mb-0">240 Tk</p>
                  </div>
  
                  <hr class="my-4">
  
                  <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                    <p class="mb-2">Total (tax included)</p>
                    <p class="mb-2">10400 Tk</p>
                  </div>
  
                  <button type="button" class="btn btn-primary btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                      <!-- <span>Checkout</span> -->
                      <a href="checkout.php" style="color: black;">Checkout</a>
                      <!-- <a href="checkout.php">10400 Tk</a> -->
                      <span>10400 Tk</span>
                    </div>
                  </button>
  
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