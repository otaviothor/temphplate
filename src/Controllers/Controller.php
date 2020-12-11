<?php

namespace Src\Controllers;

use League\Plates\Engine;

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
    $this->view = Engine::create(dirname(__DIR__, 2) . "/views", 'php');
    $this->view->addData(["router" => $this->router]);
  }
}
