<?php


/**
 * App
 */
class App
{

    /**
     * database
     *
     * @var mixed
     */
    private static $database;

    /**
     * getDatabase
     *
     * @return void
     */
    public  static function getDatabase()
    {
        # code...
        return new App\Database('blog');
    }
}
