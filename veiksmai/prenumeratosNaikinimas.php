<?php
require_once('../include/mysql_connect.php');

session_start();

$id = $_GET['id'];
$profilio_id=$_SESSION['profilio_id'];

$sql = "DELETE FROM prenumeratu_uzsakymai WHERE profilio_id = $profilio_id AND prenumeratos_id=$id";

mysqli_query($dbc,$sql);

header("Location: ../profilioPrenumeratos.php");
?>