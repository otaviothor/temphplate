<?php

if (!file_exists(dirname(__DIR__, 2) . "/.env")) {
  die("Your project not exist .env file. Copy .env.example and rename it to .env");
}

/** Verification if project is under development to minify assets */
if($_SERVER["SERVER_NAME"] === "localhost") {
  require __DIR__."/Minify.php";
}

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

require __DIR__ . "/Routes.php";
