<?php namespace core\lib;
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */

/**
 * Class Application
 * @package core\lib
 */
class Application {
    /**
     * application configuration
     * @var array
     */
    public $config;

    /**
     * holds the url manager instance
     * @var UrlManager|null
     */
    public $urlManager = null;

    /**
     * current controller action name
     * @var string
     */
    public $action;

    /**
     * current controller name
     * @var string
     */
    public $controller;

    /**
     * Application constructor.
     * @param $config
     */
    function __construct($config)
    {

        $this->config = $config;
        $routes = isset($this->config['routes']) ? $this->config['routes'] : [];

        if( ! $this->urlManager ) {
            $this->urlManager = new UrlManager($routes);
        }
    }

    /**
     * application initiator
     */
    public function run()
    {
        $handler = $this->urlManager->getHandler();
        $explode = explode('/', $handler);
        list($controller, $action) = $explode;
        $this->action = $action;
        $controller = ucfirst($controller) . 'Controller';
        $controllerClass = '\\app\\controllers\\'.$controller;
        $this->controller = new $controllerClass([]);
        if( method_exists($this->controller, $action) ) {
            echo call_user_func([$this->controller, $action], []); // TODO move to a appropriate location
        }
    }
}
