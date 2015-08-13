<?php

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    $loaderFile = dirname(__DIR__) . '/vendor/autoload.php';
} elseif (file_exists('../../../autoload.php')) {
    $loaderFile = '../../../autoload.php';
} elseif (file_exists(dirname(dirname(dirname(__DIR__))) . '/autoload.php')) {
    $loaderFile = dirname(dirname(dirname(__DIR__))) . '/autoload.php';
} else {
    echo 'autoload.php file not found';
    exit(1);
}

require_once($loaderFile);
