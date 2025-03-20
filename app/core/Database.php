<?php
namespace app\core;
use PDO , PDOException;

class Database {

    private static $instance = null;
    private $pdo;

    private function __construct() {
        $host = $_ENV["DATABASE_HOST"];
        $db = $_ENV["DATABASE_NAME"];
        $user = $_ENV["DATABASE_USER"];
        $pass = $_ENV["DATABASE_PASSWORD"];

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance->pdo;
    }
}
?>
