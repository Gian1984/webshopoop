<?php
// this upload insert something inside the database passing throug the user users.class.php
class ProdsContr extends Prods {

    public function createCart($emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice) {

        $this->setCart($emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice);
    }

    // function to send user name & favourite to the database
    public function createCarrots($carrots, $carrotsprice, $id) {

        $this->setCarrots($carrots, $carrotsprice, $id);
    }

    public function createTomatoes($tomatoes, $tomatoesprice, $id) {

        $this->setTomatoes($tomatoes, $tomatoesprice, $id);
    }

    public function createGrapes($grapes, $grapesprice, $id) {

        $this->setGrapes($grapes, $grapesprice, $id);
    }
   
};