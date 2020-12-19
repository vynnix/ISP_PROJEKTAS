<?php
session_start();
?>
<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=2.2">
 </head>
 <body class="tekstas fonas">
 <h1 class="antraste sekmingaZinute">Prisijungete kaip lektorius</h1>
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
 
 
 <h2>Rengiamu mokymu duomenys:</h2>
 <?php
 $vartotojo_id = $_SESSION["id"];
	require_once('./veiksmai/mysql_connect.php');
 
 $date=date("Y-m-d");
 
 echo "Nuo: $date<br/><br/>";
 
 $querry = "SELECT * FROM kursai WHERE laikas>'$date' AND lektorius=$vartotojo_id";
 
 $response = @mysqli_query($dbc, $querry);
 if($response){
	 
	 echo '<table class="lentele" align="left"
	 cellspacing="5" cellpadding="8">
	 <tr>
	 <th>Pavadinimas</th>
	 <th>Lygis</th>
	 <th>Aprasas</th>
	 <th>Laikas</th>
	 <th>Kaina</th>
	 <th>Vietu skaicius</th>
	 </tr>';
	 
	 while ($row=mysqli_fetch_array($response)){
		 
		 echo '<tr><td align="left">' .
		 $row['pavadinimas'] . '</td><td align="left">' .
		 $row['lygis'] . '</td><td align="left">' .
		 $row['aprasas'] . '</td><td align="left">' .
		 $row['laikas'] . '</td><td align="left">' .
		 $row['kaina'] . '</td>
		 <td align="left"><div class="splitinimas"><div>' .
			$row['vietu_sk'] . '</div><div>
			<form action="veiksmai/kursantu_sarasas.php?kurso_id='.$row['id'].'&kurso_kaina='.$row['kaina'].'" method="post">
		 <input class="button2" type="submit" name="uzsiregistravimas" value="kursantų sąrašas" />
		 </form>
			</div></div>';
		 echo '</tr>';
	 }
	 echo '</table>';
	 }	 else {
		 echo "Nepavyko gauti arba nera duomenu DB";
		 echo mysqli_error($dbc);
	 }
	 mysqli_close($dbc);
 ?>
 </body>
</html>