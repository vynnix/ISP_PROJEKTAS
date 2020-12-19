<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(emty($_POST['pavadinimas'])){
		$data_missing[] = 'pavadinimas';
	} else {
		$f_pavadinimas= trim($POST['pavadinimas']);
	}
	if(emty($_POST['lygis'])){
		$data_missing[] = 'lygis';
	} else {
		$f_lygis= trim($POST['lygis']);
	}
	if(emty($_POST['aprasas'])){
		$data_missing[] = 'aprasas';
	} else {
		$f_aprasas= trim($POST['aprasas']);
	}
	if(emty($_POST['laikas'])){
		$data_missing[] = 'laikas';
	} else {
		$f_laikas= trim($POST['laikas']);
	}
	if(emty($_POST['kaina'])){
		$data_missing[] = 'kaina';
	} else {
		$f_kaina= trim($POST['kaina']);
	}
	if(emty($_POST['vietu_sk'])){
		$data_missing[] = 'vietu_sk';
	} else {
		$f_vietu_sk= trim($POST['vietu_sk']);
	}
	
	if(emty($data_missing)){
		require_once('../mysql_connect.php');
		
		$query = "INSERT INTO kursai (id, pavadinimas, lygis, aprasas, laikas, kaina, vietu_sk) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "ssssii", $f_pavadinimas, $f_lygis, $f_aprasas, $f_laikas, $f_kaina, $f_vietu_sk);

		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows==1){
			echo 'Kursas pridetas';
			
			mysqli_stmt_close($stmt);
			
			mysql_close($dbc);
			
		} else {
			echo 'Klaida pridedant';
			echo mysqli_error();
			mysqli_stmt_close($stmt);
			
			mysql_close($dbc);
		}
	} else {
		echo 'Neuzpildyti laukai:';
		foreach($data_missing as $missing){
			echo "$missing<br />";
		}
}
?>