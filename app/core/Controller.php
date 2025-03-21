<?php 
namespace app\core;
use app\core\View;

abstract class Controller {
    protected function view($view, $data = []) {
        View::render($view, $data);
    }
}