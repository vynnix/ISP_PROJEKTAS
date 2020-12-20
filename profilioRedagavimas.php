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
        <h1>Jūsų profilis</h1>
		<div class="w3-container w3-red">
        <p class="lead">Informacija apie profilį</p>
      </div>
	  </div>
	
	<div class="container">
  <?php
      require_once('./include/mysql_connect.php');

      $query = "Select * from profilis WHERE vartotojo_id=".$_SESSION["id"];

      $response=mysqli_query($dbc, $query);
      if($response){  
    $row=mysqli_fetch_array($response);
    echo '<form method="post">
    <p>Vardas: <input name="vardas" type="text" value="'.$row['vardas'].'" /></p>
    <p>Pavarde: <input name="pavarde" type="text" value="'.$row['pavarde'].'"/></p>
    <p>E. Paštas: <input name="email" type="email" value="'.$row['epastas'].'"/></p>
    <p>Gimimo data: '.$row['gimimo_data'].'</p>
    <p> Lytis: '.$row['lytis'].'</p>
    <p>Telefonas: <input name="telefonas" type="text" value="'.$row['telefonas'].'"/></p>
    <p><input class="button2" type="submit" name="submit" onClick=profilioRedagavimas() value="Išsaugoti" /></p>
    </form>';
    if(isset($_POST['submit'])){
	
      $data_missing = array();
      
      if(empty($_POST['vardas'])){
        $data_missing[] = 'vardas';
      } else {
        $vardas= trim($_POST['vardas']);
      }
      if(empty($_POST['pavarde'])){
        $data_missing[] = 'pavarde';
      } else {
        $pavarde= trim($_POST['pavarde']);
      }
      if(empty($_POST['email'])){
        $data_missing[] = 'email';
      } else {
        $email= trim($_POST['email']);
      }
      if(empty($_POST['telefonas'])){
        $data_missing[] = 'telefonas skaicius';
      } else {
        $telefonas= trim($_POST['telefonas']);
      }
      
      if(empty($data_missing)){
          
      require_once('./include/mysql_connect.php');
        
        $query = "UPDATE profilis SET vardas='".$vardas."', pavarde='".$pavarde."', epastas='".$email."', telefonas='".$telefonas."'
        WHERE vartotojo_id=".$_SESSION["id"];
        echo ''.$query.'';
        $results=mysqli_query($dbc, $query);
        $affected_rows = mysqli_affected_rows($dbc);
        
        if($affected_rows>=1){
          echo "<script>
          alert('Profilis atnaujintas');
    </script>";
echo("<script>window.location = 'profilis.php';</script>");
        } else {
          echo "<script>
          alert('Profilis atnaujintas');
    </script>";
echo("<script>window.location = 'profilis.php';</script>");
        }
      } else {
        echo '<div class="klaida">';
        echo '<text>Neuzpildyti laukai:</text><br/>';
        foreach($data_missing as $missing){
          echo "<text>*$missing</text><br/>";
        }
        echo '</div>';
      }
    }
    } else {
      echo "<script>
                alert('Nepavyko gauti profilio');
          </script>";
          header("Location: profilis.php");
    }
  ?>
  
		</div>
	  </div>
	
  

</body>
</html>