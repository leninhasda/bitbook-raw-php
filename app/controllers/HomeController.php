<?php namespace app\controllers;

use \core\lib\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return 'hello';
    }

    public function about()
    {
        return $this->render('test', [
            'name' => 'lenin'
        ]);
    }
}