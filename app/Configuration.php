<?php

namespace App;

class Configuration
{

    private $settings = [];

    private static $_instance;

    /**
     * getInstance singleton  always one instance of configuration
     *
     *
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance =  new Configuration();
        }
        return self::$_instance;
    }

    /**
     * get
     *
     * @param  mixed $key
     * @return void
     */
    public function get($key)
    {
        if (!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }

    /**
     * __construct
     *
     * 
     */
    public function __construct()
    {
        $this->id = uniqid();
        $this->settings =  require dirname(__DIR__) . '/configuration/configuration.php';
    }
}
