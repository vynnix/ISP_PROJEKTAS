<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="style.css?=">
 </head>
 <body class="tekstas fonas tarpasVirsuje">
 <div class="loginForma perViduri centras">
 <form method="post">
 <h2>Prisijungimas</h2>
 <div>
	<div class="kaireje tarpasApacioje">
	<text>Vartotojas: <br /></text>
	</div>
	<div class="tarpasApacioje">
	<input class="perVisaIlgi" type="text" name="vartotojas" placeholder="Įveskite vartotoją" />
	</div>
 </div>
 <div>
	<div class="kaireje tarpasApacioje">
	<text>Slaptazodis: <br /></text>
	</div>
	<div class="tarpasApacioje">
	<input class="perVisaIlgi" type="text" name="slaptazodis" placeholder="Įveskite slaptazodį" />
	</div>
 </div>
 <p><input class="button1 perVisaIlgi tarpasApacioje" type="submit" name="submit" value="Prisijungti" /></p>
<a href="Registracija.php">Registracija</a><br />
<a href="Neregistruotas_vartotojas.php">Neregistruotas vartotojas</a>
</form>

 <?php

session_start();
	require_once('./include/mysql_connect.php');

if(isset($_POST['submit'])){
	$vartotojas=$_POST['vartotojas'];
	$slaptazodis=$_POST['slaptazodis'];
	$query= "SELECT * FROM paskyros where vartotojas = '" .$vartotojas."' AND slaptazodis = '" .$slaptazodis. "' limit 1";
	$results=mysqli_query($dbc, $query);
	$affected_rows = mysqli_affected_rows($dbc);
	$row=mysqli_fetch_array($results);
	if($affected_rows==1){
		if ($row['role'] == 'admin'){
			header("Location: Administratorius.php");
		} else if ($row['role'] == 'vartotojas'){
			header("Location: Registruotas_vartotojas.php");
		} else if ($row['role'] == 'lektorius'){
			header("Location: Lektorius.php");
		} else {
			echo "<div class='klaida'>Klaida prisijungiant</div>";
		}
		$_SESSION["vartotojas"] = $_POST['vartotojas'];
		$_SESSION["id"] = $row['id'];
	} else {
		echo "<div class='klaida'>Neteisingas vartotojas arba slaptažodis</div>";
	}
	/*
	
	
 <h1>Prisijunkti kaip:</h1>
 <button onClick="document.location.href='Administratorius.php'">Administratorius</button>
 
 <button onClick="document.location.href='Registruotas_vartotojas.php'">Uzsiregistraves vartotojas</button>
 */
}
 ?>
 </div>
 </body>
</html>