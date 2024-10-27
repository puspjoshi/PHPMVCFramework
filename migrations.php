<?php

/**
 * User: Pusp raj joshi
 * Date: Aug 2024
 * 
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/vendor/autoload.php';

use eork\phpmvc\Application;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],                                                                                                                                                                      
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();