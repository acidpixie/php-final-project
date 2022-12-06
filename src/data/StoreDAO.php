<?php 

namespace DataAccessObject;

use Models\Album;
use Models\User;

class StoreDAO {

    public function create($DbConfig, $User) {

        $conn = $DbConfig->connect();

        //SQL statement to insert user into DB

        $statement = "INSERT INTO users (firstname, surname, email, password, address)" . 
        "VALUES ('".$User->getFirstname()."','".$User->getSurname()."','".$User->getEmail()."','".$User->getPassword()."','".$User->getAddress()."')";

        //send request
        if ($result = $conn->query($statement)) {
            $conn->close();
            return $result;

        }else{
            die("Connection failed: " . $conn->error);
        }
    }

    public function readAll($DbConfig) {

        $conn = $DbConfig->connect(); 

        $dbProduct = [];

        $statement = "SELECT * FROM products";

        if ($result = $conn->query($statement)) {

            while($row = $result->fetch_object()) {

                $albumObj = new Album($row->product_id, $row->name, $row->artist, $row->price, $row->image, $row->released);

                $albumObj->setProduct_id($row->product_id);
                array_push($dbProduct, $albumObj);
            }

            $conn->close();
            return $dbProduct;
            
        } else {

            echo $conn->error; die("Connection failed " . $conn->error);
        }

        $conn->close();

    }
}