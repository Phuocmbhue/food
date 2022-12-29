<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exammpp_3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$query1 = "SELECT * FROM menu"; // Chọn Bảng Table ở Database tương ứng
$result1 = $conn->query($query1); // Lấy dữ liệu QUERY từ Database về

// $abc = $result->fetch_assoc();  // Truyền truy vấn các trường từ DB sang web

$query2 = "SELECT * FROM row_1"; 
$result2 = $conn->query($query2); 

$query3 = "SELECT * FROM row_2";
$result3 = $conn->query($query3);

$query4 = "SELECT * FROM row_3";
$result4 = $conn ->query($query4);

$query6 = "SELECT * FROM news";
$result6 = $conn ->query($query6);

$query6_ = "SELECT * FROM tieudetintuc";
$result6_ = $conn ->query($query6_);

$query8 = "SELECT * FROM footer";
$result8 = $conn ->query($query8);

$query9 = "SELECT * FROM footer_danhmuc1";
$result9 = $conn ->query($query9);

$querydangnhap = "SELECT * FROM tbl_user";
$dangnhap = $conn ->query($querydangnhap);

$queryform = "SELECT * FROM form";
$result_form = $conn ->query($queryform);

// print_r($result);

?>

<?php $basic_2 = $result1->fetch_assoc();?>

<?php $basic_3 = $result2->fetch_assoc();?>

<?php $basic_4 = $result3->fetch_assoc();?>

<?php $basic_5 = $result4->fetch_assoc();?>

<?php $basic_6_ = $result6_->fetch_assoc();?>

<?php $basic_7 = $result8->fetch_assoc();?>

<?php $bacsic_10 = $result_form->fetch_assoc();?>