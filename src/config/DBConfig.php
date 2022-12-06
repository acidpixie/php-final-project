<?php 

namespace Config;

class DbConfig {

    private $user = 'root';
    private $password = 'root';
    private $host = 'localhost';
    private $db = 'kstore';
    private $port = '3306';

    public function connect() {

        $mysqli = new \mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->db,
            $this->port,
        );

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);

    }else{

        return $mysqli;
    }

    } 

}