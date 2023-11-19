<?php

// app/Services/DatabaseService.php

namespace App\Services;

use \mysqli;

class DatabaseService
{
    public static function connect()
    {
        $host = env('DB_HOST', '127.0.0.1');
        $username = env('DB_USERNAME', 'root');
        $password = env('DB_PASSWORD', '');
        $database = env('DB_DATABASE', 'your_database_name');
        $port = env('DB_PORT', '3306');

        $connection = new mysqli($host, $username, $password, $database, $port);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        return $connection;
    }
}
