<?php 
session_start();

require_once __DIR__ . "/./src/database.php";

$conn = dbconnect();

$name = trim($_POST['username']);
$pass = trim($_POST['password']);

	if(empty($name) || empty($pass)){
		header("Location: ../php-final-project/login.php?login=empty");
	}else{ 
		 

						//check if it is customer
						$name = mysqli_real_escape_string($conn, $name);
						$pass = mysqli_real_escape_string($conn, $pass);

						$query = "SELECT email,password from users";
						$result = mysqli_query($conn, $query);
						for($i = 0; $i < mysqli_num_rows($result); $i++){
							$row = mysqli_fetch_assoc($result);
							if($name == $row['email'] && $pass == $row['password'] ){ 
								$_SESSION['user'] = true;	
								$_SESSION['email'] = $name;
								header("Location: index.php");
							}

						}
    }

	if(isset($conn)) {mysqli_close($conn);}
	