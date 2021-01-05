<?php
class Prods extends Dbh {

    //send the

    protected function getProd($id){

        $sql = "SELECT * FROM products (price) WHERE id =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$id]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }
}

?>