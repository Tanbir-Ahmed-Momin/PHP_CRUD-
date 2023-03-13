<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./category/style.css">
    <script src="./category/script.js"></script>
    <link href="../public/asset/admin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once('./inc/particial/nav.php');
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <!-- <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> -->
                            Category
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <!-- <a class="nav-link" href="./category/create_category.php">Create Category</a> -->
                                <a class="nav-link" href="./category/index.php">All Category</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                            <!-- <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> -->
                            Product
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <!-- <a class="nav-link" href="./products/create_product.php">Add Product</a> -->
                                <a class="nav-link" href="./products/index.php">All Product</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                            <!-- <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> -->
                            Customer
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <!-- <a class="nav-link" href="./products/create_product.php">Add Product</a> -->
                                <a class="nav-link" href="../admin/customer/index.php">All Customer</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <!-- <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div> -->
                            Accouts setting
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="./auth/login.php">Login</a>
                                        <a class="nav-link" href="./auth/register.php">Register</a>
                                        <a class="nav-link" href="#">Forgot Password</a>
                                    </nav>
                                </div>

                            </nav>
                        </div>
                        <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <!-- <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                       

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem culpa quaerat itaque nostrum perspiciatis dolor dignissimos similique provident non nam quisquam dicta dolorum unde sunt, ad voluptas. Magni, laboriosam a?</p>
                        
                    </div>
                </main> -->


            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i> -->
                        <h2 class="fs-2 m-0">Dashboard</h2>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
                </nav>

                 <!-- count data collect -->
                 <?php

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
                   
                    ?>
                 <!-- Count data collect -->

                 <!-- count customer data -->
                 <?php


                    // Database Connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";

                    try {
                    $pdo = new PDO("mysql:host=$servername;dbname=timeTravel_admin", $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                   
                    }
                    catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                    
                    }

                    $stmt = $pdo->query("SELECT * FROM customres ORDER BY id DESC");
                    $customres = $stmt->fetchAll();

                   
                    ?>


                 <!-- count customer data -->

                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2"><?= count($products);?></h3>
                                    <p class="fs-5">Products</p>
                                </div>
                                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2"><?= count($customres);?></h3>
                                    <p class="fs-5">Customers</p>
                                </div>
                                <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">80</h3>
                                    <p class="fs-5">Delivery</p>
                                </div>
                                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">30%</h3>
                                    <p class="fs-5">Profit</p>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row my-5">
                        <h3 class="fs-4 mb-3">Recent Orders</h3>
                        <div class="col">
                            <table class="table bg-white rounded shadow-sm  table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">ID#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Xiaomi Smart Watch</td>
                                        <td>Jim</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Boat Smart Watch</td>
                                        <td>Rimon</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Xiaomi Smart Watch</td>
                                        <td>Kanon</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Boat Smart Watch</td>
                                        <td>Keya</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Smart Watch</td>
                                        <td>Raj</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Xiaomi Smart Watch</td>
                                        <td>Shuvro</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Xiaomi Smart Watch</td>
                                        <td>Riyad</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Lather Smart Watch</td>
                                        <td>Fahim</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Xiaomi Smart Watch</td>
                                        <td>Mahim</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Smart Watch</td>
                                        <td>Rahul</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Xiaomi Smart Watch</td>
                                        <td>Shammi</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Smart Watch</td>
                                        <td>Hina</td>
                                        <td>1200 Tk</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php
                    include_once('./inc/particial/footer.php')
                    ?>

                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="../public/asset/admin/js/scripts.js"></script>
</body>

</html>