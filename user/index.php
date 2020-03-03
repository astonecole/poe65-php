<?php

require 'init.php';

$repo = $container->get('user:repository');
$store = $repo->getStore();
$users = $store->findAll();

include 'views/home.phtml';
