<?php
$q = intval($_GET['q']);

$con = mysqli_connect("23.229.191.132", "patrickkill", "ilwp2000","Coffee");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"Coffee");
$sql="SELECT * FROM coffeeTable WHERE ID = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>CoffeeName</th>
<th>CoffeeDesc</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['CoffeeName'] . "</td>";
  echo "<td>" . $row['CoffeeDesc'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>