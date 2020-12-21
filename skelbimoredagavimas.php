<?php

require_once('./include/mysql_connect.php');

$id = $_GET['id'];

$sql="SELECT * FROM skelbimas WHERE id=$id";
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
          <a class="navbar-brand" href="pagrindinis.php">BELEKOKS GYMAS</a>
        </div>
      </div>

      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Skelbimo redagavimas</h1>
		</div>
    <div class ="container" style="width: 200px" >
		<form method='post'>
		
			<label for="pavadinimas"> Pavadinimas</label><br>
		<input name = "pavadinimas" type="text" value="<?php echo $row['pavadinimas'];?>" /><br><br>
    <label for="turinys"> Turinys</label><br>
    <textarea class="form-control" rows="4" name='turinys' id="turinys" ><?php echo $row['turinys'];?> </textarea>
		<button type="submit" name='submit'onclick=uzsakymoPatvirtinimas() class="btn btn-primary">Atnaujinti</button>
		</form>
		</div>
		<script>
        function uzsakymoPatvirtinimas() {
        alert("Skelbimas redaguotas");
        }
        </script>
		</div>
	  </div>
	  </div>
	   <?php
     if(isset($_POST['submit'])){


			   $Pavadinimas = $_POST['pavadinimas'];
			   $Turinys =$_POST['turinys'];

			  $sql = "UPDATE skelbimas
			          SET pavadinimas = '".$Pavadinimas."',
                data = NOW(),
					  turinys = '".$Turinys."'
           WHERE id = $id";
           mysqli_query($dbc,$sql);
           echo "<script> window.opener.location.reload();
      window.close();</script>";
    }
    ?>
  

</body>
</html>