<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="../style.css?=">
 </head>
 <body class="tekstas fonas tarpasVirsuje">
 <h1>Pasirinkite lektorių</h1>
 <?php
	require_once('./mysql_connect.php');
	$kurso_id = $_GET['kurso_id'];
 $querry = "SELECT * FROM paskyros WHERE role='lektorius'";
 
 $response = @mysqli_query($dbc, $querry);
 
 if($response){
	 
	 echo '
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
			echo '<form action="priskirtiLektoriu.php?kurso_id='.$kurso_id.'&lektoriaus_id='.$row['id'].'" method="post">
		 <input class="button2" type="submit" name="uzsiregistravimas" value="Priskirti" onclick="return confirm(\'Ar tikrai norite priskirti ši lektorių?\')" />
		 </form></div></div></td></td>';
		 
	 }
 }
	 else {
		 echo "Nepavyko gauti arba nėra lektorių";
		 echo mysqli_error($dbc);
	 }
 ?>
 </body>
 </html>