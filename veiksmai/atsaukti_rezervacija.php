<?php

session_start();

$kurso_id = $_GET['id'];
$vartotojo_id = $_SESSION["id"];

require_once('./mysql_connect.php');

$query = "SELECT * FROM kursai WHERE id=$kurso_id";
 
	$response = @mysqli_query($dbc, $query);
 
	if($response){
	$row=mysqli_fetch_array($response);
	$vietu_sk=$row['vietu_sk']+1;
	
	
	$query2 = "SELECT * FROM rezervacijos WHERE kurso_id=$kurso_id AND vartotojo_id=$vartotojo_id";
	$response2 = @mysqli_query($dbc, $query2);
	
	if($response2){
		$query3 = "DELETE FROM rezervacijos WHERE kurso_id=$kurso_id AND vartotojo_id=$vartotojo_id";
		@mysqli_query($dbc, $query3);
		
		$query4 = "UPDATE kursai SET vietu_sk = $vietu_sk WHERE kursai.id = $kurso_id";
		@mysqli_query($dbc, $query4);
		header("Location: ../Registruotas_vartotojas.php");
	}
	}
?>