<?php

require './Animal.php';
require './Lion.php';
require './Chat.php';

$lion = new Lion('Simba', 5);
echo $lion->getName(), ' ', $lion->getAge();
echo $lion->move(), '<br>';

$chat = new Chat('Isidor', 1);
echo $chat->getName(), ' ', $chat->getAge();
echo $chat->move(), '<br>';
