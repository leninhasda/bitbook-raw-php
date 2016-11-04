<?php
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */

defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('ROOT_PATH') or define('ROOT_PATH', dirname(__FILE__) . DS . '..' . DS);

/**
 * autoloader method
 *
 * this will autoload any class file used with namespace
 */
function autoLoader($class) {
    $fileName = ROOT_PATH . str_replace("\\", DS, $class) . '.php';
    if (file_exists($fileName)){
        require_once $fileName;
        return true;
    }
    return false;
}
spl_autoload_register('autoLoader');
