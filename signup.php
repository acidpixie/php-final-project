<?php
$title = "Sign-up";
require_once "./templates/header.php";
?>

<form class="form-horizontal" method="post" action="user.signup.php">
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="inputName">Firstname</label>
            <input type="text" class="form-control" id="inputName" placeholder="Firstname" name="firstname">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="inputSurname">Lastname</label>
            <input type="text" class="form-control" id="inputSurname" placeholder="Lastname" name="lastname">
        </div>
        <div class="col-md-12 form-group">
        </div>
        <div class="row">
            <label for="inputEmail">Email</label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>

</form>


<?php

require_once "./templates/footer.php";
?>