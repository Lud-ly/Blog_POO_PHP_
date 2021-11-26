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
     * @return void
     */
    public function getUrl()
    {
        return 'index.php?page=category&id=' . $this->id;
    }
}
