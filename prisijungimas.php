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
	<input class="perVisaIlgi" type="password" name="slaptazodis" placeholder="Įveskite slaptazodį" />
	</div>
 </div>
 <p><input class="button1 perVisaIlgi tarpasApacioje" type="submit" name="submit" value="Prisijungti" /></p>
<a href="Registracija.php">Registracija</a><br />
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
        $query2="SELECT * FROM profilis WHERE vartotojo_id=".$row['id'];
        $results2=mysqli_query($dbc, $query2);
        $affected_rows2 = mysqli_affected_rows($dbc);
        echo "$query2";
        if($affected_rows2==1){
            $row2=mysqli_fetch_array($results2);
            $_SESSION["profilio_id"]=$row2["id"];
        } else {$_SESSION["profilio_id"]="Nera";}

		if ($row['role'] == 'admin'){
            $_SESSION["role"] = $row['role'];
            $_SESSION["id"] = $row['id'];
			header("Location: pagrindinis.php");
		} else if ($row['role'] == 'vartotojas'){
            $_SESSION["role"] = $row['role'];
            $_SESSION["id"] = $row['id'];
			header("Location: pagrindinis.php");
		} else {
			echo "<div class='klaida'>Klaida prisijungiant</div>";
		}
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