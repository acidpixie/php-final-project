<?php
$title = "Login";
require_once "./templates/header.php";
?>

<form class="form-horizontal" method="post" action="user.verify.php">
	<div class="login-container">
		<div class="row">
			<div class="col-lg-12 form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter username" name="username">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
		</div>

		<div class="row">
			<button type="submit" class="btn btn-warning">Submit</button>
		</div>
		<div class="row">
			<div class="col-lg-12 form-group">
				<p>Not a member, <a href="signup.php">Sign-up!</a></p>
			</div>
		</div>
	</div>
</form>



<?php

require_once "./templates/footer.php";
?>