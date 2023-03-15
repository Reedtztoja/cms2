<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once('./../vendor/autoload.php');


$db = new mysqli('localhost', 'root','','cms' );


require('./../src/Post.class.php');

//require_once("./../vendor/twig/twig/src/Loader/FilesystemLoader.php");
$loader = new Twig\Loader\FilesystemLoader('./../src/templates');
$twig = new Twig\Environment($loader);
?>