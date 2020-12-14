<?php

/**
 * Constant about project
 */
define("SITE", [
  "name" => "Template de estrutura MVC para projeto em PHP",
  "desc" => "Um template estruturado em MVC parap projetos em profissionais em PHP",
  "domain" => "template-mvc.com",
  "locale" => "pt_BR",
  "root" => "http://localhost/template-mvc"
]);

if($_SERVER["SERVER_NAME"] === "localhost") {
  require __DIR__."/Minify.php";
}

/**
 * Constant for database configuration
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

/**
 * Constant for email configuration
 */
define("MAIL", [
  "host" => "smtp.gmail.com",
  "port" => "587",
  "user" => "",
  "passwd" => "",
  "from_name" => "",
  "from_email" => ""
]);

