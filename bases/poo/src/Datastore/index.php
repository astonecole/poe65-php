<?php

// Respect l'interface !!!
ini_set('display_errors', 1);

require 'StoreHandler.php';
require 'MockStore.php';
require 'FileStore.php';
require 'DBStore.php';
require 'TextManager.php';

// $mock = new MockStore();
// $file = new FileStore('data.txt');

// DSN === Driver Source Name
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port=8889';
$pdo = new PDO($dsn, 'root', 'root');
$db = new DBStore($pdo);

$manager = new TextManager($db);
$manager->setContent('Miguel vouloir taper !!!');
$manager->save();

echo $manager->getContent();
