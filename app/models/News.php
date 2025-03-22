<?php 
namespace app\models;
use app\core\Model;

class News extends Model{
    public static function all(){
        return self::query("SELECT n.id, n.title, m.path, n.created_at, n.updated_at 
                            FROM news n 
                            JOIN media m ON n.m_id = m.id 
                            WHERE n.status = 1 
                            ORDER BY n.weight" ,[], true);
    }

    public static function get($id){
        return self::query("SELECT n.id , n.title , n.content , n.created_at , n.updated_at , m.path 
                            FROM news n 
                            JOIN media m ON n.m_id = m.id 
                            WHERE n.id = ?",["id"=>$id]);
    }

    public static function count(){
        $result = self::query("SELECT COUNT(id) as news_count FROM news");
        return $result["news_count"];
    }
}