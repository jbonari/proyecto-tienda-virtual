<?php

function controller_autoload($className){
    include 'controllers/'.$className.'.php';
}

spl_autoload_register('controller_autoload');