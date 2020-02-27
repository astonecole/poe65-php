<?php

require './Animal.php';
require './Felin.php';
require './Lion.php';
require './Chat.php';
require './Parc.php';

$lion = new Lion('Simba', 5);
$chat = new Chat('Isidor', 1);

$parc = new Parc();
$parc->add($lion);
$parc->add($chat);

$parc->show();