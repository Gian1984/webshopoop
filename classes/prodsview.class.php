<?php

    class ProdsView extends Prods {

    public function showProds($prod){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getProds($prod);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['id']." ".$results[0]['types']."".$results[0]['price']."  ".$results[0]['qnt'];
        
    }

    public function prods_price($prod){

        $results = $this->getProds($prod);
        return $results[0]['price'];
        
    }

    public function prods_exist($prod){
        
        $results = $this->getProds($prod);
        return $results[0]['types'];
    }

}

?>