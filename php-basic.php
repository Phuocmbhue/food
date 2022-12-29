<!DOCTYPE html>
<html>

<?php include 'db.php'; 
$query8 = "SELECT * FROM xampp_3";
$result = $conn->query($query8);
// $abc = $result->fetch_assoc();

print_r($result);
?>


<?php for($i=1; $i <= $result->num_rows; $i++) : ?>
<?php $basic_1 = $result->fetch_assoc(); ?>

<div class="item">
    <h1 class="tieu-de"><?php echo $basic_1['id']; ?></h1>
    <p class="noi-dung"><?php echo $basic_1['name']; ?></p>
    <img src="<?php echo $basic_1['adress']; ?>" alt="">
</div>


<form action="">
    <?php $query_themdulieu = "INSERT INTO `xampp_3`(`id`, `name`, `adress`, `mark`) 
    VALUES ('Ba phuoc','Ha noi','baphuoc@gmail.com.vn','0.56')" ?>
    <input type="text" name="id">
    <input type="text" name="name">
    <input type="text" name="adress">
    <input type="text" name="mark">
</form>
<?php endfor; ?>


</html>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>