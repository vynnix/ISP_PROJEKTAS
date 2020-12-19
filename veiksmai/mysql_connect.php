<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'kursai');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Nepavyko prisijungti prie DB' .
mysqli_connect_error());
?>