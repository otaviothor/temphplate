<?php

namespace Src\Controllers;

class WebController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function index(): void
  {
    echo $this->view->render("home", [
      "title" => "Home"
    ]);
  }

  public function create(): void
  {

  }

  public function store(array $data): void
  {

  }

  public function show(array $data): void
  {

  }

  public function edit(array $data): void
  {

  }

  public function update(array $data): void
  {

  }

  public function destroy(array $data): void
  {

  }

  public function error(array $data): void
  {

  }
}
