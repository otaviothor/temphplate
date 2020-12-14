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
   * Display a listing of the resource
   */
  public function index(): void
  {
    echo $this->view->render("site/home", [
      "title" => "Home"
    ]);
  }

  /**
   * Show the form for creating a new resource
   */
  public function create(): void
  {

  }

  /**
   * Store a newly created resource in storage
   * @param array $data
   */
  public function store(array $data): void
  {

  }


  /**
   * Display the specified resource
   * @param array $data
   */
  public function show(array $data): void
  {

  }


  /**
   * Show the form for editing the specified resource
   * @param array $data
   */
  public function edit(array $data): void
  {

  }


  /**
   * Update the specified resource in storage
   * @param array $data
   */
  public function update(array $data): void
  {

  }

  /**
   * Remove the specified resource from storage
   * @param array $data
   */
  public function destroy(array $data): void
  {

  }
}
