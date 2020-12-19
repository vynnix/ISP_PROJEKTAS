<?php

$kurso_id = $_GET['kurso_id'];
$lektoriaus_id = $_GET['lektoriaus_id'];

require_once('./mysql_connect.php');

$query = "UPDATE kursai
SET lektorius=$lektoriaus_id
WHERE id=$kurso_id";
 $response = @mysqli_query($dbc, $query);
 
	if($response){
		header("Location: ../Administratorius.php");
	}
?>