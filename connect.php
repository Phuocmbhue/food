<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


// $query10 = "SELECT * FROM users_form";
// $result10 = $conn ->query($query10);
// print_r($result10);


// echo "<pre>";
// print_r($_POST);

?>

<?php // $user = $result10->fetch_assoc();?>