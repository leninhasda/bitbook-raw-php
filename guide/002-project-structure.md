#### project structure

```
|-- root
    |-- guide ( stores all the manuals of the project )
    |-- core ( core library files )
        |-- lib
            |-- Application.php
            |-- Database.php
            |-- MySQLDriver.php
        |-- helpers
            |-- HTML.php
        |-- autoloader.php
    |-- modules ( modules )
        |-- module-A
        |-- module-B
    |-- config ( application configurations )
        |-- config.php
        |-- database.php
        |-- routes.php
    |-- db-schema ( database schema files )
    |-- app ( user space )
        |-- models
            |-- User.php
        |-- controllers
        |-- views
            |-- layout
            |-- pages
                |-- index.php
                |-- single.php
                |-- page.php
    |-- themes ( options themes will fall back to views )
        |-- theme-A
        |-- theme-B
            |-- layout
            |-- pages
                |-- index.php
                |-- single.php
    |-- index.php ( index page )
```
