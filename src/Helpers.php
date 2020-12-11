<?php

/**
 * @param string|null $param
 * @return string
 */
function site(string $param = null): string
{
  if ($param && !empty(SITE[$param])) {
    return SITE[$param];
  }

  return SITE["root"];
}

/**
 * @param string $path
 * @param bool $time
 * @return string
 */
function asset(string $path, $time = true): string
{
  $file = SITE["root"] . "/views/assets/{$path}";
  $fileOnDir = dirname(__DIR__, 1) . "/views/assets/{$path}";
  if ($time && file_exists($fileOnDir)) {
    $file .= "?time=" . filemtime($fileOnDir);
  }
  return $file;
}
