<?php

use Dotenv\Dotenv;

if (!file_exists(dirname(__DIR__, 2) . "/.env")) {
  die("Your project not exist .env file. Copy .env.example and rename it to .env");
}

$dotenv = Dotenv::createImmutable(__DIR__ . "/../..");
$dotenv->load();

/** Constant with info about project */
define("SITE", [
  "name" => $_ENV['APP_NAME'],
  "desc" => $_ENV['APP_DESCRIPTION'],
  "domain" => $_ENV['APP_DOMAIN'],
  "locale" => $_ENV['APP_LOCALE'],
  "root" => $_ENV['APP_ROOT']
]);

/** Verification if project is under development to minify assets */
if($_SERVER["SERVER_NAME"] === "localhost") {
  require __DIR__."/Minify.php";
}

/** Constant for database configuration */
define('DATA_LAYER_CONFIG', [
  "driver" => $_ENV['DB_DRIVER'],
  "host" => $_ENV['DB_HOST'],
  "port" => $_ENV['DB_PORT'],
  "dbname" => $_ENV['DB_DATABASE'],
  "username" => $_ENV['DB_USERNAME'],
  "passwd" => $_ENV['DB_PASSWORD'],
  "options" => [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);

/** Constant for email configuration */
define("MAIL", [
  "host" => $_ENV['MAIL_HOST'],
  "port" => $_ENV['MAIL_PORT'],
  "user" => $_ENV['MAIL_USERNAME'],
  "passwd" => $_ENV['MAIL_PASSWORD'],
  "from_name" => $_ENV['MAIL_FROM_NAME'],
  "from_email" => $_ENV['MAIL_FROM_ADDRESS']
]);
