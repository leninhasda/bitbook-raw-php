## Naming Conventions
  * File Names: `FileName.php` except the view & config files
  * Class Names: `NewsFeed`
  * Functions and Methods: `filterInput(), getUsers()`
  * Variables: `$exampleVariable`
  * Constants: `CONSTANT_VALUE`

## Coding Style
------
#### PHP Tag
```php
<?php

// no need for closing tag
```

#### PHP Short Tag
```html
<?= $variableName; ?>

<?php if( $condition ): ?>
  show this textarea
<?php endif; ?>
```

#### Authoring
> This is not mendatory but if you want you can put this in the file that you have created at the very beginning.

```php
<?php
/**
 * @author Lenin Hasda <leninhasda@gmail.com>
 */
```
#### Namespacing
> `namespace` is very important and should be the first line of every class file

```php
<?php
namespace path\to\this\file;

use app\models\User; // usecase in other files

```

#### Documentation
```php
<?php
/**
 * This is a class documentation, describe the purpose of the class and what it does.
 * Use any number of line if you have to.
 */
 class MotorCar {

   /**
    * name of the motor car
    *
    * @var string
    */
    protected $name;

    /**
     * This is a function documentation, the function does one thing only and does it correctly.
     *
     * @param int|string|object $name
     * @return void if you don't know what data is returned add the type as mixed
     */
     public function setName( $name )
     {
       $this->name = $name;
     }
 }
```

#### Strings
```php
$exampleVariable = 'Example String';
```

#### String Concatenation
```php
$exampleVariable = 'Bit' . ' ' . 'Book';
```

#### Variable Substitution
```php
$greeting = "Hello $name, welcome back!";

$greeting = "Hello {$name}, welcome back!";
```
#### Comments
```php
<?php
// quick one line comment


/**
 * This is more like a description
 * and can have multiple line.
 */

 // TODO reminder comment, means there is something to do here
```
