<?php
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */
//define('ENV', 'prod');
define('ENV', 'dev');

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require '../core/autoloader.php';

//$config = array_merge(
//    require_once (ROOT_PATH . 'config/main.php'),
//    require_once (ROOT_PATH . 'app/config/main.php')
// );
$config = require_once ( ROOT_PATH . 'config/main.php' );

//dd($_SERVER);

$app = new \core\lib\Application($config);
$app->run();
