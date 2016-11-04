<?php
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */

function dd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}

register_shutdown_function('shut_it_down');
function shut_it_down(...$args)
{
    $error = error_get_last();
    if( $error != null ) {
        $args[] = $error;
        dd($args);
    }
}