<?php
include('./include/navbar.php');
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
        <h1>Prenumeratos</h1>
	  </div>
	
	<div class="container">
       <div>
			<h1>Užsakytos prenumeratos</h1>
      <?php
      
require_once('./include/mysql_connect.php');
      $query = "SELECT * from prenumeratu_uzsakymai WHERE profilio_id=".$_SESSION["profilio_id"];
      $results=mysqli_query($dbc, $query);
      if($results){
          while($row=mysqli_fetch_array($results))
          {
            $query2 = "SELECT * from prenumeratos WHERE id=".$row["prenumeratos_id"];
            $results2=mysqli_query($dbc, $query2);
            if($results){
              while($row2=mysqli_fetch_array($results2)){
                echo "<h2>".$row2['pavadinimas']." kaina ".$row2['kaina'].' € </h2>
                <form action="veiksmai/prenumeratosNaikinimas.php?id='.$row2['id'].'" method="post">
		 <input class="btn btn-primary" type="submit" name="Trinti" value="Atsisakyti" onclick="return confirm(`Ar tikrai norit ištrinti?`);" />
     </form><br />
     ';
              }
            }
          }
      } else {
        echo "<h2>Neturite užsakymų";
      }
      ?>
      </div>
		<script>
		function trynimas() {
    alert("Pavyko sėkmingai");
  }
        </script>
	  </div>
	  
	
  

</body>
</html>