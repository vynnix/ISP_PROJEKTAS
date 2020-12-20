<?php
session_start();

if ($_SESSION["role"] == "admin")
{
    echo "adminas";
} else if ($_SESSION["role"] == "vartotojas")
{
    echo "vartotojas";
}
else {
echo "svecias";
}
?>