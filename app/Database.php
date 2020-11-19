<?php

namespace app;

class Database {
    private static $conn = null;

    public static function getConnection() {
        if (is_null(self::$conn)) {
            $dns = "mysql:host=localhost;dbname=stocker;charset=utf8";
            $username = "root";
            $password = "";
            self::$conn = new \PDO($dns, $username, $password);
        }

        return self::$conn;
    }
}
