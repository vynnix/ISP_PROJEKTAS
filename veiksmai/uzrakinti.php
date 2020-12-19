<?php

$kurso_id = $_GET['id'];

require_once('./mysql_connect.php');

$query = "UPDATE kursai
SET atrakinta=1
WHERE id=$kurso_id";
 $response = @mysqli_query($dbc, $query);
 
	if($response){
		header("Location: ../Administratorius.php");
	}
?>