<?php

spl_autoload_register($fullPath);
    
function myAutoLoader($classname) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $classname . $extension;

    include_once $fullPath;
}

?>