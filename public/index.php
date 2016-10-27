<?php 

//define('ENV', 'prod');
define('ENV', 'dev');

require '../core/autoloader.php';

$config = Array::merge([
    
]);

$app = new Application($config);
$app->run();