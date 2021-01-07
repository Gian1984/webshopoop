<?php

//working on the search of navbar, here query the database to output some information of the products
// with the 3 product of the shop output a success alert if not that the product is not avaible

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
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        The price is '.$price.' $  <a href="shop.php" class="alert-link">go to shop</a> to add the item in to your cart.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>
                    
                    </div>
                    </div>';

            }else{

                echo '<div class="container mt-4"> 
                    <div class="row">
                    
                    <div class="col">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Sorry this product is not avaible  <a href="shop.php" class="alert-link">go to shop</a> to check our product offering.
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
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
                       somenthing goes wrong!
                    </div>
                    </div>
                    
                    </div>
                    </div>';

        }

    }

