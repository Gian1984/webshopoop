<?php
// this file link all the classes together reducing the utilize of the include! 

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){

    $path = 'classes/';
    $ext = '.class.php';

    $fileName = $path.$className.$ext;

    if(!file_exists($fileName)){
        return false;
       
    }

    include_once $path.$className.$ext;
}

?>