<?php

require 'init.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new Aston\Model\User();
    $user->setEmail($email)
        ->setPassword($password)
        ->setFirstname($firstname)
        ->setLastname($lastname);

    $store = $container->get('user:store');

    try {
        var_dump($user);
        $store->save($user);
        header('Location: index.php');
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
}

include 'views/form.user.phtml';
