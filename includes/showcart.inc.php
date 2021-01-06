<?php

// on favourite page echo the favourite categories

require_once "class-autoload.inc.php";

$prodsObj = new ProdsView();
        
        if ($prodsObj->cart_exists($emaill) == $emaill) {

            $prodsObj = new ProdsView();
            $carrots=$prodsObj->carrots_recover($emaill);
            $carrotsPrice=$prodsObj->carrotsPrice_recover($emaill);
            $tomatoes=$prodsObj->tomatoes_recover($emaill);
            $tomatoesPrice=$prodsObj->tomatoesPrice_recover($emaill);
            $grapes=$prodsObj->grapes_recover($emaill);
            $grapesPrice=$prodsObj->grapesPrice_recover($emaill);

            $grandtotal = $carrotsPrice + $tomatoesPrice + $grapesPrice;

            echo '
            <div class="col-md-12 col-lg-12">
            <div class="odr-box">
                <div class="title-left">
                    <h3>Shopping cart</h3>
                </div>
                <div class="rounded p-2 bg-light">
                <div class="media mb-2 border-bottom">
                    <div class="media-body"> <a href="detail.html">Carrots</a>
                <div class="small text-muted">Price: '.$carrotsPrice.' <span class="mx-2">|</span> Qty: '.$carrots.' <span class="mx-2">|</span> Subtotal: '.$carrotsPrice.'</div>
                <form method="post"><input type="submit" name="carrots" value="Remove" style="width:auto"></form>
                </div>
                </div>
            
                <div class="media mb-2 border-bottom">
                    <div class="media-body"> <a href="detail.html">Tomatoes</a>
                    <div class="small text-muted">Price: '.$tomatoesPrice.' <span class="mx-2">|</span> Qty: '.$tomatoes.' <span class="mx-2">|</span> Subtotal: '.$tomatoesPrice.'</div>
                    <form method="post"><input type="submit" name="tomatoes" value="Remove" style="width:auto"></form>
                </div>
                </div>
            
                <div class="media mb-2 border-bottom">
                    <div class="media-body"> <a href="detail.html">Grapes</a>
                    <div class="small text-muted">Price: '.$grapesPrice.' <span class="mx-2">|</span> Qty: '.$grapes.' <span class="mx-2">|</span> Subtotal: '.$grapesPrice.'</div>
                    <form method="post"><input type="submit" name="grapes" value="Remove" style="width:auto"></form>
                </div>
                </div>
                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5"> $ '.$grandtotal.'</div>
                                </div>
                                <hr> </div>
                        </div>';

        } else {

            echo '<div class="media mb-2 border-bottom">
                    <div class="media-body"> <a href="detail.html">Carrots</a>
                <div class="small text-muted">Price: - <span class="mx-2">|</span> Qty: - <span class="mx-2">|</span> Subtotal: - </div>
                </div>
                </div>';
            
            echo '<div class="media mb-2 border-bottom">
                    <div class="media-body"> <a href="detail.html">Tomatoes</a>
                    <div class="small text-muted">Price: - <span class="mx-2">|</span> Qty: - <span class="mx-2">|</span> Subtotal: - </div>
                </div>
                </div>';
            
            echo '<div class="media mb-2 border-bottom">
                    <div class="media-body"> <a href="detail.html">Grapes</a>
                    <div class="small text-muted">Price: - <span class="mx-2">|</span> Qty: - <span class="mx-2">|</span> Subtotal: - </div>
                </div>
                </div>';

        }
        

        // remove favs

        if (isset($_POST['carrots'])){
  
    
            $prodsObj = new ProdsView();
            $id=$prodsObj->id_recover($emaill);
            $prodsObj = new ProdsContr();
            $prodsObj->createCarrots(0, 0, $id);
            echo'';
            
        } else {
            echo'';
        }

        if (isset($_POST['tomatoes'])){
  
    
            $prodsObj = new ProdsView();
            $id=$prodsObj->id_recover($emaill);
            $prodsObj = new ProdsContr();
            $prodsObj->createTomatoes(0, 0, $id);
            echo'';
            
        } else {
            echo'';
        }

        if (isset($_POST['grapes'])){
  
    
            $prodsObj = new ProdsView();
            $id=$prodsObj->id_recover($emaill);
            $prodsObj = new ProdsContr();
            $prodsObj->createGrapes(0, 0, $id);
            echo'';
            
        } else {
            echo'';
        }

    

?>