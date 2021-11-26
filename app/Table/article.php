<?php

namespace App\Table;

use App\App;

/**
 * Article
 */
class Article extends Parent_table
{

    /**
     * getLast
     *
     * @return request
     */
    public static function getLast()
    {
        return App::getDb()->query('SELECT * from posts LEFT JOIN categories ON category_id=categories.id', __CLASS__);
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
