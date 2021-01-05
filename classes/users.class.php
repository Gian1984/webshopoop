<?php
//this will be the only class to interact with the database.
class Users extends Dbh { //here we extend to the database coz this will be the only class to interact with him

    //Working with users table 

    //grab information from the database users
    protected function getUser($user){

        $sql = "SELECT * FROM users WHERE user =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$user]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    protected function getEmail($emaill){

        $sql = "SELECT * FROM users WHERE email =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$emaill]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    protected function getPass($hashs){

        $sql = "SELECT * FROM users WHERE hashs =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$hashs]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

    //send info to the database 

    protected function setUser($email, $hashs, $firstname, $lastname){

        $sql = "INSERT INTO users (email, hashs, firstname, lastname) VALUES (?, ?, ?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$email, $hashs, $firstname, $lastname]);

        
    }

    //protected function to change mail & psw
    protected function setNewMailPsw($email, $hashs, $id){
       
        $sql = "UPDATE users SET email=?, hashs=? WHERE id = $id"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$email, $hashs]);

        
    }

    protected function setMessage($names, $email, $subjects, $messages){

        $sql = "INSERT INTO messages (names, email, subjects, messages) VALUES (?, ?, ?, ?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$names, $email, $subjects, $messages]);

        
    }

    protected function setNews($nletter){
        
        $sql = "INSERT INTO newsletter (email) VALUES (?)"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$nletter]);

        
    }

    protected function getNews($nletter){

        $sql = "SELECT * FROM newsletter WHERE email =  ?"; //selecting from database
        $stmt = $this->connect()->prepare($sql); //istantiate a new statement and utilize $this coz i refer to database class and ask to the database to prepare it
        $stmt->execute([$nletter]);

        $result = $stmt->fetchAll();
        return $result;    // i put all the the information of the fetch indise result to be able to send it to the users.view.php 
    }

}

?>