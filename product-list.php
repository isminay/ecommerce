<?php
// connect to the database 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name" ;
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error) {
die("Connection failed:" .$conn->connect_error);
}
// select all products from the database 
$sql= "SELECT* FROM products";
$result = $conn->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) 
// output a row for each product
echo "<tr>" ;
echo "<td>".$row["product_name"]:</td>"; 
echo  "<td>".$row["price"]."</td>";
echo "<td><a href='product.php?id=".$row["id"]."'>View Product</a></td>"; 
echo "</tr>";
