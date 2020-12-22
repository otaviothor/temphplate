<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

/** CSS minifier */
$minCSS = new CSS();
$minCSS->add(dirname(__DIR__, 1) . "/views/assets/css/style.css");
$minCSS->minify(dirname(__DIR__, 1) . "/views/assets/style.min.css");

/** JS minifier */
$minJS = new JS();
$minJS->add(dirname(__DIR__, 1) . "/views/assets/js/scripts.js");
$minJS->minify(dirname(__DIR__, 1) . "/views/assets/scripts.min.js");
