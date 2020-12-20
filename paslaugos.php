<?php

require_once('./include/mysql_connect.php');

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



<?php 
include('./include/navbar.php'); 
if(isset($_SESSION["role"])){
	if ($_SESSION["role"] == "admin")
	{
		echo "<button type=\"button\"  onClick=\"MyWindow=window.open('paslaugoskurimas.php','MyWindow','width=600,height=300'); return false;\"class=\"btn btn-danger\">Paslaugos sukūrimas</button>";
		echo "<button type=\"button\"  onClick=\"MyWindow=window.open('paslaugustatistika.php','MyWindow','width=600,height=300'); return false;\"class=\"btn btn-danger\">Paslaugos ataskaita</button>";
	}
}

$sqlcount = "SELECT count(*)
FROM paslaugu_uzsakymai
WHERE profilio_id = ".$_SESSION["profilio_id"];

$countsql = mysqli_query($dbc,$sqlcount);

$rowcount = mysqli_fetch_assoc($countsql);

$count = $rowcount['count(*)'];

$countint = intval($count);

$nuolaida = 100-$countint*10;

if($count > 5 )
{
	$count = 5;
}

?>




<div class= "container">
<div class="row">
<?php
$sql =  "SELECT * FROM paslaugos";
			$result = mysqli_query($dbc,$sql);
			
		while($row = mysqli_fetch_assoc($result)) 
	{	 
		$pavadinimas=$row['pavadinimas']; 
		?>
			
            <div class="card bg-light mb-3" style="width: 18rem;">
			<?php
			echo "<h5 class=\"card-title\">$pavadinimas</h5>";    
			?>
			<div class="card-body">
		<?php
	    
		$kainastring=$row['kaina']; 

			$kaina = intval($kainastring);
			$oldkaina = intval($kainastring);
			$kaina = $kaina/100*$nuolaida;
			$nuolaida2 = $count*10; 
			echo "Kaina: ". $kaina."<td></td>";
			if($count>1)
			{
				echo "</br>";
				echo "Sena kaina: ". $oldkaina."<td></td>";
				echo "</br>";
				echo "Nuolaida: ". $nuolaida2."%<td></td>";
			}
			echo "</br>";
			if(isset($_SESSION["role"])){
				if ($_SESSION["role"] == "admin")
			{
				echo "<a href=\"veiksmai/trintipaslauga.php?id=".$row['id']."\" class=\"btn btn-primary\">Trinti paslauga</a>";	
			}
			}
			
			echo "<br>";
			if(isset($_SESSION["role"])){
				if ($_SESSION["role"] == "admin")
				{
					echo "<button type=\"button\"  onClick=\"MyWindow=window.open('paslaugosredagavimas.php?id=".$row['id']."','MyWindow','width=600,height=300'); return false;\"class=\"btn btn-danger\">Paslaugos redagavimas</button>";	
				}
			}
			if(isset($_SESSION["role"])){
				if ($_SESSION["role"] == "vartotojas")
				{
					echo "<a href=\"veiksmai/uzsakytiPaslauga.php?id=".$row['id']."\" class=\"btn btn-primary\">Uzsakyti paslauga</a>";
				}
			}
			
			
			?>
			</div>
            </div>
			

		<?php
      		
	}
	

			$dbc->close();
?>
</div>
			</div>

	  
	 
  

</body>
</html>