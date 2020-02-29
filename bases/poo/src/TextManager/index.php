<?php

require 'StoreInterface.php';
require 'MockStore.php';
require 'FileStore.php';
require 'DBStore.php';
require 'TextManager.php';

$mock = new MockStore();
$file = new FileStore('data.txt');

$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port=8889';
$pdo = new PDO($dsn, 'root', 'root');
$db = new DBStore($pdo);

$manager = new TextManager($db);
$manager->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
$manager->save();

echo $manager->getContent();
