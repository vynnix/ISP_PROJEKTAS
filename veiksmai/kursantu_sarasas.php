<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="../style.css?=">
 </head>
 <body class="tekstas fonas tarpasVirsuje">
 <a href="../Lektorius.php">Atgal</a></form>
 <h1>Į kursą užsirašę vartotojai</h1>
 <?php
	require_once('./mysql_connect.php');
	$kurso_id = $_GET['kurso_id'];
	$kurso_kaina = $_GET['kurso_kaina'];
	$querry = "SELECT paskyros.id ,paskyros.vartotojas FROM rezervacijos INNER JOIN paskyros WHERE rezervacijos.kurso_id=$kurso_id AND rezervacijos.vartotojo_id=paskyros.id";
 
 $response = @mysqli_query($dbc, $querry);
  $row_cnt = $response->num_rows;
 echo "<h2>Kurso kaina: $kurso_kaina</h2>";
 
 if($response){
	 if($row=mysqli_fetch_array($response)){
		 
	 echo '
	 <table class="lentele" align="left"
	 cellspacing="5" cellpadding="8">
	 <tr>
	 <th>ID</th>
	 <th>Vartotojas</th>
	 </tr>';
	 echo '<tr><td align="left">' .
			$row['id'] . '</td><td align="left">'.
			$row['vartotojas'].'</td></tr>';
	 while ($row=mysqli_fetch_array($response)){
			echo '<tr><td align="left">' .
			$row['id'] . '</td><td align="left">'.
			$row['vartotojas'].'</td></tr>';
	 }
	 echo '</table>';
 }else {echo '<h2 style="color:red;" >Nėra kursantų</h2>';}}
	 else {
		 echo "Nepavyko gauti arba nėra lektorių";
		 echo mysqli_error($dbc);
	 }
	 $pelnas=$row_cnt*$kurso_kaina;
	 echo "<h2>Pelnas: $pelnas</h2>";
 ?>
 </body>
 </html>