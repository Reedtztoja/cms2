<?php
require("./../src/config.php");

use Steampixel\Route;

Route::add('/' , function() {
    echo "Dziala!";
});

Route::run('/cms/pub');
?>