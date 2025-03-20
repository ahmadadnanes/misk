<?php
namespace app\core;
use app\core\Database;
class Model {
    protected $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance();
    }

    protected function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
