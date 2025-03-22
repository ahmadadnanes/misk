<?php 
namespace app\models;
use app\core\Model;

class Admission extends Model{
    public static function count(){
        $result = self::query('SELECT count(id) as admission_count FROM admissions');
        return $result["admission_count"];
    }
}