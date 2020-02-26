<?php

function buildMenu(array $data) {
    echo '<ul>';

    foreach ($data as $item) {
        foreach ($item as $link) {
            echo '<li>';
                echo '<a href="">item</a>';
            echo '</li>';
        }
    }

    echo '</ul>';
}

$menu = require 'menu.php';
buildMenu($menu);
