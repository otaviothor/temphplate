<?php

namespace Src\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Src\Support\HttpStatusCode;

/**
 * Class Controller
 * @package Src\Controllers
 */
abstract class Controller
{
  /**
   * @var Engine
   */
  protected $view;

  /**
   * @var
   */
  protected $router;

  /**
   * Controller constructor.
   * @param $router
   */
  public function __construct($router)
  {
    $this->router = $router;
    $this->view = Engine::create(dirname(__DIR__, 2) . "/resources/views", 'php');
    $this->view->addData(["router" => $this->router]);
  }

  /**
   * @param boolean $status
   * @param integer $code
   * @param string $message
   * @param array $data
   * @return string
   */
  public function response(bool $status = true, int $code = 200, string $message = null, array $data = []): string
  {
    HttpStatusCode::setStatusCode($code);

    $callback["status"] = $status;

    if ($message) {
      $callback["message"] = $message;
    }

    if (sizeof($data) > 0) {
      $callback["data"] = $data;
    }

    return json_encode($callback);
  }
}
