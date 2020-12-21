<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="style.css?=">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body class="tekstas fonas tarpasVirsuje">
 <div class="loginForma perViduri centras">
 <form method="post">
 <h2>Registracija</h2>
 <div>
	<div class="kaireje tarpasApacioje">
	<text>Vartotojas: <br /></text>
	</div>
	<div class="tarpasApacioje">
	<input class="perVisaIlgi" type="text" name="vartotojas" placeholder="Įveskite norimą vartotojo vardą" />
	</div>
 </div>
 <div>
	<div class="kaireje tarpasApacioje">
	<text>Slaptazodis: <br /></text>
	</div>
	<div class="tarpasApacioje">
	<input class="perVisaIlgi" type="text" name="slaptazodis" placeholder="Įveskite savo slaptažodį" />
	</div>
 </div>
 <p><input class="button1 perVisaIlgi tarpasApacioje" type="submit" name="submit" value="Registruotis" /></p>
<a href="prisijungimas.php">Atgal</a></form>

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
	require_once('./include/mysql_connect.php');
		$querryCheck = "SELECT * FROM paskyros WHERE role='vartotojas' AND vartotojas='$vartotojas'";
		
		$responseCheck = @mysqli_query($dbc, $querryCheck);
		$userCheck=mysqli_affected_rows($dbc);
		if($userCheck!=0){
		echo '<div class="klaida">';
		echo '<text>Toks vartotojas jau yra</text>';
		echo '</div>';
		} else {
		$query = "INSERT INTO paskyros (id, vartotojas, slaptazodis, role) VALUES (NULL, ?, ?, 'vartotojas')";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "ss", $vartotojas, $slaptazodis);

		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows==1){
			echo '<div class="sekmingaZinute">';
			echo 'Sėkmingai užsiregistravote';
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
</html>