<?php

session_start();

$prenumeratos_id = $_GET['id'];
$vartotojo_id= $_SESSION["id"];

	require_once('../include/mysql_connect.php');

$query = "INSERT INTO prenumeratu_uzsakymai (id, prenumeratos_id, profilio_id) VALUES (NULL, $prenumeratos_id, $vartotojo_id)";
$response = @mysqli_query($dbc, $query);
echo "$query ";
if($response){
	header("Location: ../prenumeratos.php");
}
?>