<?php

namespace App\Table;

use App\App;


/**
 * Category
 */
class Categorie extends Parent_table
{
    protected static $table = 'categories';

    /**
     * getUrl
     *
     * @return URI with id
     */
    public function getUrl()
    {
        return 'index.php?page=categorie&id=' . $this->id;
    }
}
