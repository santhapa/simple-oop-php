<?php
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

define('APPPATH', __DIR__.'/src/');

$application = new App\Core\Application();
$application->run();