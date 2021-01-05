<?php
// this class will run the connection with the database
class Dbh {

    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbname= "webshop";


    protected function connect() {

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pwd); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //fetch assoc have like output an array but we can change in order to have an object
        return $pdo; 
    }

}

?>