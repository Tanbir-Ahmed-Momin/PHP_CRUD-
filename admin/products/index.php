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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="../../public/asset/admin/css/styles.css" rel="stylesheet" />
   <!-- datatable -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">
    <!-- datatable     -->
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

                          <!-- Customer list -->


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

                            <!-- Customer List -->


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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                        </ol>

                        <!-- content write/add here -->
                        <div class="container mt-5">
                            <div class="row justifay-content-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header"><h3>Products List</h3></div>
                                        <?php
                                            if(isset($_SESSION['msg'])){ ?>

                                                <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                <strong>Success!</strong> <?php echo $_SESSION['msg']?>
                                                </div>

                                                <?php unset($_SESSION['msg'])?>

                                            <?php }
                                            ?>
                                        <?php
                                            if(isset($_SESSION['error'])){ ?>

                                                <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                <strong>Success!</strong> <?php echo $_SESSION['error']?>
                                                </div>

                                                <?php unset($_SESSION['error'])?>

                                            <?php }
                                            ?>

                                                  

                                        <div class="card-body">
                                            <table id="example" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <a href="./create.php" class="btn btn-sm btn-success">Create</a>
                                                        <th>Title</th>
                                                        <th>Category Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                    $i =1;
                                                    foreach($products as $product){ ?>

                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><?= $product['title']?></td>

                                                <?php
                                                    $cat_id = $product['category_id'];

                                                    
                                                    
                                                    $stmt = $pdo->query("SELECT name FROM category WHERE id=$cat_id ");
                                                    $category = $stmt->fetch();
                                                    
                                                    
                                                ?>
                                                        
                                                        <td><?= $category['name']?></td>

                                                        <td><?= $product['description']?></td>
                                                        <td><?= $product['price']?></td>
                                                        <td><img src="<?= $webpath.$product['image']?>" height="70" width="60" alt="" ></td>
                                                        <td class="d-flex" >
                                                            <a href="./show.php?id=<?=$product['id']?>" class="btn btn-sm btn-primary mx-1 ">View</a>
                                                            <a href="./edit.php?id=<?=$product['id']?>" class="btn btn-sm btn-warning mx-1">Edit</a>

                                                            <form action="./delete.php" method="POST">

                                                            <input type="hidden" name="id" value="<?=$product['id'];?>">
                                                            <button type="submit" class="btn btn-sm btn-danger mx-1" name="submit" onclick="confirm('Are you Sure?')">Delete</button>
                                                            </form>
                                                            
                                                        
                                                        </td>
                                                    </tr>
                                                    


                                                    <?php }


                                                    ?>
                                                    
                                                    
                                                    
                                                        
                                                </tbody>
                                            </table>
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
        <!-- data table js -->
        <script src ="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src ="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src ="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <script src ="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
        <script src ="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
              <!-- data table js -->
        <script src="../../public/asset/admin/js/scripts.js"></script>
        <script src="../../public/asset/admin/js/datatable.js"></script>
    </body>
</html>
