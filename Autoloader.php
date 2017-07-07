<?php

/**
 * Created by PhpStorm.
 * User: potoc
 * Date: 07.07.2017
 * Time: 13:48
 */
class Autoloader
{
    public static function autoload($class)
    {
//        echo $class;

        $class = str_replace('\\', '/', $class);
//        var_dump($class);
        require_once $class . '.php';
    }


}
spl_autoload_register(['Autoloader', 'autoload']);