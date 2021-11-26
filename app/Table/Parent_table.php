<?php

namespace App\Table;

use App\App;

/**
 * Parent_table
 */
class Parent_table
{
    protected static $table;

    private static function getTable()
    {
        //die(static::$table);
        if (static::$table === null) {

            $class_name = explode('\\', get_called_class());
            static::$table = strtolower(end($class_name)) . 's';
        } else {
            return static::$table;
        }
    }

    /**
     * get All categories
     * 
     */
    public static function getAll()
    {
        return App::getDb()->query("SELECT * FROM " . static::getTable() . "", get_called_class());
    }


    /**
     * __get
     *
     * @param  mixed $key
     * @return void
     */
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
}
