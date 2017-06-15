<?php

    function autoLoadFunction($class){
        if(preg_match('/Controller$/', $class)){
            require "controllers/$class.php";
        }else{
            require "models/$class.php";
        }
    }

    spl_autoload_register("autoLoadFunction");

?>