<?php

use app\controllers\AdminController;
use app\controllers\HomeController;
use app\Router;
use app\core\View;
use Dotenv\Dotenv;
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


$router = new Router();

$router->addRoute('GET', '/', [HomeController::class , 'index']);

$router->addRoute('GET','/admission', function() {
    View::render('admissions', ['title'=> 'Admission Page','header_class' => 'w-100']);
});

$router->addRoute('GET','/admin', [AdminController::class ,'index']);

$router->matchRoute();