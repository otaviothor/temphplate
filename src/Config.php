<?php

define("SITE", [
  "name" => "Auth em MVC com PHP",
  "desc" => "Aprenda a construir uma aplicação de autenticação em MVC com PHP do Jeito Certo!",
  "domain" => "localauth.com",
  "locale" => "pt_BR",
  "root" => "http://localhost/codigo-aberto"
]);

if($_SERVER["SERVER_NAME"] === "localhost") {
  require __DIR__."/Minify.php";
}

/**
 *
 */
define('DATA_LAYER_CONFIG', [
  "driver" => "mysql",
  "host" => "localhost",
  "port" => "3306",
  "dbname" => "name",
  "username" => "root",
  "passwd" => "",
  "options" => [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);
