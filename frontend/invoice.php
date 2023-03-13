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
    
    <!-- navbar -->
    <?php include_once('../frontend/inc/partial/nav.php');?>
    <!-- end of navbar -->
    

<section>
<div class="card">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <p style="color: darkslategray; font-weight: bold; font-size: 1.5rem;">Invoice >> <strong>ID: #123-123</strong></p>
          </div>
          <div class="col-xl-3 float-end">
            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                class="fas fa-print text-primary" style="font-size: 1.2rem;"></i> Print</a>
            <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                class="far fa-file-pdf text-danger" style="font-size: 1.2rem;"></i> PDF</a>
          </div>
          <hr>
        </div>
  
        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              <p class="pt-0" style="color: darkslategray ; font-weight: bold; font-size: 2rem;">Time Travel</i>
              <!-- <p class="pt-0"> Time Travel</p> -->
            </div>
  
          </div>
  
  
          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: <span style="color: darkslategray ; font-weight: bold;">Samantha</span></li>
                <li class="text-muted">Sector 10, Road 12, House No. 24</li>
                <li class="text-muted">Uttara, Dhaka, 1230</li>
                <li class="text-muted"><i class="fas fa-phone"></i> +88-01456723894</li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted" style="color: darkslategray; font-weight: bold; font-size: 1.4rem;">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color: darkslategray ;"></i> <span
                    class="fw-bold">ID:</span> # 121-426</li>
                <li class="text-muted"><i class="fas fa-circle" style="color: darkslategray ;"></i> <span
                    class="fw-bold">Date: </span>February 4,2023</li>
                <li class="text-muted"><i class="fas fa-circle" style="color: darkslategray ;"></i> <span
                    class="me-1 fw-bold">Status:</span><span class="badge bg-danger text-black fw-bold">
                    Unpaid</span></li>
              </ul>
            </div>
          </div>
  
          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color: darkslategray ;" class="text-white">
                <tr>
                  <th scope="col">Serial No</th>
                  <th scope="col">Product Description</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Total Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1.</th>
                  <td>Kids Watch</td>
                  <td>2</td>
                  <td>1800 Tk</td>
                  <td>2700 Tk</td>
                </tr>
                <tr>
                  <th scope="row">2.</th>
                  <td>Male Smart Watch</td>
                  <td>1</td>
                  <td>4500 Tk</td>
                  <td>2600 Tk</td>
                </tr>
                <tr>
                  <th scope="row">3.</th>
                  <td>Female Smart Watch</td>
                  <td>3</td>
                  <td>3300 Tk</td>
                  <td>6800 Tk</td>
                </tr>
              </tbody>
  
            </table>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <p class="ms-3" style="color: darkslategray; font-weight: bold;">Payment Information</p>
  
            </div>
            <div class="col-xl-3">
              <ul class="list-unstyled">
                <li class="text-muted ms-3"><span class="text-dark me-4">Sub Total:</span> 6700 Tk</li>
                <li class="text-muted ms-3 mt-2"><span class="text-dark me-4">VAT(5%): </span>5500 Tk</li>
              </ul>
              <p class="text-black float-start"><span class=" me-3" style="color: darkslategray; font-weight: bold;"> Total Amount</span><span
                  style="font-size: 25px; color: darkslategray; font-weight: bold;">Tk 10221</span></p>
            </div>
          </div>
          <hr>
          
            <div class="payment-btn">
              <span class="text-secondary-d1 text-105">Thank you for your Purchase.</span>
                        <a href="thankyou.php" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
</section>


<?php
   include_once('../frontend/inc/partial/footer.php');
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

