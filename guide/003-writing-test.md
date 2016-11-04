# Guideline for Testing

## Installing PHPUnit Test Framework

### For Linux or OSX
```bash
# download the phpunit suit
wget https://phar.phpunit.de/phpunit.phar

# confirm
php phpunit.phar --version
# will output following
# PHPUnit 5.6.0 by Sebastian Bergmann and contributors
```

### For Windows users
1. Go to [https://phpunit.de/](https://phpunit.de/) and download latest stable release.
2. If the downloaded file is named something else, rename it to `phpunit.phar`.
3. Run the `confirm` part in terminal / cmd from Linux installation guide to check.

> *Windows Users:* If you do not have `php` in the `PATH` variable you may get some kind of error. So help yourself, do some googling, and add the `php` in your `PATH` environment variable. Then restart the command line tool your are using.

## Writing Test
1. All the test case should be inside `tests` directory.
2. Follow the file naming convention stated in [style guide](001-style-guide.md)
3. File name and class name should be exactly same.
4. Each file should contain test case for only one `component`. By `component` we mean a single `class`.
5. All the methods name should start with `test` (ex: `testModelCount`)
6. Here is example test class:

```php
<?php
use PHPUnit\Framework\TestCase;

/**
 * Testing Model class
 * let's assume that our Model class has a add method which adds two numbers and returns the result
 */
class ModelTest extends TestCase {
    /**
     * test add function
     */
    public function testAdd()
    {
        // creating a instance
        $calc = new Model();

        // test the data
        // first param is expected result,
        // second param is the testing result
        $this->assertEquals(3, $calc->add(1,2));
    }
}
```

```bash
# run the test case from root of the project directory
php phpunit.phar tests/ModelTest
```

------

> More documentation on PHPUnit Test Framework can be found here: [https://phpunit.de/documentation.html](https://phpunit.de/documentation.html)
