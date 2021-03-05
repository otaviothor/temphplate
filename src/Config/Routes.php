<?php

use CoffeeCode\Router\Router;

/** @var Router */
$router = new Router(site());
$router->namespace("Src\Controllers");

/** Routes */
$router->group(null);
$router->get("/", "Web:index", "web.index");
$router->get("/new", "Web:create", "web.create");
$router->post("/store", "Web:store", "web.store");
$router->get("/{id}", "Web:show", "web.show");
$router->get("/{id}/edit", "Web:edit", "web.edit");
$router->put("/{id}/update", "Web:update", "web.update");
$router->delete("/{id}", "Web:destroy", "web.destroy");

/** Route errors */
$router->group("ops");
$router->get("/{errcode}", "Web:error", "web.error");

/** Route proccess */
$router->dispatch();

/** Errors proccess */
if ($router->error()) {
  $router->redirect("web.error", [
    "errcode" => $router->error()
  ]);
}
