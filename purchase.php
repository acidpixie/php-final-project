<?php 

session_start();

require_once __DIR__ . "/./src/database.php";

$title = "Purchase";
require_once "./templates/header.php";

//connect to DB
if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))) {
    $user = getUserByEmail($_SESSION['email']);
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
        <tr>
			<td>Shipping</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>60.00</td>
		</tr>
		<tr>
			<th>Total Including Shipping</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo "R" . ($_SESSION['total_price'] + 60); ?></th>
		</tr>
	</table>

    <h4 class="info">Your Details:</h4>
	<br>
	<form method="post" action="completed.php" class="form-horizontal">
	<div class="form-group">
        <label for="exampleInputEmail1">Firstname:</label>
        <input type="text" class="form-control" value="<?php echo $user['firstname']?>" name="firstname">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Surname:</label>
        <input type="text" class="form-control"  value="<?php echo $user['surname']?>" name="surname">
    </div>

    <div class="form-group">
        <label for="inputAddress">Address:</label>
        <input type="text" class="form-control" id="inputAddress" value="<?php echo $user['address']?>" name="address">
    </div>

    <div class="form-group col-md-12" >
        <div class="form-group" >
            <div class="col-lg-10 col-lg-offset-2" style="margin-left:0px; margin-top: 5px;">
              	<button type="reset" class="btn btn-dark">Cancel</button>
              	<button type="submit" class="btn btn-success">Purchase</button>
            </div>
        </div>
    </form>

    <p class="lead">Please press Purchase to confirm your purchase, or Cancel  to reset the form .</p>
<?php
	} else {
		echo "<p class=\"text-danger\">Your cart is empty! Please make sure you add some items in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }

    //footer
    require_once "./templates/footer.php";

?>