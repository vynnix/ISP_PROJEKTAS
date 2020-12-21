<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>GYM</title>
</head>
<body>
<?php include('./include/navbar.php');
  require_once('./include/mysql_connect.php');
?>
      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<center><h1>Įvykio sukūrimas</h1></center>
		</div>
		<script>
        function ivykioSukurimoPatvirtinimas() {
        alert("Įvykis sukurtas ");
        MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		</div>
	  </div>
	  </div>
	<center>
    <form method='post' action=''> 
    <b>Pavadinimas</b><br>
    <input class="form-control" name='pavadinimas' type='text' required><br>
    <b>Diena</b><br>
<?php

        $sql = "SELECT data_id, pavadinimas FROM datos";
        $result = mysqli_query($dbc,$sql);

        echo "<select class=\"form-control\" name='data_id'>";
        while ($row = mysqli_fetch_array($result)) {

          echo "<option value='" . $row['data_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select><br>";
      echo "<b>Laikas</b><br>";


      $sql = "SELECT laikas_id, pavadinimas FROM laikai";
        $result = mysqli_query($dbc,$sql);

        echo "<select class=\"form-control\" name='laikas_id'>";
        while ($row = mysqli_fetch_array($result)) {

          echo "<option value='" . $row['laikas_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select><br>";
      echo "<b>Tipas</b><br>";

      $sql = "SELECT tipas_id, pavadinimas FROM tipai";
        $result = mysqli_query($dbc,$sql);

        echo "<select class=\"form-control\" name='tipas_id'>";
        while ($row = mysqli_fetch_array($result)) {

          echo "<option value='" . $row['tipas_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select><br>";
      
      
      
        


?>
<b>Aprašymas</b><br>
<textarea class="form-control" name='aprasymas'>Įvykio aprašymas...</textarea><br>
<input type='submit' class="btn btn-primary" name='ivykio_sukurimas' value='Patvirtinti',  onclick="return confirm('Ar tikrai norite sukurti šitą įvykį?')">
</form>
</center>

<?php
if(isset($_POST['ivykio_sukurimas'])){

  $pavadinimas = $_POST['pavadinimas'];
  $data_fk = $_POST['data_id'];
  $laikas_fk = $_POST['laikas_id'];
  $tipas_fk = $_POST['tipas_id'];
  $aprasymas = $_POST['aprasymas'];

  $sql = "INSERT INTO ivykiai (pavadinimas, data_fk, laikas_fk, tipas_fk, aprasymas) VALUES ('$pavadinimas', $data_fk, $laikas_fk, $tipas_fk, '$aprasymas')";
  mysqli_query($dbc,$sql);
  echo "<script>alert('Įvykis sėkmingai sukurtas!')</script>";

}


?>
    </div> <!-- /container -->
  

</body>
</html>