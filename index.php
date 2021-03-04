<?php

$minPHP = '7.2';
if (phpversion() < $minPHP) {
  die("Your PHP version must be {$minPHP}. Current version: " . phpversion());
}
unset($minPHP);

ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/Config/Routes.php";

ob_end_flush();
