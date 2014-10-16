<?php
$con = mysqli_connect("23.229.191.132", "patrickkill", "ilwp2000","Coffee");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$ID = mysqli_real_escape_string($con, $_POST['ID']);
$CoffeeName = mysqli_real_escape_string($con, $_POST['CoffeeName']);
$CoffeeDesc = mysqli_real_escape_string($con, $_POST['CoffeeDesc']);
$result = mysqli_query($con,"SELECT * FROM coffeeTable");

$sql="INSERT INTO coffeeTable (ID, CoffeeName, CoffeeDesc)
VALUES ('$ID', '$CoffeeName', '$CoffeeDesc')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";


mysqli_close($con);
?>