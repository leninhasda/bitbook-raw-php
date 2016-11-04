<?php
/**
 * Created by PhpStorm.
 * User: lenin
 * Date: 11/3/16
 * Time: 2:28 AM
 */

namespace app\controllers;


use core\lib\Controller;

class PostController extends Controller
{
    public function category($type)
    {
        echo $type;
        return $this->render('test', [
            'name' => 'category'
        ]);
    }
}