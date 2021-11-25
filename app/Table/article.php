<?php

namespace App\Table;

/**
 * Article
 */
class Article
{

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
    /**
     * getUrl
     *
     * @return void
     */
    public function getUrl()
    {
        return 'index.php?page=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $sHTML = '<p>' . substr($this->body, 0, 100) . "..." . '</p>';
        $sHTML .= '<p><a href="' . $this->getUrl() . '">Lire la suite</a></p>';
        return $sHTML;
    }
}
