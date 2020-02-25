<?php

$published = $_POST['published'] ?? '0';

var_dump($published);

echo '<pre>';
print_r($_POST);
echo '</pre>';

include 'layout.phtml';
