<?php 
namespace app\core;

class View {
    public static function render($view, $data = [])
    {
        // Define the path to the views directory (adjust the path if necessary)
        $viewsPath = dirname(__DIR__, 2) . '/views/';

        // Convert dot notation to slashes (e.g., "home.index" → "home/index.php")
        $viewFile = $viewsPath . str_replace('.', '/', $view) . '.php';

        if (file_exists($viewFile)) {
            extract($data);
            require $viewFile;
        } else {
            die("View <strong>$view</strong> not found in <strong>$viewsPath</strong>.");
        }
    }
}
