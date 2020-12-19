<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="../style.css?=">
 </head>
 <body class="tekstas fonas tarpasVirsuje">
 <div class="loginForma perViduri centras">
 <form method="post">
 <h2>Sukurti lektori</h2>
 <div>
	<div class="kaireje tarpasApacioje">
	<text>Vartotojas: <br /></text>
	</div>
	<div class="tarpasApacioje">
	<input class="perVisaIlgi" type="text" name="vartotojas" placeholder="Įveskite lektoriaus vartotojo vardą" />
	</div>
 </div>
 <div>
	<div class="kaireje tarpasApacioje">
	<text>Slaptazodis: <br /></text>
	</div>
	<div class="tarpasApacioje">
	<input class="perVisaIlgi" type="text" name="slaptazodis" placeholder="Įveskite lektoriaus slaptažodį" />
	</div>
 </div>
 <p><input class="button1 perVisaIlgi tarpasApacioje" type="submit" name="submit" value="Kurti" /></p>

<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['vartotojas'])){
		$data_missing[] = 'vartotojas';
	} else {
		$vartotojas= trim($_POST['vartotojas']);
	}
	if(empty($_POST['slaptazodis'])){
		$data_missing[] = 'slaptazodis';
	} else {
		$slaptazodis= trim($_POST['slaptazodis']);
	}
	if(empty($data_missing)){
		require_once('mysql_connect.php');
		
		$querryCheck = "SELECT * FROM paskyros WHERE role='lektorius' AND vartotojas='$vartotojas'";
		
		$responseCheck = @mysqli_query($dbc, $querryCheck);
		$userCheck=mysqli_affected_rows($dbc);
		if($userCheck!=0){
		echo '<div class="klaida">';
		echo '<text>Toks lektorius jau yra</text>';
		echo '</div>';
		} else {
		
		$query = "INSERT INTO paskyros (id, vartotojas, slaptazodis, role) VALUES (NULL, ?, ?, 'lektorius')";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "ss", $vartotojas, $slaptazodis);

		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows==1){
			echo '<div class="sekmingaZinute">';
			echo 'Lektoriaus paskyra sukurta';
			echo '</div>';
			mysqli_stmt_close($stmt);
			
			mysqli_close($dbc);
			
		} else {
			echo 'Klaida sukuriant';
			echo mysqli_error();
			mysqli_stmt_close($stmt);
			
			mysqli_close($dbc);
		}
	}} else {
		echo '<div class="klaida">';
		echo '<text>Neuzpildyti laukai:</text><br/>';
		foreach($data_missing as $missing){
			echo "<text>*$missing</text><br/>";
		}
		echo '</div>';
	}
}

?>
 </div>
 </body>
</html>