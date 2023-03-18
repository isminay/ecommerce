<!-- update_ item.php ->
<?php
// Code to retrieve product details from the database and populate the form with default values

?>

<forma ction="process_update_item.php"   method="POST">
<label for="item_name">ltem Name:</label>
<input type="text" id="item_name" name="item_name" "required>

<label for="item_price">ltem Price:</label>
<input type="number" id="item_price" name="item_price" min="O" step= ".01" value="<?php echo $item_price;?>" required>

<input type="hidden" name="item_id" value="<?php echo $item_ id;?>">
<input type="submit" value="Update Item">
</form>
