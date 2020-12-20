<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>GYM </title>
</head>
<body>
<div class="container-fixed">
      
<?php include('./include/navbar.php');
  require_once('./include/mysql_connect.php');

?>

      
	  <?php

    $sql = "SELECT ivykiai.pavadinimas as pav, datos.pavadinimas as data, laikai.pavadinimas as laikas, tipai.pavadinimas as tipas, vietos, aprasymas FROM ivykiai INNER JOIN datos ON data_fk = datos.data_id INNER JOIN laikai ON laikas_fk = laikai.laikas_id INNER JOIN tipai ON tipas_fk = tipai.tipas_id WHERE ivykio_id = 1";
    var_dump($sql);
    $result = mysqli_query($dbc,$sql);
    $row = mysqli_fetch_array($result);

    echo "Pavadinimas ".$row['pav']."";
    echo "Data ".$row['data']."";
    echo "Laikas ".$row['laikas']."";
    echo "Tipas ".$row['tipas']."";
    echo "Vietos ".$row['vietos']."";
    echo "Aprasymas ".$row['aprasymas']."";


?>

	


    </div> <!-- /container -->
  

</body>
</html>