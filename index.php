<?php
define('ROOT', __DIR__);


use App\controller\Router;

require_once __DIR__ . '/vendor/autoload.php';

Router::dispatch();