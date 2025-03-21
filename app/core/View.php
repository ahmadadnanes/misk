<?php 
namespace app\core;

abstract class View {
    public static function render($view, $data = [])
    {
        $viewsPath = dirname(__DIR__, 2) . '/views/';
        $viewFile = $viewsPath . str_replace('.', '/', $view) . '.php';

        if (file_exists($viewFile)) {
            extract($data);
            require $viewFile;
        } else {
            die("View <strong>$view</strong> not found in <strong>$viewsPath</strong>.");
        }
    }
}
