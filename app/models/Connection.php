<?php

namespace app\models;

use app\models\User;

class Connection 
{
    public static function connect() {

        $config = require "../config.php";

        $pdo = new PDO("pgsql:host={$config['DB_HOST']};dbname={$config['DB_DATABASE']};", $config['DB_PORT'], $config['DB_USERNAME'], $config['DB_PASSWORD']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        return $pdo;
    }
}
