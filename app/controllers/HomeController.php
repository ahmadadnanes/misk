<?php 
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    public function index(){
        $this->view("home" , [
            'title' => 'Home Page'
        ]);
    }
}