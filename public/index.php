<?php

require '../app/Autoloader.php';
require '../app/database.php';


App\Autoloader::register();



// Dynamic Class 
if ((isset($_GET["page"]))) {
    $myPage = $_GET["page"];
} else {

    $myPage = 'home';
}


ob_start();
if ($myPage === 'home') {
    require '../views/home.php';
} elseif ($myPage === 'article') {
    require '../views/single.php';
} elseif ($myPage === 'categorie') {
    require '../views/categorie.php';
} elseif ($myPage === 'auteur') {
    require '../views/author.php';
}

$content = ob_get_clean();
require '../views/templates/default.php';
