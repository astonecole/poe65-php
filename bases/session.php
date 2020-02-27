<?php

session_set_cookie_params(40, '/poe65/bases/', 'localhost');
session_start();

echo 'Session';

$_SESSION['name'] = 'toto';

echo session_id();
echo '<br>';

$_SESSION = [];
session_destroy();

var_dump(session_get_cookie_params());
