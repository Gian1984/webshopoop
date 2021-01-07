<?php

// send the message of the user to the relative database 

    require_once "class-autoload.inc.php";

    if (isset($_REQUEST['sendmess'])){
    

        extract($_REQUEST);
        

        if(!empty($names) && !empty($email) &&  !empty($subjects) &&  !empty($messages)) {
                
                
                $usersObj = new UsersContr();
                $usersObj->createMessages($names, $email, $subjects, $messages);

                echo '<div class="container mt-4"> 
                      <div class="row">
                    
                      <div class="col">
                      <div class="alert alert-success text-center" role="alert">
                      Message has been sent!
                      </div>
                    </div>
                    
                    </div>
                    </div>';
            
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