<?php
session_start();

if(isset($_POST['submit'])){
    $id = $_POST['id'];

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

$sql = "DELETE FROM products WHERE id=$id";
$stmt= $pdo->prepare($sql);
$stmt->execute();

$_SESSION['error']= "Data Deleted Successfully";

header('Location:./index.php');

}
?>