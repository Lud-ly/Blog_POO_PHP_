<?php

namespace APP;

use \PDO;

/**
 * Database
 */
class Database
{

    /**
     * db_name
     *
     * @var mixed
     */

    /**
     * db_name
     *
     * @var mixed
     */
    private $db_name;

    /**
     * db_user
     *
     * @var mixed
     */
    private $db_user;

    /**
     * db_pass
     *
     * @var mixed
     */
    private $db_pass;

    /**
     * db_host
     *
     * @var mixed
     */
    private $db_host;

    /**
     * pdo
     *
     * @var mixed
     */
    private $pdo;


    /**
     * __construct
     *
     * @param  mixed $db_name
     * @param  mixed $db_user
     * @param  mixed $db_pass
     * @param  mixed $db_host
     * @return void
     */
    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }


    /**
     * getPDO
     *
     * @return object
     */
    private function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }


    /**
     * query
     *
     * @param  mixed $statement
     * @param  mixed $class_name
     * @return void
     */
    public function query($statement, $class_name)
    {
        $req = $this->getPDO()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

        return $data;
    }

    /**
     * prepare
     *
     * @param  mixed $statement
     * @param  mixed $attributes
     * @param  mixed $class_name
     * @param  mixed $one
     * @return void
     */
    public function prepare($statement, $attributes, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statement, $attributes);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $data =  $req->fetch();
        } else {

            $data =  $req->fetchAll();
        }
        return $data;
    }
}
