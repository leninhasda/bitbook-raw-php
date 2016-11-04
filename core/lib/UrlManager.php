<?php namespace core\lib;
    /**
     * @author: Lenin Hasda <leninhasda@gmail.com>
     */

/**
 * Class UrlManager
 * @package core\lib
 */
class UrlManager
{
    public $baseURL;
    public $protocol;
    public $hostName;
    public $scriptName;
    public $urlPath;
    public $routes = [];
    public $segment;

    function __construct($routes)
    {
        $this->routes = $routes;

        $this->setServerVars();
        $this->setBaseURL();
    }

    private function setServerVars()
    {
        list($protocol) = explode('/', $_SERVER['SERVER_PROTOCOL']);
        $this->protocol = strtolower($protocol);
        $this->hostName = $_SERVER['HTTP_HOST'];
        $this->urlPath = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
        $this->segment = str_replace($this->urlPath, '', $_SERVER['REDIRECT_URL']);
    }

    private function setBaseURL()
    {
        $this->baseURL = $this->protocol . '://' . $this->hostName . $this->urlPath;
    }

    public function getHandler()
    {
        $ex = explode('/', $this->segment);
        $tmp = $ex;
        for ( $i = 0; $i < count($ex); $i++ ) {
            $key = implode('/', $tmp);
            echo $key . '<br>';
            $array_keys = array_keys($this->routes);
            if (isset($this->routes[$key])) {
                return $this->routes[$key];
            }
            array_pop($tmp);
        }
        dd($ex);
        if (isset($this->routes[$this->segment])) {
            return $this->routes[$this->segment];
        }
        throw new \Exception('Undefined URL.'); // TODO need to handle error case
    }
}