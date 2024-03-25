<?php 
define('DB_PATH', '../db/bdd_tp_web.db');

class Database {
    private static $instance;
    private $connection;

    private function __construct() {
        $this->connection = new SQLite3(DB_PATH);
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection->close();
    }
}


// $db = Database::getInstance();
// $connection = $db->getConnection();
// $db->closeConnection();

?>