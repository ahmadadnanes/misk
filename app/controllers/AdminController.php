<?php 
namespace app\controllers;
use app\core\Controller;
use app\models\Admission;
use app\models\Media;
use app\models\News;

class AdminController extends Controller{
    public function index(){
        return $this->view("admin.index" , [
            "title" => "Admin Dashboard",
            "news_count" => News::count(),
            "admission_count" => Admission::count(),
            "media_count" => Media::count(),
        ]);
    }
}