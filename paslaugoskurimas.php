
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
        </div>
      </div>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Paslaugos kurimas</h1>
      <form method='post'>
        <th scope="col">Pavadinimas:<input name='pavadinimas' type='text'></th>
        <th scope="col">Kaina:<input name='kaina' type='number'></th>
        <input type='submit' name='paslaugos_sukurimas' value='Iterpti'>
			
		</form>
		</div>
		</div>
	  </div>
	  </div>
	


    </div> <!-- /container -->
  

</body>
</html>

<?php

$lentele = "paslaugos";

require_once('./include/mysql_connect.php');

			if(isset($_POST['paslaugos_sukurimas']))
			{
			   $pavadinimas = $_POST['pavadinimas'];
			   $kaina =$_POST['kaina'];
      
      $sql = "INSERT INTO $lentele (kaina,pavadinimas)
      VALUES ($kaina, '$pavadinimas')";
      mysqli_query($dbc,$sql);
      echo "<script> window.opener.location.reload(); window.close();</script>";
      }
 
?>