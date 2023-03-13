<?php 

//create mathod here//
$docrrot = $_SERVER['DOCUMENT_ROOT'];
$uploads = $docrrot.'/Time_Travel/public/asset/admin/products/'; 
session_start();

// work process step by step:

//Data collect from Post Data
//Data prepare
//Database connect korte hobe
//Queray korte hobe
//Messages dekhate hobe
//Redirect korte hobe

if(isset($_SERVER['REQUEST_METHOD'])== "POST"){

    // echo "<pre>";
    // print_r($_POST);
    // echo $_SERVER['DOCUMENT_ROOT'].'/Time_Travel/public/asset/admin/products';
    // echo "<pre>";
    // print_r($_FILES);
    // die();

    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // work with image
    $filename = $_FILES['image']['name'];
    $fullpath = $_FILES['image']['full_path'];
    $tempname = $_FILES['image']['tmp_name'];
    $terget = $uploads;
    move_uploaded_file($tempname,$terget.$filename); 

    $data = [
        'title'=>$title,
        'category_id'=>$category_id,
        'description'=>$description,
        'price'=>$price,
        'image' => $filename 
    ];

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

    //queery korte hobe

    $sql = "INSERT INTO products (title,category_id, description,price, image) VALUES (:title,:category_id,:description,:price, :image)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($data);

    $_SESSION['msg']= "Data Created Successfully";

  
  
   header('Location:./index.php');
//     //database connection

//     $servername = "localhost";
//     $username= "root";
//     $password = "";

//   // Create connection
//    $conn = new PDO("mysql:host=$servername;dbname=timeTravel_admin", $username, $password);


//    //quary

//    $sql = "INSERT INTO users (name, description) VALUES (:name,:description)";
//    $stmt= $pdo->prepare($sql);
//    $stmt->execute($data);

}




?>