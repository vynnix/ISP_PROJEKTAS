<?php
require_once('./include/mysql_connect.php');
$sql = "SELECT * FROM profilis";
$result = mysqli_query($dbc,$sql);



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>GYM</title>
</head>
<body>
<?php include('./include/navbar.php'); ?>
<div>
<?php
if(isset($_SESSION["role"])){
  if ($_SESSION["role"] == "admin")
  { ?>
       <button type="button"  onClick="MyWindow=window.open('paskyrusalinimas.php','MyWindow','width=800,height=600'); return false;"class="btn btn-danger">Paskyros</button>
        </div>
        <?php 
  }}
  ?>
<div>
  <div class="container">
  <div class = "row">
	<?php
    while($row = mysqli_fetch_assoc($result)) 
	{	 
		$lytis=$row['lytis']; 
	?>
  <div class="col-sm-4">
    <div class="card border-dark mb-3" style="max-width: 14rem; min-height: 20rem ">
    <div class= "card=header"> <?php
			      echo "<center><h5 class=\"card-title\">$lytis</h5></center>";    
		    ?> </div>
    <div class="card-body">
    <p class="card-text">
		    <?php
	      	$vardas=$row['vardas']; 	
		    $pavarde = $row['pavarde'];
		    $registracijos_data=$row['registracijos_data']; 	
		    $epastas = $row['epastas'];
			$telefonas=$row['telefonas']; 	
			echo $vardas;
			echo "<br></br>";
			echo $pavarde;
			echo "<br></br>";
			echo $registracijos_data;
			echo "<br></br>";
			echo $epastas;
			echo "<br></br>";
			echo $telefonas;
		  	?>
    </p>
    <ul class="list-group list-group-flush">
    </ul>
	

	<?php
  if(isset($_SESSION["role"])){
	if ($_SESSION["role"] == "admin")
	{echo "<a href=\"/ISP_PROJEKTAS/klientoprenumeratos.php?id=".$row['id']."&profilio_id=".$row['id']."\" class=\"btn btn-primary\">Peržiūrėti prenumeratas</a>";}}
	if(isset($_SESSION["role"])){
		if ($_SESSION["role"] == "admin")
		{echo "<a href=\"/ISP_PROJEKTAS/klientopaslaugos.php?id=".$row['id']."&profilio_id=".$row['id']."\" class=\"btn btn-primary\">Peržiūrėti paslaugas</a>";}}
    ?>
  </div>
  </div>
  </div>
	<?php
	}	
 ?>
</div>	
</div>
	  
<script>
		function klientosalinimas() {
    if(confirm("Ar tikrai norite ištrinti skelbimą?")){
    alert("klientas ištrintas");
  }}
</script>
</body>
</html>