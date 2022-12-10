<?php

use DataAccessObject;
use Models\User;

//get data when form is submitted

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty(trim($_POST["firstname"]))) {
        $errName = "Please enter in a name";
    } else {
        $firstname = trim($_POST["firstname"]);
    }
}




?>
