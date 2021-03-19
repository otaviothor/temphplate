<?php

namespace Src\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class Model
 * @package Src\Models
 */
abstract class Model extends DataLayer
{
  /**
   * @var
   */
  protected $table;

  /**
   * @var array
   */
  protected $requiredFields = [];

  /**
   * @var string
   */
  protected $primaryKey = "id";

  /**
   * @var bool
   */
  protected $timestamps = true;

  /**
   * Model constructor.
   */
  public function __construct()
  {
    parent::__construct($this->table, $this->requiredFields, $this->primaryKey, $this->timestamps);
  }
}
