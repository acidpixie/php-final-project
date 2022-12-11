<?php 

session_start();

include __DIR__ . '/../src/model/User.php';

User::login();