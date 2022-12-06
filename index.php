<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/vendor/autoload.php";

use Models\Album;
use Models\User;
use Config;
use Config\DbConfig;
use DataAccessObject\StoreDAO;

$dbConfig = new DbConfig();
$storeDAO = new StoreDAO();


//Setup

echo "<h3>Database Connection</h3>";
var_dump($dbConfig->connect());

echo "<h3>Load Data from Database</h3>";
var_dump($albumDAO->readAll($dbConfig));