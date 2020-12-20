<?php
require_once('../include/mysql_connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM paslaugos WHERE id = $id";

mysqli_query($dbc,$sql);

header("Location: ../paslaugos.php");
?>