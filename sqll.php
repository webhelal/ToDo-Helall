<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test_one", $username , $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM tasks");
$stmt->execute();
$tasks = $stmt->fetchAll();
echo "<pre>";
print_r($tasks);
?>
