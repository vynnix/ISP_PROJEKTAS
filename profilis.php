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
            <li><a href="pagrindinis.php">Pagrindinis</a></li>
            <li><a href="prenumeratos.php">Prenumeratos</a></li>
            <li><a href="paslaugos.php">Paslaugos</a></li>
            <li class="divider-vertical"></li>
			<li><a href="ivykiai.php">Ivykiai</a></li>
            <li><a href="tvarkarastis.php">Tvarkaraštis</a></li>
            <li class="active"><a href="profilis.php">Profilis</a></li>
			<li><a href="administratorius.php">Administratorius</a></li>
			<li><a>Login: <input type="text" placeholder="" size=4</input></li></a>
			<li><a>Pass: <input type="text" placeholder="" size=4</input></li></a>
			<li><a href="pagrindinisPrisijunges.php" type="button2" class="btn"><button>Prisijungti</button></a></li>
          </ul>
        </div>
      </div>
	  

      <div class="jumbotron text-center">
        <h1>Jūsų profilis</h1>
		<div class="w3-container w3-red">
        <p class="lead">Informacija apie profilį</p>
      </div>
	  </div>
	
	<div class="container">
       <div>
			<h1>Jūsų profilis</h1>
			
			<p>Vardas: Petras</p>
			<p>Pavarde: Petras</p>
			<p>E. Paštas: Petras@email.com</p>
			<p>Telefonas: 12555445452</p>
			</br>
			<a href="pasiekimai.php" type="button2" class="btn btn-primary">Pasiekimai</a>
			<a href="profilioRedagavimas.php" type="button2" class="btn btn-primary">Redaguoti</a>
			<form action="veiksmai/paskyrosNaikinimas.php?id=2" method="post">
		 <input class="button2" type="submit" name="Trinti" value="Trinti" onclick="return confirm('Are you sure you want to submit this form?');" />
		 </form>
			<a href="pagrindinis.php" type="button2" class="btn btn-primary">Atsijungti</a>
			<br />
			<h2>Užsakytos prenumeratos nutraukimas</h2>
			<a href="profilioPrenumeratos.php" type="button2" class="btn btn-primary">Prenumeratos</a>
		</div>
	  </div>
</body>
</html>