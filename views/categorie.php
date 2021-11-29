<?php

$categories = \App\Table\Categorie::find($_GET['id']);
var_dump($categories);
