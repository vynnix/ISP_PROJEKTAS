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
        <h1>Pasiekimai</h1>
		<div class="w3-container w3-red">
        <p class="lead">Informacija apie pasiekimus</p>
      </div>
	  </div>
    <div class="container">
    <?php
	require_once('./include/mysql_connect.php');
    
    $sqlcount = "SELECT count(*)
FROM paslaugu_uzsakymai
WHERE profilio_id = ".$_SESSION["profilio_id"];

$countsql = mysqli_query($dbc,$sqlcount);

$rowcount = mysqli_fetch_assoc($countsql);

$count = $rowcount['count(*)'];

$paslauguSkaicius = intval($count);


$sqlcount2 = "SELECT count(*)
FROM prenumeratu_uzsakymai
WHERE profilio_id = ".$_SESSION["profilio_id"];

$countsq2 = mysqli_query($dbc,$sqlcount2);

$rowcount2 = mysqli_fetch_assoc($countsq2);

$count2 = $rowcount2['count(*)'];

$prenumeratuSkaicius = intval($count2); 


$query = "SELECT *
FROM profilis
WHERE id = ".$_SESSION["profilio_id"];

$result = mysqli_query($dbc,$query);

$row = mysqli_fetch_assoc($result);

$registracijosData=$row['registracijos_data'];

$now = new DateTime();

$registracijosMetai=date('Y', strtotime($registracijosData));

$date = date('Y-m-d');
$time=strtotime($date);
$dabartiniaiMetai=date("Y",$time);

$Metai=$dabartiniaiMetai-$registracijosMetai;

echo "<h2>Jūsų paskyrai jau yra ".$Metai." metų.</h2> <br /> <h2>Profilis buvo sukurtas ".$registracijosData."</h2><br /> ";
////////////////////

$achievmentsQuery="SELECT * FROM pasiekimai WHERE uzsakymu_kiekis<=".$paslauguSkaicius." AND prenumeratu_kiekis<=".$prenumeratuSkaicius." AND laiko_reikalavimas<=".$Metai;
$achievmentsResults = mysqli_query($dbc,$achievmentsQuery);
while ($row=mysqli_fetch_array($achievmentsResults))
{
  echo "<p><text style='font-weight: bold;'>Pasiekimas: </text>".$row['pavadinimas']."</p>";
}

?>
    </div>
	  
	
  

</body>
</html>