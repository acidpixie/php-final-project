<?php
session_start();

require_once __DIR__ . "/./src/database.php";
// add in header
$title = "Checkout";
require_once "./templates/header.php";

if (!isset($_SESSION['user'])) {
	echo '<div class="alert alert-danger" role="alert">
		You Need to <a href="Login.php">Login</a> First! 
	  </div>';
}
if (isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))) {

?>

	<table class="table">
		<tr>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
		<?php
		foreach ($_SESSION['cart'] as $id => $qty) {
			$conn = dbconnect();
			$album = mysqli_fetch_assoc(getProductId($conn, $id));
		?>
			<tr>
				<td><?php echo $album['name'] . " by " . $album['artist']; ?></td>
				<td><?php echo "R" . $album['price']; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo "R" . $qty * $album['price']; ?></td>
			</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo $_SESSION['total_items']; ?></th>
			<th><?php echo "R" . $_SESSION['total_price']; ?></th>
		</tr>
	</table>
<?php

	if (isset($_SESSION['user'])) {
		echo '<form method="post" action="purchase.php" class="form-horizontal">
		<div class="form-group" style="margin-left:0px">
			<input type="submit" name="submit" value="Purchase" class="btn btn-warning" >
			<a href="cart.php" class="btn btn-warning">Edit Cart</a> 
		</div>
	</form>
	<p class="lead">Please press Purchase to confirm your purchase, or Edit Cart to add or remove items.</p>';
	}
} else {
	echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
}
if (isset($conn)) {
	mysqli_close($conn);
}
//add footer
require_once "./templates/footer.php";
?>