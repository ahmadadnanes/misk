<?php 
namespace app\models;
use app\core\Model;

class News extends Model{
    public $table = "news";

    public static function all(){
        return self::query("SELECT n.id , n.title , m.path , n.created_at , n.updated_at FROM news n , media m JOIN n.m_id = m.id WHERE n.status = 1 ORDER BY n.weight");
    }
}