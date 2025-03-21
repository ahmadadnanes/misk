<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\News;

class NewsController extends Controller{
    public function index($id){
        $this->view("news" , [
            "title" => "News Page",
            "header_class" => "w-100",
            "selected_news" => News::all(),
            "news" => News::get($id)
        ]);
    }
}