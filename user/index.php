<?php

require './vendor/autoload.php';

$container = new Aston\Service\Container();

$container->set('user:repository', function() {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=test;port=8889;charset=utf8',
        'root',
        'root'
    );

    $store = new Aston\Store\MySQLUserStore($pdo);
    $repository = new Aston\Repository\UserRepository();
    $repository->setStore($store);

    return $repository;
});

$repo = $container->get('user:repository');
var_dump($repo);
