<?php
require_once('../include/mysql_connect.php');

$id = $_GET['ivykio_id'];

$sql = "DELETE FROM ivykiai WHERE ivykio_id = $id";

mysqli_query($dbc,$sql);

header("Location: ../ivykiai.php");
?>