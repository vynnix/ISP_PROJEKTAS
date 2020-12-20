
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
<div class="container-fixed">
      
      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-brand" >BELEKOKS GYMAS</div>
        </div>
      </div>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Prenumeratos kurimas</h1>
      <form method='post'>
        <div class = "form-group">
        <label for="pavadinimas">Pavadinimas</label>
        <input type="text" class="form-control" name='pavadinimas' id="pavadinimas" placeholder="Pavadinimas"> 
        </div>
        <div class = "form-group">
        <label for="kaina">Kaina</label>
        <input type="number" class="form-control" name='kaina' id="kaina" placeholder="Kaina" min = 0> 
        </div>
        <div class = "form-group">
        <label for="aprasymas">Aprasymas</label>
        <textarea class="form-control" name='aprasymas' id="aprasymas">  </textarea>
        </div>
        <input type='submit' onclick = uzsakymoPatvirtinimas() class="btn btn-primary" name='prenumeratos_sukurimas' value='Iterpti'>
			
		</form>
		</div>
		</div>
	  </div>
	  </div>
	


    </div> <!-- /container -->
  

</body>
</html>

<?php

$lentele = "prenumeratos";

require_once('./include/mysql_connect.php');

			if(isset($_POST['prenumeratos_sukurimas']))
			{
			   $pavadinimas = $_POST['pavadinimas'];
         $kaina =$_POST['kaina'];
         $aprasymas =$_POST['aprasymas'];
      
      $sql = "INSERT INTO $lentele (pavadinimas,kaina,aprasymas)
      VALUES ('$pavadinimas',$kaina,'$aprasymas')";
      mysqli_query($dbc,$sql);
      echo "<script> window.opener.location.reload();
      window.close();</script>";
      }

?>
<script>
        function uzsakymoPatvirtinimas() {
        alert("uzsakymas pavykes");
        }
</script>