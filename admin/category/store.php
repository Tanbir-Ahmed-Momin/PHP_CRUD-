<?php 

//create mathod here//

session_start();

//Data collect form post data
if(isset($_SERVER['REQUEST_METHOD'])== "POST"){

    // echo "<pre>";
    //  print_r($_POST);

    $name = $_POST['name'];
    $description = $_POST['description'];

}
    $data = [
     'name' => $name,
     'description' =>$description
    ];

   // Database Connection
   $servername = "localhost";
   $username = "root";
   $password = "";

    try {
   $pdo = new PDO("mysql:host=$servername;dbname=timeTravel_admin", $username, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   $_SESSION['msg']="Created Succesfully";
   }
    catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
   $_SESSION['error']="wrong";
   }
   // Queray korte hobe

   $sql = "INSERT INTO category (name, description) VALUES (:name, :description)";
   $stmt= $pdo->prepare($sql);
   $stmt->execute($data);

  
  
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






?>