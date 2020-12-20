<?php
require_once('./include/mysql_connect.php');
$sql = "SELECT ivykio_id, ivykiai.pavadinimas as pav, datos.pavadinimas as data, laikai.pavadinimas as laikas, tipai.pavadinimas as tipas, vietos, aprasymas FROM ivykiai INNER JOIN datos ON data_fk = datos.data_id INNER JOIN laikai ON laikas_fk = laikai.laikas_id INNER JOIN tipai ON tipas_fk = tipai.tipas_id";
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
       <button type="button"  onClick="MyWindow=window.open('ivykioSukurimas.php','MyWindow','width=400,height=600'); return false;"class="btn btn-danger">Įvykio sukūrimas</button>
        </div>
  <div class="container">
  <div class = "row">
	<?php
    while($row = mysqli_fetch_assoc($result)) 
	{	 
		$pavadinimas=$row['pav']; 
	?>
  <div class="col-sm-4">
    <div class="card border-dark mb-3" style="max-width: 18rem; max-height: 30rem">
    <div class= "card=header"> <?php
			      echo "<center><h5 class=\"card-title\">$pavadinimas</h5></center>";    
		    ?> </div>
    <div class="card-body">
    <p class="card-text">
		    <?php
                $data = $row['data'];
                $laikas = $row['laikas'];
                $tipas = $row['tipas'];
                $aprasymas = $row['aprasymas'];
			    
		  	?>
    </p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo "data: ".$data."";?></li>
    <li class="list-group-item"><?php echo "laikas: ".$laikas."";?></li>
    <li class="list-group-item"><?php echo "tipas: ".$tipas."";?></li>
    <li class="list-group-item"><?php echo "aprasymas: ".$aprasymas."";?></li>
    </ul>
    <?php echo "<button type=\"button\" class=\"btn btn-primary\" onclick = \"MyWindow=window.open('ivykioredagavimas.php?ivykio_id=".$row['ivykio_id']."','MyWindow','width=400,height=600'); return false;\">Redaguoti įvykį</button>";?>
    <br><br>
    
   <?php echo "<a href=\"veiksmai/ivykiotrynimas.php?ivykio_id=".$row['ivykio_id']."\" class=\"btn btn-primary\" onclick =\"return confirm('Are tikrai norite ištrinti šitą įvykį?'\");>Trinti įvykį</a>";?>
    
	</div>
  </div>
  </div>
	<?php
	}
 ?>
</div>
</div>
	  



</body>
</html>