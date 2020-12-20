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
<div class="container-fixed">
      
<?php include('./include/navbar.php');
  require_once('./include/mysql_connect.php');
?>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Įvykio redagavimas</h1>
		</div>
		<div class="w3-container w3-red">
			<button type="button2" onclick=ivykioRedagavimoPatvirtinimas() class="btn btn-primary">Atnaujinti</button>
		</div>
		<script>
        function ivykioRedagavimoPatvirtinimas() {
        alert("Įvykis redaguotas ");
        MyWindow=window.open('ivykioPerziura.php','MyWindow','width=600,height=300'); return false;
        }
        </script>
		</div>
	  </div>
	  </div>
	
    
    <form method='post' action=''> 
   
<?php


        $sql = "SELECT ivykiai.pavadinimas as pav, data_fk, datos.pavadinimas as data, laikas_fk, laikai.pavadinimas as laikas, tipas_fk, tipai.pavadinimas as tipas, vietos, aprasymas FROM ivykiai INNER JOIN datos ON data_fk = datos.data_id INNER JOIN laikai ON laikas_fk = laikai.laikas_id INNER JOIN tipai ON tipas_fk = tipai.tipas_id WHERE ivykio_id = ".$_GET['ivykio_id']."";
        $result = mysqli_query($dbc, $sql);
        $row_pav = mysqli_fetch_array($result);
        echo "<input name='pavadinimas' type='text' value = '".$row_pav['pav']."' required>";


        $sql = "SELECT data_id, pavadinimas FROM datos";
        $result = mysqli_query($dbc,$sql);
        echo "<select name='data_id'>";
        echo "<option value=".$row_pav['data_fk']." disabled selected>".$row_pav['data']."</option>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<option value='" . $row['data_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select>";


      $sql = "SELECT laikas_id, pavadinimas FROM laikai";
        $result = mysqli_query($dbc,$sql);
        echo "<select name='laikas_id'>";
        echo "<option value=".$row_pav['laikas_fk']." disabled selected>".$row_pav['laikas']."</option>";
        while ($row = mysqli_fetch_array($result)) {

          echo "<option value='" . $row['laikas_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select>";


      $sql = "SELECT tipas_id, pavadinimas FROM tipai";
        $result = mysqli_query($dbc,$sql);
        echo "<select name='tipas_id'>";
        echo "<option value=".$row_pav['tipas_fk']." disabled selected>".$row_pav['tipas']."</option>";
        while ($row = mysqli_fetch_array($result)) {

          echo "<option value='" . $row['tipas_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select>";
      
      
      
        


?>
<textarea name='aprasymas'><?php echo "".$row_pav['aprasymas'].""; ?></textarea>
<input type='submit' name='ivykio_sukurimas' value='Patvirtinti',  onclick="return confirm('Ar tikrai norite sukurti šitą įvykį?')">
</form>

<?php
if(isset($_POST['ivykio_sukurimas'])){

  $pavadinimas = $_POST['pavadinimas'];
  $data_fk = $_POST['data_id'];
  $laikas_fk = $_POST['laikas_id'];
  $tipas_fk = $_POST['tipas_id'];
  $aprasymas = $_POST['aprasymas'];

  $sql = "UPDATE ivykiai SET pavadinimas = '$pavadinimas', data_fk = $data_fk, laikas_fk = $laikas_fk, tipas_fk = $tipas_fk, aprasymas = '$aprasymas' WHERE ivykio_id = ".$_GET['ivykio_id']."  ";
  var_dump($sql);
  mysqli_query($dbc,$sql);
  echo "<script>alert('Įvykis sėkmingai redaguotas!')</script>";

}


?>














    </div> <!-- /container -->
  

</body>
</html>