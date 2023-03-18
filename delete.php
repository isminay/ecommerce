<?php
// Check if item_id is set and not empty if(isset($_GET['item_id']) && !empty($_GET['item_id'])){
	// Include database connection file
	include 'db_connection.php';
   
	// Prepare and execute SQL statement to delete item record
	$sql = "DELETE FROM items WHERE item_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('i', $_GET['item_id']);
	$stmt->execute();
   
	// Close prepared statement and database connection
	$stmt->close();
	$conn->close();
   
	// Redirect back to display page after deletion
	header('Location: display_items.php');
	exit;
else {
	// Redirect back to display page if item_id is not set or empty
	header('Location: display_items.php');
	exit;
}
?>