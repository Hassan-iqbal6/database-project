<?php include "header.php"; ?>

	<form method="post" action ="Inventoryupdate.php">
		Item Number:
		<input type="number" name="Item_Number" ><br>
		Price:
		<input type="float" name="Price" ><br>
		Name:
		<input type="text" name="Name" ><br>
		Availabilit:
		<input type="number" name="Availability" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="update.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>