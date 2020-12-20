<?php
include('./include/navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>GYM</title>
</head>
<body>
<div class="container-fixed">
	  

      <div class="jumbotron text-center">
        <h1>Jūsų profilis</h1>
		<div class="w3-container w3-red">
        <p class="lead">Informacija apie profilį</p>
      </div>
	  </div>
    
	<div class="container">
	<?php

require_once('./include/mysql_connect.php');
    
  
  $query = "SELECT * FROM profilis WHERE id=".$_SESSION["profilio_id"];
  echo "$query";

  $response = @mysqli_query($dbc, $query);
  $affected_rows = mysqli_affected_rows($dbc);
  if($affected_rows==1){
    $row=mysqli_fetch_array($response);
    echo '<p>Vardas: '.$row['vardas'].' </p>
    <p>Pavarde: '.$row['pavarde'].'</p>
    <p>E. Paštas: '.$row['epastas'].'</p>
    <p>Gimimo data: '.$row['gimimo_data'].'</p>
    <p> Lytis: '.$row['lytis'].'</p>
    <p>Telefonas: '.$row['telefonas'].'</p>
    <a href="pasiekimai.php" type="button2" class="btn btn-primary">Pasiekimai</a>
			<a href="profilioRedagavimas.php" type="button2" class="btn btn-primary">Redaguoti</a>
			<a href="pagrindinis.php" type="button2" class="btn btn-primary">Atsijungti</a>
      <br /><br />
      <form action="veiksmai/paskyrosNaikinimas.php?id='.$_SESSION["profilio_id"].'" method="post">
		 <input class="btn btn-primary" type="submit" name="Trinti" value="Trinti" onclick="return confirm(`Ar tikrai norit ištrinti?`);" />
		 </form>
			<br />
			<h2>Užsakytos prenumeratos nutraukimas</h2>
			<a href="profilioPrenumeratos.php" type="button2" class="btn btn-primary">Prenumeratos</a>';
  } else {
    echo "<h1>Profilis nesukurtas</h1>";
    echo '<a href="profilioKurimas.php" type="button2" class="btn btn-primary">Kurti</a>';
  }
  ?>
</body>
</html>