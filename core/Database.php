<?php

namespace core;

use \src\Config;

class Database
{
    private static $_pdo;
    public static function getInstance()
    {
        if (!isset(self::$_pdo)) {
            self::$_pdo = new \PDO($_ENV['DB_DRIVER'] . ":dbname=" . $_ENV['DB_DATABASE'] . ";host=" . $_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        }
        return self::$_pdo;
    }

    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public function __wakeup()
    {
    }
}
