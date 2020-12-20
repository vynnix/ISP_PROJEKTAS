<?php
require_once('./include/mysql_connect.php');
$sql = "SELECT * FROM paskyros";
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
       <button type="button"  onClick="MyWindow=window.open('klientosalinimas.php','MyWindow','width=800,height=600'); return false;"class="btn btn-danger">Skelbimo sukūrimas</button>
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
		$pavadinimas=$row['vartotojas']; 
	?>
  <div class="col-sm-4">
    <div class="card border-dark mb-3" style="max-width: 14rem; min-height: 20rem ">
    <div class= "card=header"> <?php
			      echo "<center><h5 class=\"card-title\">$pavadinimas</h5></center>";    
		    ?> </div>
    <div class="card-body">
    <p class="card-text">
		    <?php
	      	$vartotojas=$row['vartotojas']; 	
      		$role = $row['role'];
				echo $vartotojas;
				echo "<br></br>";
				echo $role;
		  	?>
    </p>
    <ul class="list-group list-group-flush">
    </ul>
	

	<?php
  if(isset($_SESSION["role"])){
  if ($_SESSION["role"] == "admin")
  { echo "<a href=\"veiksmai/klientosalinimas.php?id=".$row['id']."\" class=\"btn btn-primary\" onclick = klientosalinimas()>Pašalinti klientą</a>";}}
  if(isset($_SESSION["role"])){
	if ($_SESSION["role"] == "admin")
	{echo "<a href=\"/ISP_/klientoprenumeratos.php?id=".$row['id']."\" class=\"btn btn-primary\">Peržiūrėti prenumeratas</a>";}}
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