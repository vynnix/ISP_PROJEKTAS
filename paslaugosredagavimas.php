<?php

require_once('./include/mysql_connect.php');

$id = $_GET['id'];

$sql="SELECT * FROM paslaugos WHERE id=$id";
$results=mysqli_query($dbc,$sql);

$row=mysqli_fetch_assoc($results);
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
        </div>
      </div>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Paslaugos redagavimas</h1>
		</div>
    <div class ="container" style="width: 200px" >
		<form method='post'>
		
			<label for="Pavadinimas"> Pavadinimas</label><br>
		<input name = "Pavadinimas" type="text" value="<?php echo $row['pavadinimas'];?>" /><br><br>
    <label for="Kaina"> Kaina</label><br>
    <input name = "Kaina" type="number" value="<?php echo $row['kaina'];?>" /><br><br>
    <input type='submit' name='submit' value='Patvirtinti'>
		</form>
				
			</div>
		<div class="w3-container w3-red">
			<button type="button2" onclick=uzsakymoPatvirtinimas() class="btn btn-primary">Irasyti</button>
		</div>
		<script>
        function uzsakymoPatvirtinimas() {
        alert("Paslauga redaguota");
        }
        </script>
		</div>
	  </div>
	  </div>
	


    </div>
    <?php

    if(isset($_POST['submit'])){

			   $Kaina = $_POST['Kaina'];
			   $Pavadinimas =$_POST['Pavadinimas'];

			  $sql = "UPDATE paslaugos
			          SET kaina = '".$Kaina."',
					  pavadinimas = '".$Pavadinimas."'
           WHERE id = $id";
           var_dump($sql);
           mysqli_query($dbc,$sql);
           echo "<script>
          alert('Paslauga redaguota');
    </script>";
echo("<script>window.opener.location.reload(); window.close();</script>");
    }
    ?>
  

</body>
</html>