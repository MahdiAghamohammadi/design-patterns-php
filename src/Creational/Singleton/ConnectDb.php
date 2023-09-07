<?php

namespace Src\Creational\Singleton;

class ConnectDb
{
    private static ?ConnectDb $instance = null;
    private \PDO $conn;

    private string $host = "localhost";

    private string $username = "root";

    private string $pass = "123";

    private string $dbname = "singleton";

    private function __construct()
    {
        $this->conn = new \PDO("mysql:host={$this->host}; dbname={$this->dbname}",
            $this->username, $this->pass,
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public static function getInstance(): ?ConnectDb
    {
        if (!self::$instance) {
            self::$instance = new ConnectDb();
        }
        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        return $this->conn;
    }
}