<?php

namespace Src\Creational\Singleton;

class ConnectDbWithoutSingleton
{
    private \PDO $conn;

    private string $host = "localhost";

    private string $username = "root";

    private string $pass = "123";

    private string $dbname = "singleton";

    public function __construct()
    {
        $this->conn = new \PDO("mysql:host={$this->host}; dbname={$this->dbname}",
            $this->username, $this->pass,
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public function getConnection(): \PDO
    {
        return $this->conn;
    }
}