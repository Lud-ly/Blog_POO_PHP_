<?php

namespace App;

/**
 * Autoloader
 */
class Autoloader
{


    /**
     * register
     *classe courante __CLASS__ 
     * @return void
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * autoload
     *
     * @param  mixed $class_name
     * @return void
     */
    static  function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {

            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);

            require __DIR__ . '/' . $class . '.php';
        }
    }
}
