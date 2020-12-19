<?php
require_once('./veiksmai/mysql_connect.php');
$sql = "SELECT * FROM prenumeratos";
$result = mysqli_query($dbc,$sql);



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
      
      <div class="navbar navbar-default">
        <div class="container">
          <a class="navbar-brand" href="#">BELEKOKS GYMAS</a>
          <ul class="nav navbar-nav">
            <li><a href="pagrindinis.php">Pagrindinis</a></li>
            <li class="active"><a href="prenumeratos.php">Prenumeratos</a></li>
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
	<?php
    while($row = mysqli_fetch_assoc($result)) 
	{	 
		$pavadinimas=$row['pavadinimas']; 
		?>
            <div class="card" style="width: 18rem;">
			<?php
			echo "<h5 class=\"card-title\">".$pavadinimas."</h5>";    
			?>
			<div class="card-body">
		<?php
	    
		$kaina=$row['kaina']; 
		$busena = $row['busena'];
		$aprasymas = $row['aprasymas'];

		    echo $kaina."</td><td>";   
			echo $busena."</td><td>"; 
			echo $aprasymas."</td><td>";  
			echo "</tr>";
			?>
			</div>
            </div>
		<?php
      		
	}
 ?>
	  
	  
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