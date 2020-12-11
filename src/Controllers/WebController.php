<?php

namespace Src\Controllers;

class WebController extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    echo $this->view->render("home");
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(array $data)
  {

  }

  /**
   * Display the specified resource.
   */
  public function show(array $data)
  {

  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(array $data)
  {

  }

  /**
   * Update the specified resource in storage.
   */
  public function update(array $data)
  {

  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(array $data)
  {

  }
}
