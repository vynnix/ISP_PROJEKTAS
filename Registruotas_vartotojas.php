<?php
session_start();
?>
<html>
 <head>
  <title>Kursai</title>
  <link rel="stylesheet" type="text/css" href="style.css?v=1.3">
 </head>
 <body class="tekstas fonas">
 <h1 class="antraste sekmingaZinute">Prisijungėte kaip registruotas vartotojas: <?php echo "".$_SESSION['vartotojas']."";?></h1>
 <div class="splitinimas">
 <form method="post">
 <div>
  <label for="lygis">Rodyti kursus pagal lygį:</label>
  <select name="lygis" id="lygis">
    <option value="visi">Visi</option>
    <option value="A1">A1</option>
    <option value="A2">A2</option>
    <option value="B1">B1</option>
    <option value="B2">B2</option>
    <option value="C1">C1</option>
    <option value="C2">C2</option>
  </select>
  <br><br>
  <input class="button1" type="submit" name="submit" value="Rodyti">
</form>
</div>
<div>
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
</div>
</div>
<?php
if (!isset($_POST['lygis'])){
	rodytiVisus();
 } else {
 if(isset($_POST['submit'])){
	 if ($_POST['lygis']=='visi'){
		 rodytiVisus();
	 }
	 else{
	$vartotojo_id = $_SESSION["id"];
		 $lygis=$_POST['lygis'];
		 echo '<text>Pasirinktas lygis: </text><text class="bold">'.$lygis.'</text>';
	require_once('./veiksmai/mysql_connect.php');
	$query = "SELECT * FROM kursai WHERE lygis = '".$_POST['lygis']."' AND vietu_sk > 0";
	$response = @mysqli_query($dbc, $query);
	if($response){
	 
	 echo '<table class="lentele" align="left"
	 cellspacing="5" cellpadding="8">
	 <tr>
	 <th>Kursai</th>
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
		 $row['kaina'] . '</td><td><div class="splitinimas"><div>' .
		 $row['vietu_sk'] . '</div><div>';
		 
		 $kurso_id=$row['id'];
		 $queryCheck = "SELECT * FROM rezervacijos where vartotojo_id=$vartotojo_id AND kurso_id=$kurso_id";
		$show=1;
		$responseCheck = @mysqli_query($dbc, $queryCheck);
		$affected_rows = mysqli_affected_rows($dbc);
		if($affected_rows==1){
			$show=0;
		}
		 
		 if ($show==0){
		 echo '<form action="./veiksmai/atsaukti_rezervacija.php?id='.$row['id'].'" method="post">
		 <input class="button2" type="submit" name="uzsiregistravimas" value="Atsisakyti" />
		 </form>';
		 } else {
		 echo '<form action="./veiksmai/rezervuoti.php?id='.$row['id'].'" method="post">
		 <input class="button1" type="submit" name="uzsiregistravimas" value="Užsirašyti" />
		 </form>';
		 }
		 echo '</div></div></td>';
		 echo '</tr>';
	 }
	 echo '</table>';
	 } else {
		 echo "Nepavyko gauti arba nera duomenu DB";
		 echo mysqli_error($dbc);
	 }
	 mysqli_close($dbc);
 }
 }
 }
 
 
	function rodytiVisus() {
	$vartotojo_id = $_SESSION["id"];
	require_once('./veiksmai/mysql_connect.php');
 
	$query = "SELECT * FROM kursai";
 
	$response = @mysqli_query($dbc, $query);
 
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
		 $row['kaina'] . '</td><td><div class="splitinimas"><div>' .
		 $row['vietu_sk'] . '</div><div>';
		 
		 if ($row['atrakinta']==0){
		 $kurso_id=$row['id'];
		 $queryCheck = "SELECT * FROM rezervacijos where vartotojo_id=$vartotojo_id AND kurso_id=$kurso_id";
		$show=1;
		$responseCheck = @mysqli_query($dbc, $queryCheck);
		$affected_rows = mysqli_affected_rows($dbc);
		if($affected_rows==1){
			$show=0;
		}
		 
		 if ($show==0){
		 echo '<form action="veiksmai/atsaukti_rezervacija.php?id='.$row['id'].'" method="post">
		 <input class="button2" type="submit" name="uzsiregistravimas" value="Atsisakyti" />
		 </form>';
		 } else {
		 echo '<form action="veiksmai/rezervuoti.php?id='.$row['id'].'" method="post">
		 <input class="button1" type="submit" name="uzsiregistravimas" value="Užsirašyti" />
		 </form>';
		 }
		 }
		 else {
			 echo '<text class="raudonai">Užrakinta</text>';
		 }
		 echo '</div></div></td>';
		 echo '</tr>';
	 }
	 echo '</table>';
	 }	 else {
		 echo "Nepavyko gauti arba nera duomenu DB";
		 echo mysqli_error($dbc);
	 }
	 mysqli_close($dbc);
	}
	
?>

 </body>
</html>