<?php
$con=mysqli_connect("localhost","root","","art_gallery");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM product");

echo "<table border='1'>
<tr>
<th>property_id</th>
<th>seller_name</th>
<th>city</th>
<th>type_of_property</th>
<th>Price</th>
<th>Image</th>



</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row["pname"] . "</td>";
echo "<td>" . $row['artist_name'] . "</td>";
echo "<td>" . $row['pyear'] . "</td>";
echo "<td>" . $row['style'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
//echo "<td>". $row["image"]."</td>";

// echo "<td>" . $row['other_rooms'] . "</td>";
// echo "<td>" . $row['balconies'] . "</td>";

// echo "<td>" . $row['reserved_parking'] . "</td>";
// echo "<td>" . $row['total_no_of_floor'] . "</td>";
// echo "<td>" . $row['floor_no'] . "</td>";
// echo "<td>" . $row['availability_status'] . "</td>";
// echo "<td>" . $row['age_of_property'] . "</td>";
// echo "<td>" . $row['seller_contact_no'] . "</td>";
// echo "<td>" . $row['images'] . "</td>";
// echo "<td>" . $row['special_prop1'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>