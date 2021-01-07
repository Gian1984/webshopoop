<?php

//here on recover the information by the database to check the log in and start the session of the user 


require_once "class-autoload.inc.php";

    if (isset($_REQUEST['submitl'])){
    

        extract($_REQUEST);
        

        if(!empty($emaill) &&  !empty($passl)) {
                
                $usersObj = new UsersView();
                
                
                    
                    if ($usersObj->email_exist($emaill) == $emaill) {
                        
                        $hashs=$usersObj->pass_exist($emaill);
                        

                        if (password_verify ($passl, $hashs)){

                            session_start();
                    
                            $_SESSION['emaill'] = $emaill;
                            
                                                       
                           

                            echo '<div class="container mt-3"> 
                                    <div class="row">
                                    <div class="col">
                                        <div class="alert alert-success text-center" role="alert">
                                        Welcome '.$emaill.'!
                                        </div>
                                    </div>
                                    </div>
                                    </div>';

                        } else {
                            echo '<div class="container mt-3"> 
                                    <div class="row">
                                    <div class="col">
                                        <div class="alert alert-danger text-center" role="alert">
                                        Pass does not match!
                                        </div>
                                    </div>
                                    </div>
                                    </div>';


                                
                        }    
                    } else {
                        echo '<div class="container mt-3"> 
                                <div class="row">
                                <div class="col">
                                    <div class="alert alert-danger text-center" role="alert">
                                    This mail does not exist!
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