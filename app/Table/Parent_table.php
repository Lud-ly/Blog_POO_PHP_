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
        if (static::$table === null) {

            $class_name = explode('\\', get_called_class());
            static::$table = strtolower(end($class_name)) . 's';
        } else {
            return static::$table;
        }
    }


    public static function find($id)
    {
        return App::getDb()->prepare("SELECT * FROM " . static::getTable() . " WHERE  id =? ", [$id], get_called_class(), true);
    }

    public static function query($statement, $attributes = null, $one = false)
    {
        if ($attributes) {
            return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDb()->query($statement, get_called_class(), $one);
        }
    }

    /**
     * get All 
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
