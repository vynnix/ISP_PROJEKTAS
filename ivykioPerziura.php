<?php include('./include/navbar.php');
  require_once('./include/mysql_connect.php');

?>

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
      

      
	  <?php

    $sql = "SELECT ivykiai.pavadinimas as pav, data_fk, laikas_fk, datos.pavadinimas as data, laikai.pavadinimas as laikas, tipai.pavadinimas as tipas, vietos, aprasymas FROM ivykiai INNER JOIN datos ON data_fk = datos.data_id INNER JOIN laikai ON laikas_fk = laikai.laikas_id INNER JOIN tipai ON tipas_fk = tipai.tipas_id WHERE ivykio_id = ".$_GET['ivykio_id']."";
    $result = mysqli_query($dbc,$sql);
    $row = mysqli_fetch_array($result);
    $data = $row['data_fk'];
    $laikas = $row['laikas_fk'];

    echo "<center>";
    echo "<b>Pavadinimas</b><br> ".$row['pav']."";
    echo "<br><b>Data</b><br> ".$row['data']."";
    echo "<br><b>Laikas</b><br> ".$row['laikas']."";
    echo "<br><b>Tipas</b><br> ".$row['tipas']."";
    echo "<br><b>Vietos</b><br> ".$row['vietos']."";
    echo "<br><b>Aprasymas</b><br> ".$row['aprasymas']."";
    




?>
<?php

if(isset($_POST['ivykio_vietos']))
{
  $sql = "SELECT COUNT(*) FROM ivykiai WHERE ivykio_id = ".$_GET['ivykio_id']."";
  $result = mysqli_query($dbc,$sql);
  $row2 = mysqli_fetch_array($result);
  $reiksme = intval($row['vietos']) - intval($row2['COUNT(*)']);
  if($reiksme == 0)
  {
    echo "<br><b>Likusios laisvos vietos</b><br> Laisvų vietų nėra";

  }
  else{

    echo "<br><b>Likusios laisvos vietos</b><br> ".$reiksme."";
  }
 
}

?>

<?php

if(isset($_POST['ivykio_registracija']))
{
  $sql = "SELECT COUNT(*) FROM ivykiai WHERE ivykio_id = ".$_GET['ivykio_id']."";
  $result = mysqli_query($dbc,$sql);
  $row2 = mysqli_fetch_array($result);
  $reiksme = intval($row['vietos']) - intval($row2['COUNT(*)']);
  $profilio_id= $_SESSION["profilio_id"];
  $ivykio_id = $_GET['ivykio_id'];
  if($reiksme < 1)
  {
    
    echo "<script>alert('Laivų vietų nėra!')</script>";
  }
  else{

    $sql = "SELECT * FROM ivykiu_registracija WHERE ivykio_id = $ivykio_id AND profilio_id = $profilio_id";
    $result = mysqli_query($dbc,$sql);
    $row3 = mysqli_fetch_array($result);
    if(isset($row3['ivykio_id']))
    {
      echo "<script>alert('Jau esate prisiregistravę prie šito įvykio!')</script>";
    }
    else {



      $sql = "SELECT ivykiu_registracija.ivykio_id as ivykis, ivykiai.laikas_fk as laikas, ivykiai.data_fk as data FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE ivykiai.laikas_fk = $laikas AND ivykiai.data_fk = $data AND profilio_id = $profilio_id";
      var_dump($sql);
      $result = mysqli_query($dbc,$sql);
      $row4 = mysqli_fetch_array($result);

      if(isset($row4['ivykis']))
      {
        echo "<script>alert('Jau esate prisiregistravę prie kito įvykio šiuo laiko momentu!')</script>";
      }
      else {
        $sql = "INSERT INTO ivykiu_registracija (ivykio_id, profilio_id) VALUES ($ivykio_id, $profilio_id)";
        var_dump($sql);
        mysqli_query($dbc,$sql);
      }

  
    }
   
  

   
  }
 
}

?>

<br><br>
<form method='post' action=''> 
<input type='submit' class="btn btn-primary" name='ivykio_vietos' value='Likusios vietos'>
</form>
<br>


<?php
      if(isset($_SESSION["role"])){
      if ($_SESSION["role"] == "vartotojas")
      {
        ?>
      <form method='post' action=''> 
<input type='submit' class="btn btn-primary" name='ivykio_registracija' value='Registruotis į įvykį'>
</form>
      <?php }} ?>
      <?php
if(isset($_SESSION['role'])){
if($_SESSION["role"] == "admin"){
    echo "<button type=\"button\" class=\"btn btn-primary\" onclick = \"MyWindow=window.open('ivykioredagavimas.php?ivykio_id=".$_GET['ivykio_id']."','MyWindow','width=400,height=600'); return false;\">Redaguoti įvykį</button>";
    echo "<br><br>";
    echo "<a href=\"veiksmai/ivykiotrynimas.php?ivykio_id=".$_GET['ivykio_id']."\" class=\"btn btn-primary\" onclick =\"return confirm('Are tikrai norite ištrinti šitą įvykį?'\");>Trinti įvykį</a>";
    }}?>
</center>



	


    </div> <!-- /container -->
  

</body>
</html>