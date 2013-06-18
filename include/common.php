<?php
/**
 * common.inc.php
 * 
 */

namespace clifflu\aws_tools;

// ========================
// Paths
// ========================
define('DS', DIRECTORY_SEPARATOR);

define('PATH_ROOT', dirname(realpath(__dir__)) . DS);
define('PATH_CONFIG', PATH_ROOT . 'config' . DS);
define('PATH_TMP', PATH_ROOT . 'tmp' . DS);

ini_set('display_errors', 1);
// ========================
// Includes
// ========================

/* autoloader */
require(PATH_ROOT . 'vendor/autoload.php');