<?php namespace core\lib;
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */

/**
 * Main Application class which initiates and handles the full application
 */
class Application {
    /**
     * application configuration
     * @var array
     */
    protected $config;

    function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * application initiator
     */
    public function run()
    {
        echo 'application initiated';
    }
}
