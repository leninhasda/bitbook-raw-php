<?php
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */

require_once ( __DIR__ . DS . 'bootstrap.php' );

$config = [
    'routes' => require( __DIR__ . '/routes.php' ),
    'db' => require( __DIR__ . '/database.php' ),
];


return $config;