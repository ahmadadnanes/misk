<?php 
namespace app\models;
use app\core\Model;

class Media extends Model{
    public static function count(){
        $result = self::query("SELECT COUNT(id) as media_count FROM media");
        return $result["media_count"]; 
    }
}