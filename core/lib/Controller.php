<?php
/**
 * Created by PhpStorm.
 * User: lenin
 * Date: 11/3/16
 * Time: 1:59 AM
 */

namespace core\lib;


class Controller
{
    public function render($file, $args)
    {
        $view = $file . '.php';
        $viewPath = ROOT_PATH . 'app' . DS . 'views' . DS . $view;

        if( file_exists($viewPath) ) {

            ob_start();
            ob_implicit_flush(false);
            extract($args, EXTR_OVERWRITE);
            require($viewPath);

            //echo ob_get_clean();
            return ob_get_clean();
        } else {
            echo 'allu';
        }
    }
}