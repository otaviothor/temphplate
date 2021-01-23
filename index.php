<?php

ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

/** @var Router */
$router = new Router(site());
$router->namespace("Src\Controllers");

/** Routes */
$router->group(null);
$router->get("/", "WebController:index", "web.index");
$router->get("/novo", "WebController:create", "web.create");
$router->post("/store", "WebController:store", "web.store");
$router->get("/{id}", "WebController:show", "web.show");
$router->get("/{id}/editar", "WebController:edit", "web.edit");
$router->put("/{id}/update", "WebController:update", "web.update");
$router->delete("/{id}", "WebController:destroy", "web.destroy");

/** Route errors */
$router->group("ops");
$router->get("/{errcode}", "WebController:error", "web.error");

/** Route proccess */
$router->dispatch();

/** Errors proccess */
if ($router->error()) {
  $router->redirect("web.error", [
    "errcode" => $router->error()
  ]);
}

ob_end_flush();
