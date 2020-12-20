<?php
require_once('./include/mysql_connect.php');
$sql = "SELECT * FROM prenumeratos";
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
  <div class="container">
  <div class = "row">
	<?php
    while($row = mysqli_fetch_assoc($result)) 
	{	 
		$pavadinimas=$row['pavadinimas']; 
	?>
  <div class="col-sm-4">
    <div class="card border-dark" style="width: 18rem;">
    <div class="card-body">
		    <?php
			      echo "<center><h5 class=\"card-title\">$pavadinimas</h5></center>";    
		    ?>
    <p class="card-text">
		    <?php
	      	$kaina=$row['kaina']; 
      		$busena = $row['busena'];
      		$aprasymas = $row['aprasymas'];
			    echo $aprasymas;  
		  	?>
    </p>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo "Kaina: ".$kaina."€";?></li>
    </ul>
    <a href="#" class="btn btn-primary">Redaguoti</a>
    
    <a href="#" class="btn btn-primary" onclick = prenumeratosTrinimas() >Ištrinti</a>
	</div>
  </div>
  </div>
	<?php
	}
 ?>
</div>
</div>
	  
<script>
        function uzsakymoPatvirtinimas() {
        alert("uzsakymas pavykes");
        }
		function prenumeratosTrinimas() {
    if(confirm("Ar tikrai norite istrintiprenumeratą?")){
    alert("Prenumerata istrinta");
  }}
</script>  



</body>
</html>