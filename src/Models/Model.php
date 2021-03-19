<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

abstract class Model extends DataLayer
{
  protected $table;

  protected $requiredFields = [];

  protected $primaryKey = "id";

  protected $timestamps = true;

  public function __construct()
  {
    parent::__construct($this->table, $this->requiredFields, $this->primaryKey, $this->timestamps);
  }
}
