<?php
namespace app\core;
use app\core\Database;
use PDO;

abstract class Model {
    protected static $pdo;

    public static function init() {
        if (!isset(self::$pdo)) {
            self::$pdo = Database::getInstance();
        }
    }

    protected static function query($sql, $params = [] , $fetchAll = false) {
        self::init();
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        
        if ($fetchAll) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}
