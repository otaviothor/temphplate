<?php

namespace Src\Support;

use Exception;
use stdClass;

/**
 * Class Upload
 * @package Source\Support
 */
abstract class Upload
{

  /**
   * @var string
   */
  private $path;

  /**
   * Upload constructor.
   * @param string $path
   */
  public function __construct(string $path)
  {
    $this->path = SITE["root"] . "/storage/{$path}/";
  }

  /**
   * @param string|null $name
   * @param string|null $tmpFile
   * @return bool
   */
  public function upload(string $name = null, string $tmpFile = null): bool
  {
    if ($name && $tmpFile && move_uploaded_file($tmpFile, $this->path . $name)) {
      return true;
    }

    return false;
  }

  /**
   * @param string|null $name
   * @return bool
   */
  public function remove(string $name = null): bool
  {
    if ($name && unlink($this->path . $name)) {
      return true;
    }

    return false;
  }
}
