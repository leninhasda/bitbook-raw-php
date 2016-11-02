<?php
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */
//define('ENV', 'prod');
define('ENV', 'dev');

require './core/autoloader.php';

// $config = Array::merge([
//
// ]);
$config = [];

$app = new \core\lib\Application($config);
$app->run();
