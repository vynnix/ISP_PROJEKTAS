<?php
require_once('../include/mysql_connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM skelbimas WHERE id = $id";

mysqli_query($dbc,$sql);

header("Location: ../skelbimas.php");
?>