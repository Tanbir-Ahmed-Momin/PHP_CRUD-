<?php
    session_start();
    
    $webroot = "http://localhost/";
    $webpath =  $webroot."/Time_Travel/public/asset/admin/products/";

    //Database Connection

$servername = "localhost";
$username = "root";
$password = "";

try {
$pdo = new PDO("mysql:host=$servername;dbname=timeTravel_admin", $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected successfully";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}

$stmt = $pdo->query("SELECT * FROM products ");
$products = $stmt->fetchAll();

// $stmt = $pdo->query("SELECT * FROM categories ");
// $categories = $stmt->fetch();


?>



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
    <link rel = "stylesheet" href = "./public/asset/frontend/css/main.css">
    
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
    
   <?php
   include_once('./frontend/inc/partial/nav.php');
   ?>

    <!-- header -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white">Best Price & Offer</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">New Seasons</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">Buy Now</a>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white">Best Collection</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">New Arrivals</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">Shop Now</a>
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end of header -->

    <!-- collection -->
    <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">New Collection</h2>
            </div>

            <!-- <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">All</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">Best Sellers</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button>
                </div> -->

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <?php foreach($products as $product) {?>
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                        
                            <img src="<?= $webpath.$product['image']?>" height="300px" width="280px" class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1"><?= $product['title']?></p>
                            <span class = "fw-bold"><?= $product['price']?> Tk</span>
                        </div>
                    </div>
                    <?php }?>

                    <!-- <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/w2.jpg" height="300px" width="280px" class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">3400 Tk</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/w3.jpg"height="300px" width="280px" class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">2800 Tk</span>
                        </div>
                    </div> -->

                    <!-- <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/w5.webp" height="300px" width="280px" class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star-half-alt"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">3500 Tk/span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/w4.webp" height="300px" width="280px" class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">1400 Tk</span>
                        </div>
                    </div>

                    

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/i17.jpg" height="300px" width="280px"class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">1200 Tk</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/w8.webp"height="300px" width="280px" class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">2500 Tk</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/i8.jpg" height="300px" width="280px"class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star-half-alt"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">1500 Tk</span>
                        </div>
                    </div>
                 

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "./public/asset/frontend/imagess/i8.jpg" height="300px" width="280px"class = "w-100">
                            <span class = "position-absolute bg-warning text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star-half-alt"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Smart Watch</p>
                            <span class = "fw-bold">1500 Tk</span>
                        </div>
                    </div> -->

                    <!-- end -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->

    <!-- special products -->
    <section id = "special" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Special Watch Collection of Our Shop</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "./public/asset/frontend/imagess/w5.webp"height="300px" width="260px" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Xaomi Smart Watch</p>
                        <span class = "fw-bold d-block">4400 Tk</span>
                        <a href = "./Frontend/cart.php" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "./public/asset/frontend/imagess/w3.jpg" height="300px" width="260px"class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Smart Watch</p>
                        <span class = "fw-bold d-block">3500 Tk</span>
                        <a href = "./Frontend/cart.php" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "./public/asset/frontend/imagess/i8.jpg"height="300px" width="260px" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Realme Smart Watch</p>
                        <span class = "fw-bold d-block">3900 Tk</span>
                        <a href = "./Frontend/cart.php" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "./public/asset/frontend/imagess/w4.webp"height="300px" width="260px" class = "w-100">
                        <span class = "position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">Smart Watch</p>
                        <span class = "fw-bold d-block">5500 Tk</span>
                        <a href = "./Frontend/cart.php" class = "btn btn-primary mt-3">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->

    <!-- blogs -->
    <section id = "offers" class = "py-5">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-white">Discount Up To 30%</span>
                    <h2 class = "mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href = "#" class = "btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->
    <section>
        <div>
            <h1></h1>
        </div>
    </section>

    <!-- blogs -->
    <!-- <section>
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4" style="color: darkslategrey; ">Customer Review</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
              Here are some reviews of our regular and happy customer!!!!!!
            </p>
          </div>
        </div>
      
        <div class="row text-center">
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Samantha</h5>
            <h6 class="text-primary mb-3">Graphics Designer</h6>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>As I am a regular customer of this shop, I just love their unique collection. And also I can say that it's my passion to collect different designer watch. And I loved to buy watch from this shop......
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Lucy</h5>
            <h6 class="text-primary mb-3">Web Designer</h6>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>As I am a regular customer of this shop, I just love their unique collection. And also I can say that it's my passion to collect different designer watch. And I loved to buy watch from this shop......
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3" style="color: darkslategray;">Smith</h5>
            <h6 class="text-primary mb-3">Software Engineer</h6>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>As I am a regular customer of this shop, I just love their unique collection. And also I can say that it's my passion to collect different designer watch. And I loved to buy watch from this shop......
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
        </div>
      </section> -->

    <!-- about us -->
    <!-- <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class = "lead text-muted">Time Travel watches are crafted from the finest raw materials and assembled with scrupulous attention  </p>
                    <p>Explore the Time Travel collection of prestigious, high-precision timepieces. Time Travel offers a wide assortment of Classic and Professional watch models to suit any wrist. Discover the broad selection of Time Travel watches to find a perfect combination of style and functionality..</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "./public/asset/frontend/imagess/wa4.jpg" height="260px" width="430px" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section> -->
    <!-- end of about us -->

    <!-- popular -->
    <section id = "popular" class = "py-5">
        <div class = "container">
            <div class = "title text-center pt-3 pb-5">
                <h2 class = "position-relative d-inline-block ms-4">Most Selling Products Of This Year</h2>
            </div>

            <div class = "row">
                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Top Rated Watch</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i8.jpg"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>3500 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i1.jpg"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>4500 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i9.jpg" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>4000 Tk</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Best Selling Watch</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i11.jpg" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>3600 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i16.jpeg" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2900 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i18.jpg"height="300px" width="260px" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>3500 Tk</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">On Sale Watch</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i15.jpg" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2600 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i17.jpg" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2800 Tk</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "./public/asset/frontend/imagess/i23.jpg" height="300px" width="260px"alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Smart Watch</p>
                            <span>2500 Tk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of popular -->

    <!-- newsletter -->
    <section id = "newsletter" class = "py-5">
        <div class = "container">
            <div class = "d-flex flex-column align-items-center justify-content-center">
                <div class = "title text-center pt-3 pb-5">
                    <h2 class = "position-relative d-inline-block ms-4">Wanna Contact With Us!!!!</h2>
                </div>

                <p class = "text-center text-muted">You can contact with us by sending email.. Please keep on touch with us.. We always come with the biggest offer and try to bring exclusive designer watch for our customer 😊 ....</p>
                <div class = "input-group mb-3 mt-3">
                    <input type = "text" class = "form-control" placeholder="Enter Your Email ...">
                    <button class = "btn btn-primary" type = "submit">Submit</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end of newsletter -->

   

    <?php
   include_once('./frontend/inc/partial/footer.php');
   ?>


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
