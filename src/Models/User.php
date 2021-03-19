<?php

namespace Src\Models;

/**
 * Class User
 * @package Src\Models
 */
class User extends Model
{
  /**
	 * Name of database table
	 * @var string
	 */
  protected $table = "users";

  /**
	 * Name of required fields of table table
	 * @var string[]
	 */
  protected $requiredFields = ["first_name", "last_name", "email", "password"];

  /**
	 * The table's primary key
	 * @var string
	 */
  protected $primaryKey = "id";

  /**
	 * If table have timestamp fields(created_at and updated_at)
	 * @var bool
	 */
  protected $timestamps = true;
}
