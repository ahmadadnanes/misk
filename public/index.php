<?php

use app\controllers\HomeController;
use app\Router;
use app\core\View;
require __DIR__ . '/../vendor/autoload.php';


$router = new Router();

$router->addRoute('GET', '/', [HomeController::class , 'index']);

$router->addRoute('GET','/admission', function() {
    View::render('admissions', ['title'=> 'Admission Page','header_class' => 'w-100']);
});

$router->matchRoute();