<?php

    class UsersView extends Prods {

    public function showProds($id){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getProds($id);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['id']." ".$results[0]['price']." ".$results[0]['qnt'];
        
    }

}

?>