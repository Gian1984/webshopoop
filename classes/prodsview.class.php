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




    //working with cart table
    public function showCart($emaill){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getCart($emaill);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['id']." ".$results[0]['email']." ".$results[0]['carrots']." ".$results[0]['carrotsprice']." ".$results[0]['tomatoes']." ".$results[0]['tomatoesprice']." ".$results[0]['grapes']." ".$results[0]['grapesprice'];
        
    }

    public function cart_exists($emaill){

        $results = $this->getCart($emaill);
        return $results != null;
        
    }

    public function id_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['id'];
        
    }

    public function carrots_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['carrots'];
    
    }

    public function carrotsPrice_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['carrotsprice'];
    
    }

    public function tomatoes_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['tomatoes'];
    
    }

    public function tomatoesPrice_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['tomatoesprice'];
    
    }
    public function grapes_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['grapes'];
    
    }

    public function grapesPrice_recover($emaill){
        
        $results = $this->getCart($emaill);
        return $results[0]['grapesprice'];
    
    }
    
}

?>