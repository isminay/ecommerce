<?php
// Get the submitted form data
$item_id = $_POST['item_id'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

// Connect to the database
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
if (!$conn) {

die("Connection failed: " .mysqli_connect_error());
}


// Update the item record on the database
$sql =" UPDATE items SET item_name='$item_name', item_price='$item_price', category_id='$category_id' WHERE item_id=$item_id";
if (mysqli_query($conn, $sql)) {
   echo "Item updated successfully";
} else {
   echo "Error updating item: " .mysqli_error($conn);
}

// Close the database connection 
mysqli_close($conn);
?>