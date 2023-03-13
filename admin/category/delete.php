<?php
//delete mathod here//
session_start();


//Data collect form post data
if(isset($_POST['submit'])){

    
    $id = $_POST['id'];
    // echo "<pre>";
    // print_r($_POST);
    // die ();
    

    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $pdo = new PDO("mysql:host=$servername;dbname=timeTravel_admin", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    // $_SESSION['msg']="Created Succesfully";
    }
    catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    $_SESSION['error']="wrong";
    }

    $sql = "DELETE FROM category WHERE id=$id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();

    $_SESSION['error']= "Data Deleted Successfully";

    header('Location:./index.php');

}



?>