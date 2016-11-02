<?php
/**
 * @author: Lenin Hasda <leninhasda@gmail.com>
 */
use PHPUnit\Framework\TestCase;

// include the autoloader
require './core/autoloader.php';

/**
 * test suite for autoload
 * check to see if autoloader is working correctly
 */
class AutoloaderTest extends TestCase {

    /**
     * test default class
     */
    public function testStdClass()
    {
        $std = new \stdClass();

        $stdClassName = '\stdClass';
        $this->assertEquals(true, $std instanceof $stdClassName);
    }

    /**
     * test application class
     */
    public function testApplication()
    {
        $app = new core\lib\Application([]);

        $applicationClassName = '\core\lib\Application';
        $this->assertEquals(true, $app instanceof $applicationClassName);
    }
}
