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
<?php include('navbar.php');
  require_once('./veiksmai/mysql_connect.php');
?>
      
	  
	  <div class="container">
      <div class="row">
	  
	   <div class="col-sm-6">
       <div class="w3-container w3-teal">
			<h1>Įvykio sukūrimas</h1>
		</div>
		<div class="w3-container w3-red">
			<button type="button2" onclick=ivykioSukurimoPatvirtinimas() class="btn btn-primary">Sukurti</button>
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
	
    <form method='post' action=''> 
<?php

        $sql = "SELECT data_id, pavadinimas FROM datos";
        $result = mysqli_query($dbc,$sql);

        echo "<select name='data_id'>";
        while ($row = mysqli_fetch_array($result)) {

          echo "<option value='" . $row['data_id'] ."'>" . $row['pavadinimas'] ."</option>";


      }
      echo "</select>";
      
        


?>
</form>
    </div> <!-- /container -->
  

</body>
</html>