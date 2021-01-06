<?php
class Prods extends Dbh {

    //Working with product table

    protected function getEmail($emaill){

        $sql = "SELECT * FROM users WHERE email =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$emaill]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    protected function getProds($prod){

        $sql = "SELECT * FROM products WHERE types =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$prod]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }







    //Working with cart table

    protected function getCart($emaill){

        $sql = "SELECT * FROM carts WHERE email =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$emaill]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    // 1st time we add something on the cart we need to upload to db the user in this case the mail

    protected function setCart($emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice){

        $sql = "INSERT INTO carts (email, carrots, carrotsprice, tomatoes, tomatoesprice, grapes, grapesprice) VALUES (?, ?, ?, ?, ?, ?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice]);

        
    }

    // for add other product we update the db cart

    protected function setCarrots($carrots, $carrotsprice, $id){
       
        $sql = "UPDATE carts SET carrots=?, carrotsprice=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$carrots, $carrotsprice]);

        
    }

    // for add other product we update the db cart

    protected function setTomatoes($tomatoes, $tomatoesprice, $id){
       
        $sql = "UPDATE carts SET tomatoes=?, tomatoesprice=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$tomatoes, $tomatoesprice]);

        
    }

    // for add other product we update the db cart

    protected function setGrapes($grapes, $grapesprice, $id){
       
        $sql = "UPDATE carts SET grapes=?, grapesprice=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$grapes, $grapesprice]);

        
    }


}

?>