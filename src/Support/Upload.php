<?php

namespace Source\Support;

use Exception;
use stdClass;

/**
 * Class Upload
 * @package Source\Support
 */
abstract class Upload
{

  private $path;

  /** Upload constructor. */
  public function __construct(string $path)
  {
    $this->path = SITE["root"] . "/storage/{$path}/";
  }

  public function upload(string $name = null, string $tmpFile = null): bool
  {
    if ($name && $tmpFile && move_uploaded_file($tmpFile, $this->path . $name)) {
      return true;
    }

    return false;
  }

  public function remove(string $name = null): bool
  {
    if ($name && unlink($this->path . $name)) {
      return true;
    }

    return false;
  }
}
