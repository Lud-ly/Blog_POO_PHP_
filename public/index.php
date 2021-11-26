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


// ob_start();
if ($myPage === 'home') {
    require '../views/home.php';
} elseif ($myPage === 'article') {
    require '../views/single.php';
}

// $content = ob_get_clean();
// require '../views/templates/default.php';
