##Installation

Use Composer to create a new project from scratch:

```
 php composer.phar create-project --stability="dev" mikicaivosevic/zf2-restful-skeleton path/to/install
```

To install Zend Framework 2 into our application we simply type:

    php composer.phar self-update
    php composer.phar install
    
##Using the built-in PHP Server

```
php -S 0.0.0.0:8080 -t public/ public/index.php
```