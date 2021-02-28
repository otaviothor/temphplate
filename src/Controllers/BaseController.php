<?php

namespace Src\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * Class Controller
 * @package Src\Controllers
 */
abstract class BaseController
{
  /** @var Engine */
  protected $view;

  /** @var Router */
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
   * @param string $param
   * @param array $values
   * @return string
   */
  public function ajaxResponse(string $param, array $values): string
  {
    return json_encode([$param => $values]);
  }
}
