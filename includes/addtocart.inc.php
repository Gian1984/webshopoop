<?php

// adding the product to the cart based on the email of the user 

require_once "class-autoload.inc.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// working with carrots

if (isset($_POST['carrots'])){
  
    
  $prodsObj = new ProdsView ();
                
                if ($prodsObj->cart_exists($emaill) != $emaill) {

                  $carrots = 1;
                  $carrotsprice = 9.70;
                  $tomatoes = 0;
                  $tomatoesprice = 0;
                  $grapes = 0;
                  $grapesprice = 0;
                  
                  $prodsObj = new ProdsContr();
                  $prodsObj->createCart($emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice);

                //   $prodsObj = new ProdsView();
                //   $id=$prodsObj->id_recover($emaill);
                  
                
                //   $prodsObj = new ProdsContr();
                //   $prodsObj->createFavouriteBusiness('<div class="card text-center mt-2">
                //                               <div class="card-header">
                //                               Business
                //                               </div>
                //                               <div class="card-body">
                //                               <h5 class="card-title">Business</h5>
                //                               <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                //                               <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                //                               </div>
                //                               <div class="card-footer text-muted">
                //                               <form method="post"><input type="submit" name="business" value="Remove fav" style="width:auto"></form>
                //                               </div>
                //                               </div>', $id);
            

                  echo '<div class="container mt-3"> 
                        <div class="row">
                        
                        <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                              Added !
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                        </div>
                        
                        </div>
                        </div>';

                    

                //   echo '';

                } else {

                  
                  $prodsObj = new ProdsView();
                  $id=$prodsObj->id_recover($emaill);

                  $carrots = 1;
                  $carrotsprice = 9.70;
                  
                  $prodsObj = new ProdsContr();
                  $prodsObj->createCarrots($carrots, $carrotsprice, $id);
                //   $prodsObj = new UsersContr();
                //   $prodsObj->createFavouriteBusiness('<div class="card text-center mt-2">
                //                               <div class="card-header">
                //                               Business
                //                               </div>
                //                               <div class="card-body">
                //                               <h5 class="card-title">Business</h5>
                //                               <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                //                               <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                //                               </div>
                //                               <div class="card-footer text-muted">
                //                               <form method="post"><input type="submit" name="business" value="Remove fav" style="width:auto"></form>
                //                               </div>
                //                               </div>', $id);
                  
                  echo '<div class="container mt-3"> 
                        <div class="row">
                        
                        <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Added !
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        </div>
                        
                        </div>
                        </div>';
                  
                        

                }

} else {

  
  echo ''; 


}

// working with tomatoes

if (isset($_POST['tomatoes'])){
  
    
    $prodsObj = new ProdsView ();
                  
                  if ($prodsObj->cart_exists($emaill) != $emaill) {
  
                    $carrots = 0;
                    $carrotsprice = 0;
                    $tomatoes = 1;
                    $tomatoesprice = 9.70;
                    $grapes = 0;
                    $grapesprice = 0;
                    
                    $prodsObj = new ProdsContr();
                    $prodsObj->createCart($emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice);
  
                  //   $prodsObj = new ProdsView();
                  //   $id=$prodsObj->id_recover($emaill);
                    
                  
                  //   $prodsObj = new ProdsContr();
                  //   $prodsObj->createFavouriteBusiness('<div class="card text-center mt-2">
                  //                               <div class="card-header">
                  //                               Business
                  //                               </div>
                  //                               <div class="card-body">
                  //                               <h5 class="card-title">Business</h5>
                  //                               <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                  //                               <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                  //                               </div>
                  //                               <div class="card-footer text-muted">
                  //                               <form method="post"><input type="submit" name="business" value="Remove fav" style="width:auto"></form>
                  //                               </div>
                  //                               </div>', $id);
              
  
                    echo '<div class="container mt-3"> 
                          <div class="row">
                         
                          <div class="col">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Added !
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          </div>
                          
                          </div>
                          </div>';
  
  
                  //   echo '';
  
                  } else {
  
                    
                    $prodsObj = new ProdsView();
                    $id=$prodsObj->id_recover($emaill);
  

                    $tomatoes = 1;
                    $tomatoesprice = 9.70;
                    
                    $prodsObj = new ProdsContr();
                    $prodsObj->createTomatoes($tomatoes, $tomatoesprice, $id);
                  //   $prodsObj = new UsersContr();
                  //   $prodsObj->createFavouriteBusiness('<div class="card text-center mt-2">
                  //                               <div class="card-header">
                  //                               Business
                  //                               </div>
                  //                               <div class="card-body">
                  //                               <h5 class="card-title">Business</h5>
                  //                               <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                  //                               <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                  //                               </div>
                  //                               <div class="card-footer text-muted">
                  //                               <form method="post"><input type="submit" name="business" value="Remove fav" style="width:auto"></form>
                  //                               </div>
                  //                               </div>', $id);
                    
                    echo '<div class="container mt-3"> 
                          <div class="row">
                          
                          <div class="col">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Added !
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          </div>
                          
                          </div>
                          </div>';
                    
                  
  
                  }
  
  } else {
  
    
    echo ''; 
  
  
  }

  // Working with grapes

  if (isset($_POST['grapes'])){
  
    
    $prodsObj = new ProdsView ();
                  
                  if ($prodsObj->cart_exists($emaill) != $emaill) {
  
                    $carrots = 0;
                    $carrotsprice = 0;
                    $tomatoes = 0;
                    $tomatoesprice = 0;
                    $grapes = 1;
                    $grapesprice = 9.70;
                    
                    $prodsObj = new ProdsContr();
                    $prodsObj->createCart($emaill, $carrots, $carrotsprice, $tomatoes, $tomatoesprice, $grapes, $grapesprice);
  
                  //   $prodsObj = new ProdsView();
                  //   $id=$prodsObj->id_recover($emaill);
                    
                  
                  //   $prodsObj = new ProdsContr();
                  //   $prodsObj->createFavouriteBusiness('<div class="card text-center mt-2">
                  //                               <div class="card-header">
                  //                               Business
                  //                               </div>
                  //                               <div class="card-body">
                  //                               <h5 class="card-title">Business</h5>
                  //                               <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                  //                               <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                  //                               </div>
                  //                               <div class="card-footer text-muted">
                  //                               <form method="post"><input type="submit" name="business" value="Remove fav" style="width:auto"></form>
                  //                               </div>
                  //                               </div>', $id);
              
  
                    echo '<div class="container mt-3"> 
                          <div class="row">
                          
                          <div class="col">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Added !
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                          </div>
                          
                          </div>
                          </div>';
  
  
                  //   echo '';
  
                  } else {
  
                    
                    $prodsObj = new ProdsView();
                    $id=$prodsObj->id_recover($emaill);
  
                    
                    $grapes = 1;
                    $grapesprice = 9.70;
                    
                    $prodsObj = new ProdsContr();
                    $prodsObj->createGrapes($grapes, $grapesprice, $id);
                  //   $prodsObj = new UsersContr();
                  //   $prodsObj->createFavouriteBusiness('<div class="card text-center mt-2">
                  //                               <div class="card-header">
                  //                               Business
                  //                               </div>
                  //                               <div class="card-body">
                  //                               <h5 class="card-title">Business</h5>
                  //                               <p class="card-text">Exclusive reporting and breaking news about the most important business.</p>
                  //                               <a href="../apppage/business.php" class="btn btn-outline-dark">Business</a>
                  //                               </div>
                  //                               <div class="card-footer text-muted">
                  //                               <form method="post"><input type="submit" name="business" value="Remove fav" style="width:auto"></form>
                  //                               </div>
                  //                               </div>', $id);
                    
                    echo '<div class="container mt-3"> 
                          <div class="row">
                          
                          <div class="col">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                          Added !
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          </div>
                          
                          </div>
                          </div>';
                    
                  
  
                  }
  
  } else {
  
    
    echo ''; 
  
  
  }

  


?>