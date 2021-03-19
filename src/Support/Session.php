<?php

namespace Src\Support;

use Exception;
use stdClass;

/**
 * Class Session
 * @package Src\Support
 */
abstract class Session
{
  /**
   * Session constructor.
   */
  public function __construct()
  {
    if (!session_id()) {
      session_start();
    }
  }

  /**
   * @param string $index
   * @return string|null
   */
  public function get(string $index): ?string
  {
    if (!empty($_SESSION[$index])) {
      return $_SESSION[$index];
    }
    return null;
  }

  /**
   * @param $indexOrArray
   * @param null $value
   */
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

  /**
   * @return array|null
   */
  public function all(): ?array
  {
    return $_SESSION;
  }

  /**
   * @param $indexOrArray
   */
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

  /**
   * @param string $index
   * @return bool
   */
  public function exists(string $index): bool
  {
    return isset($_SESSION[$index]);
  }
}
