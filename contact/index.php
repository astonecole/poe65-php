<?php

require 'lib/csv.php';
require 'lib/validators.php';

define('CONTACTS_PATH', 'contacts.csv');

$contacts = loadContacts(CONTACTS_PATH);

$prenom = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$errors = [];

$action = $_GET['action'] ?? null;
$id = $_GET['id'] ?? null;

if ($action && $id >= 0) {
    if ($action === 'remove') {
        unset($contacts[$id]);

        if (saveFile(CONTACTS_PATH, $contacts)) {
            header('Location: index.php');
        } else {
            $errors[] = 'Impossible de sauvegarder le contact';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isEmpty($prenom)) {
        $errors[] = 'Le prenom est requis';
    }

    if (isEmpty($lastname)) {
        $errors[] = 'Le nom est requis';
    }

    if (empty($errors)) {
        $prenom = strip_tags($prenom);
        $lastname = strip_tags($lastname);

        $contacts[] = [
            'firstname' => $prenom,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone
        ];

        if (saveFile(CONTACTS_PATH, $contacts)) {
            header('Location: index.php');
        }
    }
}

include 'views/page.phtml';
