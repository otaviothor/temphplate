<?php

namespace Source\Support;

use Exception;
use stdClass;

/**
 * Class Session
 * @package Source\Support
 */
abstract class Session
{
  public function get(string $index): string
  {

  }

  public function put($something, string $value = null): void
  {

  }

  public function all(): array
  {

  }

  public function destroy(string $index)
  {

  }

  public function exists(string $index): bool
  {

  }
}
