<?php

session_start();

$paslaugos_id = $_GET['id'];
$vartotojo_id= $_SESSION["id"];

	require_once('../include/mysql_connect.php');

$query = "INSERT INTO paslaugu_uzsakymai (id, profilio_id, paslaugos_id) VALUES (NULL, $vartotojo_id, $paslaugos_id)";
$response = @mysqli_query($dbc, $query);
echo "$query ";
if($response){
	header("Location: ../paslaugos.php");
}
?>