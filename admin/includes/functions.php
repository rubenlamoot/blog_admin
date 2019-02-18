<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/02/2019
 * Time: 11:35
 */

function classAutoLoader($class){
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if(is_file($the_path)){

    }

    if(file_exists($the_path) && !class_exists($class)){
        include($the_path);
    }else{
        die("This file named {$class}.php was not found");
    }
}

spl_autoload_register('classAutoLoader');

function redirect($location){
    header("Location:{$location}");
}

?>