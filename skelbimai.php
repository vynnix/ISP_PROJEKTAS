<?php
include('./include/navbar.php');
require_once('./include/mysql_connect.php');
$sql = "SELECT * FROM skelbimas";
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
      
     

      <div class="jumbotron text-center">
        <h1>Sporto sale</h1>
        <p class="lead">Sveiki atvyke</p>
        <p><a class="btn btn-large btn-success" href="registracija.php" target="ext">Registracija</a></p>
      </div>
  </div> <!-- /container -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>GYM</title>
</head>
<body>
<div>
<?php
if(isset($_SESSION["role"])){
  if ($_SESSION["role"] == "admin")
  { ?>
       <button type="button"  onClick="MyWindow=window.open('skelbimokurimas.php','MyWindow','width=800,height=600'); return false;"class="btn btn-danger">Skelbimo sukūrimas</button>
        </div>
        <?php 
  }}
  ?>
<div class="row">
	<?php
    while($row = mysqli_fetch_assoc($result)) 
	{	 
		$pavadinimas=$row['pavadinimas']; 
	?>
  <div class="col-sm-9">
  <?php
  echo "<h2 class=\"card-title\">$pavadinimas</h2></center>";    
  ?>
     <div class="col-sm-9">
		    <?php
      		$data = $row['data'];
      		$turinys = $row['turinys'];
        echo "<h5><span class=\"glyphicon glyphicon-time\"> Publikavimo data $data</span></h5>";
        echo "<p>$turinys</p>";
		  	?>
    </p>
    <ul class="list-group list-group-flush">
    </ul>

    <?php if(isset($_SESSION["role"])){
  if ($_SESSION["role"] == "admin")
  { echo "<a href=\"veiksmai/skelbimotrynimas.php?id=".$row['id']."\" class=\"btn btn-primary\" onclick = skelbimoTrinimas()>Trinti skelbimą</a>";}}

  if(isset($_SESSION["role"])){
    if ($_SESSION["role"] == "admin"){
    echo "<button type=\"button\"  onClick=\"MyWindow=window.open('skelbimoredagavimas.php?id=".$row['id']."','MyWindow','width=800,height=600'); return false;\"class=\"btn btn-danger\">Redagavimas</button>";}}
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
        function uzsakymoPatvirtinimas() {
        alert("uzsakymas pavykes");
        }
		function skelbimoTrinimas() {
    if(confirm("Ar tikrai norite ištrinti skelbimą?")){
    alert("Skelbimas ištrintas");
  }}
</script>  



</body>
</html>
</body>
</html>

