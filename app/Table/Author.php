<?php

namespace App\Table;

use App\App;



class Author extends Parent_table
{
    protected static $table = 'users';

    /**
     * getUrl
     *
     * @return URI with id
     */
    public function getUrl()
    {
        return 'index.php?page=auteur&id=' . $this->id;
    }
}
