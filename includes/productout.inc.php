<?php


require_once "class-autoload.inc.php";

    if (isset($_REQUEST['subprodsearch'])){
    

        extract($_REQUEST);
        

        if(!empty($prods)) {

            $productsObj = new ProdsView();

            if ($productsObj->prods_exist($prods) == $prods) {
                
                
                $price=$productsObj->prods_price($prods);
                

                echo '<div class="container mt-4"> 
                    <div class="row">
                    
                    <div class="col">
                    <div class="alert alert-success text-center" role="alert">
                       price is '.$price.' $ !
                    </div>
                    </div>
                    
                    </div>
                    </div>';

            }else{

                echo '<div class="container mt-4"> 
                    <div class="row">
                    
                    <div class="col">
                    <div class="alert alert-danger text-center" role="alert">
                       product does not exist!
                    </div>
                    </div>
                    
                    </div>
                    </div>';

            }

        }else{

            echo '<div class="container mt-4"> 
                    <div class="row">
                    
                    <div class="col">
                    <div class="alert alert-danger text-center" role="alert">
                       is not!
                    </div>
                    </div>
                    
                    </div>
                    </div>';

        }

    }

