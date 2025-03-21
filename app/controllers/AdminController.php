<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\News;

class AdminController extends Controller{
    public function index(){
        return $this->view("admin.index" , [
            "title" => "Admin Dashboard",
            "news_count" => News::count(),
        ]);
    }
}