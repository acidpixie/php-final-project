<?php 

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'kstore';

    //connect to DB
        $conn = new mysqli($host, $user, $password, $db);

        if ($conn -> connect_error) {
            die("Connection failed: " . mysqli_connect_error());
            
          } else {
          
            return $conn;
            
          }