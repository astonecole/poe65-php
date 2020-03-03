<?php

ini_set('display_errors', 1);

require './vendor/autoload.php';
require './config/services.php';

$repo = $container->get('user:repository');
$store = $repo->getStore();

$user = new Aston\Model\User();
$store->save($user);

var_dump($store->findAll());
