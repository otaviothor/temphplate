<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

/** CSS minifier */
$minCSS = new CSS();
$minCSS->add(dirname(__DIR__, 2) . "/resources/assets/css/style.css");

/** Minified CSS file */
$minCSS->minify(dirname(__DIR__, 2) . "/resources/assets/style.min.css");

/** JS minifier */
$minJS = new JS();
$minJS->add(dirname(__DIR__, 2) . "/resources/assets/js/scripts.js");

/** Minified JS file */
$minJS->minify(dirname(__DIR__, 2) . "/resources/assets/scripts.min.js");
