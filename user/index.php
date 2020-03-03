<?php

ini_set('display_errors', 1);

require './vendor/autoload.php';

$pdo = new PDO(
    'mysql:host=localhost;dbname=test;port=8889;charset=utf8',
    'root',
    'root'
);

$s = new \Aston\Store\MySQLUserStore($pdo);
$u = new Aston\Model\User();

$u->setEmail('john.doe@gmail.com')
  ->setPassword('0000')
  ->setFirstname('john')
  ->setLastname('doe');

try {
  $s->save($u);
} catch (Exception $e) {
    echo $e->getMessage();
}

$u->setId(2);
$s->remove($u);

// echo '<pre>';
// var_dump($s->findByEmail('john.doe@gmail.com'));
// var_dump($s->find(2));
// echo '</pre>';
