##Installation

Use Composer to create a new project from scratch:

```
 composer create-project mikicaivosevic/zf2-restful-skeleton path/to/install
```

To install Zend Framework 2 into our application we simply type:

    composer self-update
    composer install
    
##Using the built-in PHP Server

```
php -S 0.0.0.0:8080 -t public/ public/index.php
```

##Testing
* Unit tests: ``$ vendor/bin/phpunit``
