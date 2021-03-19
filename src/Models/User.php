<?php

namespace Src\Models;

class User extends Model
{
  protected $table = "users";

  protected $requiredFields = ["first_name", "last_name", "email", "password"];

  protected $primaryKey = "id";

  protected $timestamps = true;
}
