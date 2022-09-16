<?php
    $loader = require __DIR__ . '/vendor/autoload.php';
    $loader->addPsr4('Test\\Foo\\', __DIR__);
    $foo = new Test\Foo();
    $lol = new Test\Test();

    echo $lol->var;
    $log = new Monolog\Logger('name');