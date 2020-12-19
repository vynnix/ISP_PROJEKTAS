<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="style.css?=1.21">
 </head>
 <body class="tekstas fonas">
 


 <h1 class="antraste sekmingaZinute">Prisijungėte kaip administratorius</h1>
  <div class="splitinimas">
  <div>
 <?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['pavadinimas'])){
		$data_missing[] = 'pavadinimas';
	} else {
		$pavadinimas= trim($_POST['pavadinimas']);
	}
	if(empty($_POST['lygis'])){
		$data_missing[] = 'lygis';
	} else {
		$f_lygis= trim($_POST['lygis']);
	}
	if(empty($_POST['aprasas'])){
		$data_missing[] = 'aprasas';
	} else {
		$f_aprasas= trim($_POST['aprasas']);
	}
	if(empty($_POST['laikas'])){
		$data_missing[] = 'laikas';
	} else {
		$f_laikas= trim($_POST['laikas']);
	}
	if(empty($_POST['kaina'])){
		$data_missing[] = 'kaina';
	} else {
		$f_kaina= trim($_POST['kaina']);
	}
	if(empty($_POST['vietu_sk'])){
		$data_missing[] = 'vietu skaicius';
	} else {
		$f_vietu_sk= trim($_POST['vietu_sk']);
	}
	
	if(empty($data_missing)){
		if ($f_kaina<0){
			echo '<div class="klaida">';
		echo '<text>Kaina negali būti neigiama</text>';
		echo '</div>';
		}
		if ($f_vietu_sk<0){
			echo '<div class="klaida">';
		echo '<text>Vietų skaičius negali būti neigiamas</text>';
		echo '</div>';
		}
		
		if ($f_kaina>=0 && $f_vietu_sk>=0){
			
	require_once('./veiksmai/mysql_connect.php');
		
		$query = "INSERT INTO kursai (id, pavadinimas, lygis, aprasas, laikas, kaina, vietu_sk) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
		
		$stmt = mysqli_prepare($dbc, $query);
		
		mysqli_stmt_bind_param($stmt, "ssssii", $pavadinimas, $f_lygis, $f_aprasas, $f_laikas, $f_kaina, $f_vietu_sk);

		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		
		if($affected_rows==1){
			echo '<div class="sekmingaZinute">';
			echo 'Kursas pridetas';
			echo '</div>';
			mysqli_stmt_close($stmt);
			
		} else {
			echo 'Klaida pridedant';
			echo mysqli_error();
			mysqli_stmt_close($stmt);
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
 <h2>Sukurti kursa</h2>
 
 </div>
 <div>
 <form method="post">
<input class="button2" type="submit" name="atsijungimas" value="Atsijungti" />
</form>
<?php
if(isset($_POST['atsijungimas'])){
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();
	
	header("Location: index.php");
}
?>
 <form method="post">
 </div></div>
<p> Pavadinimas: <input type="text" name="pavadinimas" value="" /></p>
<p> <label for="lygis">Lygis: </label>
  <select name="lygis" id="lygis">
    <option value="A1">A1</option>
    <option value="A2">A2</option>
    <option value="B1">B1</option>
    <option value="B2">B2</option>
    <option value="C1">C1</option>
    <option value="C2">C2</option>
  </select></p>
<p> Aprašas: <textarea name="aprasas" rows="4" cols="50" ></textarea></p>
<p> Laikas: <input type="datetime-local" name="laikas" value="" /></p>
<p> Kaina: <input type="number" name="kaina" value="" /></p>
<p> Vietų skaičius: <input type="number" name="vietu_sk" value="" /></p>
<p><input class="button2" type="submit" name="submit" value="Sukurti" /></p>
</form>
<br />

<div class="splitinimas">
<div>
 <form method="post">
<input class="button3" type="submit" name="rezervuoti" value="Užsirezervavę vartotojai" />
</form>
</div>
<div>
<form method="post">
<input class="button3" type="submit" name="lektoriai" value="Lektoriai" />
</form>
</div>
<div>
<form method="post">
<input class="button3" type="submit" name="kursai" value="Kursai" />
</form>
</div>
</div>
<?php
if(isset($_POST['rezervuoti'])){

require_once('./veiksmai/mysql_connect.php');
 
 
 $querry = "SELECT DISTINCT vartotojo_id FROM rezervacijos";
 
 $response = @mysqli_query($dbc, $querry);
 
 if($response){
	 
	 echo '<p><h2>Užsirezervavę vartotojai</h2></p>
	 <table class="lentele" align="left"
	 cellspacing="5" cellpadding="8">
	 <tr>
	 <th>ID</th>
	 <th>Vartotojas</th>
	 </tr>';
	 
	 while ($row=mysqli_fetch_array($response)){
		  $querry2 = "SELECT * FROM paskyros WHERE id=".$row['vartotojo_id'];
 
		$response2 = @mysqli_query($dbc, $querry2);
		 if($response2){
			$row2=mysqli_fetch_array($response2);
			echo '<tr><td align="left">' .
			$row2['id'] . '</td><td align="left"><div class="splitinimas"><div>' .
			$row2['vartotojas'] . '</div><div>';
			
			$querry3 = "SELECT kurso_id FROM rezervacijos WHERE vartotojo_id=".$row2['id'];
 
			$response3 = @mysqli_query($dbc, $querry3);
 
			if($response3){
				echo '<table class="lentele" align="left"
			cellspacing="5" cellpadding="8">
			<tr>
			<th>Lygis</th>
			<th>Pavadinimas</th>
			</tr>';
			while ($row3=mysqli_fetch_array($response3)){
				$querry4 = "SELECT * FROM kursai WHERE id=".$row3['kurso_id'];
			$response4 = @mysqli_query($dbc, $querry4);
			if($response){
			 while ($row4=mysqli_fetch_array($response4)){
				 echo '<tr><td align="left">' .
				$row4['lygis'] . '</td><td align="left">'.
				$row4['pavadinimas'] . '</td></tr>';
			 }
			 }
			}
			echo '</table>';
		 }
	 }
	 }
	 echo '</table>';
	 }	 else {
		 echo "Nepavyko gauti arba nėra užsiregistravusių vartotojų";
		 echo mysqli_error($dbc);
	 }
}

if(isset($_POST['lektoriai'])){
echo '<a class="button button1" href="veiksmai/Sukurti_lektoriu.php" target="_blank">Sukurti prisijungimą lektoriui</a>';
 
require_once('./veiksmai/mysql_connect.php');

 $querry = "SELECT * FROM paskyros WHERE role='lektorius'";
 
 $response = @mysqli_query($dbc, $querry);
 
 if($response){
	 
	 echo '<p><h2>Lektoriai</h2></p>
	 <table class="lentele" align="left"
	 cellspacing="5" cellpadding="8">
	 <tr>
	 <th>ID</th>
	 <th>Lektorius</th>
	 </tr>';
	 
	 while ($row=mysqli_fetch_array($response)){
			echo '<tr><td align="left">' .
			$row['id'] . '</td><td align="left"><div class="splitinimas"><div>' .
			$row['vartotojas'] . '</div><div>';
	 }
 }
	 else {
		 echo "Nepavyko gauti arba nėra užsiregistravusių vartotojų";
		 echo mysqli_error($dbc);
	 }
}

 if(isset($_POST['kursai'])){
require_once('./veiksmai/mysql_connect.php');
	$query = "SELECT * FROM kursai";
 
	$response = @mysqli_query($dbc, $query);
 
	if($response){
	 
	 echo '<p><h2>Kursai</h2></p>
	 <table class="lentele" align="left"
	 cellspacing="5" cellpadding="8">
	 <tr>
	 <th>Pavadinimas</th>
	 <th>Lygis</th>
	 <th>Aprasas</th>
	 <th>Laikas</th>
	 <th>Kaina</th>
	 <th>Lektorius</th>
	 <th>Vietu skaicius</th>
	 </tr>';
	 while ($row=mysqli_fetch_array($response)){
		 echo '<tr><td align="left">' .
		 $row['pavadinimas'] . '</td><td align="left">' .
		 $row['lygis'] . '</td><td align="left">' .
		 $row['aprasas'] . '</td><td align="left">' .
		 $row['laikas'] . '</td><td align="left">' .
		 $row['kaina'] . '</td><td>';
		 echo '<div class="splitinimas"><div>';
		 if($row['lektorius']==0)
		 {
			echo 'Nepriskirtas';
		 } else {
			 echo $row['lektorius'];
		 }
		 echo'</div><div>';
		 
		 $show=0;
		if ($row['lektorius']==0){
			$show=1;
		}
		 
		 if ($show==0){
		 echo '<form action="veiksmai/priskirti.php?kurso_id='.$row['id'].'" method="post">
		 <input class="button2" type="submit" name="uzsiregistravimas" value="Pakeisti" />
		 </form>';
		 } else {
		 echo '<form action="veiksmai/priskirti.php?kurso_id='.$row['id'].'" method="post">
		 <input class="button1" type="submit" name="uzsiregistravimas" value="Priskirti" />
		 </form>';
		 }
		 //echo '</div></div></td>';
		 echo '</div></td>';
		 echo'<td><div class="splitinimas"><div>' .
		 $row['vietu_sk'] . '</div><div>';
		 
		
		$show=0;
		if ($row['atrakinta']==0){
			$show=1;
		}
		 
		 if ($show==0){
		 echo '<form action="veiksmai/atrakinti.php?id='.$row['id'].'" method="post">
		 <input class="button2" type="submit" name="uzsiregistravimas" value="Atrakinti" onclick="myFunction1()" />
		 </form>';
		 } else {
		 echo '<form action="veiksmai/uzrakinti.php?id='.$row['id'].'" method="post">
		 <input class="button1" type="submit" name="uzsiregistravimas" value="Užrakinti" onclick="myFunction2()"/>
		 </form>';
		 }
		 echo '</div></div></td>';
		 echo '</tr>';
	 }
	 echo '</table>';
	 }	 else {
		 echo "Nepavyko gauti arba nera duomenu DB";
		 echo mysqli_error($dbc);
	 }
	 mysqli_close($dbc);
 }

?>
<script>
function myFunction1() {
  alert("Pavyko atrakinti");
}
function myFunction2() {
  alert("Pavyko užrakinti");
}
</script>
 </body>
</html>