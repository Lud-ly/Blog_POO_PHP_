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
        return self::query("SELECT *,posts.id,users.username from posts LEFT JOIN categories ON posts.category_id=categories.id LEFT JOIN users ON posts.user_id=users.id ORDER BY posts.created_at desc");
    }

    public static function lastByCategory($category_id)
    {
        return self::query("SELECT *,posts.id from posts LEFT JOIN categories ON posts.category_id=categories.id WHERE category_id = ? ORDER BY posts.created_at desc", [$category_id]);
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

    /**
     * getExtrait
     *
     * @return string
     */
    public function getExtrait()
    {
        $sHTML = '<p>' . substr($this->body, 0, 100) . "..." . '</p>';
        $sHTML .= '<p><a href="' . $this->getUrl() . '">Lire la suite</a></p>';
        return $sHTML;
    }
}
