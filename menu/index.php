<?php

function buildMenu(array $data)
{
    echo '<ul class="menu">';

    foreach ($data as $item) {
        if ($item['visible']) {
            echo '<li>';
            printf('<a href="%s">%s</a>', $item['link'], $item['name']);

            if (isset($item['menu'])) {
                buildMenu($item['menu']);
            }
            echo '</li>';
        }
    }

    echo '</ul>';
}

$menu = require 'menu.php';
buildMenu($menu);
