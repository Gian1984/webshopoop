<?php

    


    if (isset($_REQUEST['submit'])){
    

        extract($_REQUEST);
        

        if(!empty($email) && !empty($first) && !empty($last) && !empty($pass)) {

                $options = [
                    'cost' => 12,
                ];
            
            
                $hashs = password_hash($pass, PASSWORD_BCRYPT , $options);
                

                $usersObj = new UsersView();
                
                
                    
                    if ($usersObj->email_exist($email) != $email) {                        

                        $usersObj = new UsersContr();
                        $usersObj->createUser($email, $hashs, $first, $last);
            

                        echo '<div class="container mt-3"> 
                                <div class="row">
                                
                                <div class="col">
                                    <div class="alert alert-success text-center" role="alert">
                                     Welcome, your account is ready!
                                </div>
                                </div>
                                </div>
                                </div>';

                        exit;
                    } else {
                        echo '<div class="container mt-3"> 
                                <div class="row">
                               
                                <div class="col">
                                    <div class="alert alert-danger text-center" role="alert">
                                    Email already taken!
                                </div>
                                </div>
                                </div>
                                </div>'; 

                    }
            
        }

        else
        {
            echo '<div class="container mt-3"> 
                    <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="alert alert-danger text-center" role="alert">
                        Something goes wrong!
                        </div>
                    </div>
                    <div class="col"></div>
                    </div>
                    </div>'; 
        }

    }
    
?>