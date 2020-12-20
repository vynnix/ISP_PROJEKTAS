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
      
      <div class="navbar navbar-default">
        <div class="container">
          <a class="navbar-brand" href="#">BELEKOKS GYMAS</a>
          <ul class="nav navbar-nav">
            <li class="active"><a href="pagrindinis.php">Pagrindinis</a></li>
            <li><a href="prenumeratos.php">Prenumeratos</a></li>
            <li><a href="paslaugos.php">Paslaugos</a></li>
            <li class="divider-vertical"></li>
			<li><a href="ivykiai.php">Ivykiai</a></li>
            <li><a href="tvarkarastis.php">Tvarkaraštis</a></li>
            <li><a href="profilis.php">Profilis</a></li>
			<li><a href="administratorius.php">Administratorius</a></li>
			<li><a>Login: <input type="text" placeholder="" size=4</input></li></a>
			<li><a>Pass: <input type="text" placeholder="" size=4</input></li></a>
			<li><a href="pagrindinisPrisijunges.php" type="button2" class="btn"><button>Prisijungti</button></a></li>
          </ul>
        </div>
      </div>
	  

      <div class="jumbotron text-center">
        <h1>Jūsų profilio kūrimas</h1>
	  </div>
	
	<div class="container">
  
  <?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['vardas'])){
		$data_missing[] = 'vardas';
	} else {
		$vardas= trim($_POST['vardas']);
	}
	if(empty($_POST['pavarde'])){
		$data_missing[] = 'pavarde';
	} else {
		$pavarde= trim($_POST['pavarde']);
	}
	if(empty($_POST['email'])){
		$data_missing[] = 'email';
	} else {
		$email= trim($_POST['email']);
	}
	if(empty($_POST['date'])){
		$data_missing[] = 'date';
	} else {
		$date = trim($_POST['date']);
	}
	if(empty($_POST['lytis'])){
		$data_missing[] = 'lytis';
	} else {
		$lytis= trim($_POST['lytis']);
	}
	if(empty($_POST['telefonas'])){
		$data_missing[] = 'telefonas skaicius';
	} else {
		$telefonas= trim($_POST['telefonas']);
	}
	
	if(empty($data_missing)){
			
	require_once('./include/mysql_connect.php');
		
		$query = "INSERT INTO profilis (id, vardas, pavarde, registracijos_data, busena, epastas, gimimo_data, lojalumas, lytis, vartotojo_id, telefonas) 
    VALUES (NULL, '".$vardas."', '".$pavarde."', NOW(), 'Aktyvi', '".$email."', '".$date."', '0', '".$lytis."', '2', '".$telefonas."')";

		$results=mysqli_query($dbc, $query);
    $affected_rows = mysqli_affected_rows($dbc);
		
		if($affected_rows==1){
          header("Location: profilioRedagavimas.php");
          echo "<script>
                    alert('Profilis sukurtas');
              </script>";
		} else {
			echo "<script>
                alert('Klaida sukuriant profilį');
          </script>";
		}
	} else {
		echo '<div class="klaida">';
		echo '<text>Neuzpildyti laukai:</text><br/>';
		foreach($data_missing as $missing){
			echo "<text>*$missing</text><br/>";
		}
		echo '</div>';
  }
}

?>
       <div>
			 <form method="post">
			<p>Vardas: <input name="vardas" type="text" placeholder="Petras" /></p>
			<p>Pavarde: <input name="pavarde" type="text" placeholder="Petras"/></p>
			<p>E. Paštas: <input name="email" type="email" placeholder="example@email.com"/></p>
			<p>Gimimo data: <input name="date" type="date" /></p>
      <p><label for="lytis">Lytis: </label>
      <select name="lytis" id="lytis">
      <option value="Vyras">Vyras</option>
      <option value="Moteris">Moteris</option>
      </select></p>
			<p>Telefonas: <input name="telefonas" type="text" placeholder="Numeris"/></p>
      <p><input class="button2" type="submit" name="submit" value="Sukurti" /></p>
      </form>
    </div>
	  </div>
</body>
</html>