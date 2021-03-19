<?php

namespace Src\Models;

/**
 * Class User
 * @package Src\Models
 */
class User extends Model
{
  /**
   * @var string
   */
  protected $table = "users";

  /**
   * @var string[]
   */
  protected $requiredFields = ["first_name", "last_name", "email", "password"];

  /**
   * @var string
   */
  protected $primaryKey = "id";

  /**
   * @var bool
   */
  protected $timestamps = true;
}
