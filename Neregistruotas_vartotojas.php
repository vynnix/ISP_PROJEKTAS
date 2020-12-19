<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=2.2">
 </head>
 <body class="tekstas fonas">
 <h1 class="antraste perViduri">Prisijungete kaip neregistruotas vartotojas</h1>
 <a href="index.php">Atgal</a></form>
 <h2>Rengiamu mokymu duomenys:</h2>
 <?php
 
	require_once('./veiksmai/mysql_connect.php');
 
 $date=date("Y-m-d");
 
 echo "Nuo: $date<br/><br/>";
 
 $querry = "SELECT * FROM kursai WHERE laikas>'$date'";
 
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
		 $row['kaina'] . '</td><td align="left">' .
		 $row['vietu_sk'] . '</td>';
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