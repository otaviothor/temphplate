<?php

namespace Src\Support;

use Exception;
use stdClass;

abstract class Session
{
  public function __construct()
  {
    if (!session_id()) {
      session_start();
    }
  }

  public function get(string $index): ?string
  {
    if (!empty($_SESSION[$index])) {
      return $_SESSION[$index];
    }
    return null;
  }

  public function put($indexOrArray, $value = null): void
  {
    if (is_array($indexOrArray)) {
      foreach ($indexOrArray as $index => $value) {
        $_SESSION[$index] = $value;
      }
      return;
    }
    $_SESSION[$indexOrArray] = $value;
    return;
  }

  public function all(): ?array
  {
    return $_SESSION;
  }

  public function destroy($indexOrArray): void
   {
    if (is_array($indexOrArray)) {
      foreach ($indexOrArray as $index) {
        unset($_SESSION[$index]);
      }
      return;
    }
    unset($_SESSION[$indexOrArray]);
    return;
  }

  public function exists(string $index): bool
  {
    return isset($_SESSION[$index]);
  }
}
