<?php
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
<title>GYM</title>
</head>
<body>
<?php
 



   $sql="SELECT prenumeratos.pavadinimas,prenumeratos.kaina, count(*) FROM prenumeratu_uzsakymai INNER JOIN prenumeratos ON prenumeratu_uzsakymai.prenumeratos_id=prenumeratos.id GROUP BY prenumeratos.pavadinimas,prenumeratos.kaina";
   $results=mysqli_query($dbc,$sql);

   while($row = mysqli_fetch_assoc($results)){
          echo($row['pavadinimas']);
          echo(" ");
          echo($row['count(*)']);
          echo(" ");
          echo($row['kaina']);
          echo(" ");
          echo($row['kaina']*$row['count(*)']);
   }
 
?>
</body>
</html>