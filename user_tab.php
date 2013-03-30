<?php
$con=mysqli_connect("localhost","root","","my_db");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user");

echo "<table border='1'>
<tr>
<th>Id</th>
<th>User Name</th>
<th>Password</th>
<th>Name</th>
<th>Address</th>
<th>Age</th>
<th>DOB</th>
<th>Pincode</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
	echo "<td>" . $row['password'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['age'] . "</td>";
	echo "<td>" . $row['date_of_birth'] . "</td>";
	echo "<td>" . $row['pincode'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 