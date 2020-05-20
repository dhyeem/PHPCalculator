<?php 


spl_autoload_register('myAutoLoader');

function myAutoLoader ($className){
    $uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($uri, 'includes') !== false) {
        $path = '../classes/';
    }
    else {
        $path = 'classes/';
    }

    $extinsion = '.class.php';
    require_once $path . $className . $extinsion ; 
}