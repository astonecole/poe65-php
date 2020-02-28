<?php

// Respect l'interface !!!

require 'StoreHandler.php';
require 'MockStore.php';
require 'FileStore.php';
require 'DBStore.php';

$mock = new MockStore();
$mock->write('Hello, World');
echo $mock->read();

echo '<br>';

$file = new FileStore('data.txt');
$file->write('Il est une fois ma vie...');
echo $file->read();

echo '<br>';

// DSN === Driver Source Name
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port=8889';
$pdo = new PDO($dsn, 'root', 'root');

$db = new DBStore($pdo);
$db->write('Ici ma vie en base de données...');
