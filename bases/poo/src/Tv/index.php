<?php

require 'Tv.php';
require 'Telecommand.php';

$tv = new Tv();
$remote = new Telecommand($tv);

$remote->volumeUp();
$remote->volumeUp();

echo $tv->getVolume();

?>

<h1>Tv Star</h1>
<p>The best Tv of the World you've never seen !!!</p>
