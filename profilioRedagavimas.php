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
        <h1>Jūsų profilis</h1>
		<div class="w3-container w3-red">
        <p class="lead">Informacija apie profilį</p>
      </div>
	  </div>
	
	<div class="container">
       <div>
			<h1>Jūsų profilis</h1>
			
			<p>Vardas: <input type="text" placeholder="Petras"</input></p>
			<p>Pavarde: <input type="text" placeholder="Petras"</input></p>
			<p>E. Paštas: <input type="text" placeholder="Petras@email.com"</input></p>
			<p>Telefonas: <input type="text" placeholder="12555445452"</input></p>
			<button type="button2" onclick=patvirtinimas() class="btn btn-primary">Redaguoti</button>
		</div>
		<script>
		function patvirtinimas() {
    if(confirm("Iššsaugoti?")){
    alert("Pavyko");
  }}
        </script>
	  </div>
	  
	
  

</body>
</html>