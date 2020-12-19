<?php
DEFINE ('DB_HOST', 'freedb.tech');
DEFINE ('DB_NAME', 'freedbtech_Sportas');
DEFINE ('DB_USER', 'freedbtech_Sportas');
DEFINE ('DB_PASSWORD', 'sportas123');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Nepavyko prisijungti prie DB' .
mysqli_connect_error());
?>