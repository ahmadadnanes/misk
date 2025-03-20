<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\News;

class HomeController extends Controller{
    public function index(){
        $this->view("home" , [
            'title' => 'Home Page',
            'news' => News::all()
        ]);
    }
}