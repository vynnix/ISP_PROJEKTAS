<?php


$vartotojo_id = $_GET['id'];

require_once('./mysql_connect.php');

$query = "SELECT kurso_id FROM rezervacijos WHERE id=$vartotojo_id";
 
	$response = @mysqli_query($dbc, $query);
 
	if($response){
		echo '<table>';
		
	 while ($row=mysqli_fetch_array($response)){
	
	$query2 = "SELECT * FROM kursai WHERE id=".$row['kurso_id'];
	$response2 = @mysqli_query($dbc, $query2);
	
	if($response2){
		$row2=mysqli_fetch_array($response);
		echo '<tr><td>'.$row2['pavadinimas'].'</td><td>'.$row2['lygis'].'</td></tr>';
		header("Location: ../Administratorius.php");
	}
	}
	 echo '<table>';
	}
?>