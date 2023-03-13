<?php

$id= $_GET['id'];

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

$stmt = $pdo->query("SELECT * FROM products WHERE id = $id");
$product = $stmt->fetch();

// $stmt = $pdo->query("SELECT * FROM categories WHERE id = $id");
// $categories = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="../../public/asset/admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        include_once('../inc/particial/nav.php');
        ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="../index.php">
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
                                    <!-- <a class="nav-link" href="./create_category.php">Create Category</a> -->
                                    <a class="nav-link" href="../category/index.php">All Category</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <!-- <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> -->
                                Product
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="../products/create.php">Add Product</a> -->
                                    <a class="nav-link" href="./index.php">All Product</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                                <!-- <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> -->
                                Customer
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="./products/create.php">Add Product</a> -->
                                    <a class="nav-link" href="../customer/index.php"> Customer List</a>
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
                                            <a class="nav-link" href="../auth/login.php">Login</a>
                                            <a class="nav-link" href="../auth/register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                        </ol>

                        <!-- content write/add here -->
                        
                        <div class="container mt-5">
                            <div class="row justifay-content-center">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header"><h3>Edit Product</h3></div>
                                        <div class="card-body">
                                            <form action="./update_store.php" method="POST" >

                                                
                                                <?php
                                                    //$cat_id = $product['category_id'];

                                                    
                                                    
                                                    $stmt2 = $pdo->query("SELECT * FROM category");
                                                    $category = $stmt2->fetchall();
                                                    
                                                    // print_r($category);

                                                    // die();
                                                    
                                                ?>
                                                <div class="mb-3">

                                            <select required name="category_id" id="category_name" class="form-control">
                                            

                                            <option selected disabled>Select Category</option>

                                                <?php

                                                    foreach ($category as $category) { ?>


                                                        <option value="<?= $category['id'] ?>"
                                                        
                                                        <?=$category["id"]==$product["category_id"]? 'selected': ''?>
                                                        
                                                        ><?= $category['name'] ?></option>

                                                <?php
                                                }

                                                ?>
                                            </select>

                                            </div>
                                                
                                                <div class="mb-3">
                                                <input hidden type="hidden" class="form-control" name="id" id="id" value="<?=$id?>">
                                                    <label for="title">Product Title:</label>
                                                <input required type="text" class="form-control" name="title" id="title" value="<?=$product['title']?>">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="description">Description:</label>
                                                    <textarea required name="description" id="description" class="form-control" rows="5"><?=$product['description']?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="price">Price:</label>
                                                    <input required type="number" name="price" id="price" class="form-control" value="<?=$product['price']?>">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <input type="submit" value="Update" class="form-control btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                    </div>
            </div>
        </div>
                        
                    </div>
                </main>


                <?php
                    include_once('../inc/particial/footer.php')
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../public/asset/admin/js/scripts.js"></script>
    </body>
</html>
