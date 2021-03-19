<?php

namespace Src\Controllers;

/**
 * Class WebController
 * @package Src\Controllers
 */
class WebController extends Controller
{
  /**
   * WebController constructor.
   * @param $router
   */
  public function __construct($router)
  {
    parent::__construct($router);
  }

  /**
   *
   */
  public function index(): void
  {
    echo $this->view->render("home", [
      "title" => "Home"
    ]);
  }

  /**
   *
   */
  public function create(): void
  {

  }

  /**
   * @param array $data
   */
  public function store(array $data): void
  {

  }

  /**
   * @param array $data
   */
  public function show(array $data): void
  {

  }

  /**
   * @param array $data
   */
  public function edit(array $data): void
  {

  }

  /**
   * @param array $data
   */
  public function update(array $data): void
  {

  }

  /**
   * @param array $data
   */
  public function destroy(array $data): void
  {

  }

  /**
   * @param array $data
   */
  public function error(array $data): void
  {

  }
}
