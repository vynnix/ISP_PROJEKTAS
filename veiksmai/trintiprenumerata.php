<?php
require_once('../include/mysql_connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM prenumeratos WHERE id = $id";

mysqli_query($dbc,$sql);

header("Location: ../prenumeratos.php");
?>