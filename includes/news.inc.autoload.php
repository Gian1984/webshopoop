<?php

include "class-autoload.inc.php";


    if (isset($_REQUEST['newsmail'])){
    

        extract($_REQUEST);
        

        if(!empty($nletter)) {
                
            $usersObj = new UsersView();
                
                
                    
                    if ($usersObj->news_exist($nletter) != $nletter) {
                
                    $usersObj = new UsersContr();
                    $usersObj->createNews($nletter);

                    echo '<div class="container mt-4"> 
                    <div class="row">
                    
                    <div class="col">
                    <div class="alert alert-success text-center" role="alert">
                       Welcome to our newsletter!
                    </div>
                    </div>
                    
                    </div>
                    </div>';

                    } else {

                        echo '<div class="container mt-4"> 
                        <div class="row">
                        
                        <div class="col">
                        <div class="alert alert-danger text-center" role="alert">
                           You are already registered!
                        </div>
                        </div>
                        
                        </div>
                        </div>'; 

                    }
            
        }

        else
        {
            echo '<div class="container mt-4"> 
                    <div class="row">
                    
                    <div class="col">
                      <div class="alert alert-danger text-center" role="alert">
                      Something goes wrong!
                    </div>
                  </div>
                  
                  </div>
                  </div>'; 
        }

    }
    
?>