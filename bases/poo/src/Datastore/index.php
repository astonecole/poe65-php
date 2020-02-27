<?php

$text = 'ici text à sauvegarder';

interface StoreHandler {
    public function write(string $text);
    public function read(): string;
}

class Datastore {
    public function write($text) {
        file_put_contents('data.txt', $text);
     
        $sql = "INSERT INTO store (text) VALUES ($text)";
        $pdo = new PDO('toto', '1234', '');
        $pdo->exec($sql);
    }

    public function read() {
        file_get_contents('data.txt');
        $sql = 'SELECT * FROM store';
    }
}

class File extends Datastore {}
class DB extends Datastore {}

function reader(StoreHandler $store) {
    $store->read();
}
