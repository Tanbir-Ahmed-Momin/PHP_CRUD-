<?php
session_start();

if(isset($_SERVER['REQUEST_METHOD'])=='POST'){

    // echo "<pre>";
    // print_r($_POST);
    // die();

$id = $_POST['id'];
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$data = [
    'category_id'=>$category_id,
    'title'=>$title,
    'description'=>$description,
    'price'=>$price,
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

$sql = "UPDATE products SET title=:title, category_id=:category_id, description=:description, price=:price WHERE id=$id";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);

$_SESSION['msg']="Product Update Successfully";

header("Location:./index.php");

}



?>