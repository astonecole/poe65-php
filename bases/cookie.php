<?php

setcookie('color', 'yellow');

if (isset($_COOKIE['color'])) {
    echo $_COOKIE['color'];
}
