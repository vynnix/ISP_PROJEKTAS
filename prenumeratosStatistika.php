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
 


        echo'</table>';
        $max = "SELECT MAX(E) as yep
        FROM 
        (SELECT prenumeratos.pavadinimas, count(*) as E
        FROM prenumeratu_uzsakymai
            INNER JOIN prenumeratos
            ON prenumeratu_uzsakymai.prenumeratos_id=prenumeratos.id
            GROUP BY prenumeratos.pavadinimas) as T
        ";
 $maxres=mysqli_query($dbc,$max);
 while($row2 = mysqli_fetch_assoc($maxres)){
 echo($row2['yep']);
 }
   $sql="SELECT prenumeratos.pavadinimas,prenumeratos.kaina,prenumeratos_id, count(*)
    FROM prenumeratu_uzsakymai
     INNER JOIN prenumeratos
      ON prenumeratu_uzsakymai.prenumeratos_id=prenumeratos.id
       GROUP BY prenumeratos.pavadinimas,prenumeratos.kaina,prenumeratos.id";
   $results=mysqli_query($dbc,$sql);
   echo '<h1>Prenumeratu ataskaita</h1>';
   echo '<table class="table table-striped table-bordered table-hover">
    <tr>
      <th scope="col">Pavadinimas</th>
      <th scope="col">Uzsakymu skaicius</th>
      <th scope="col">Kaina</th>
      <th scope="col">Pelnas</th>
    </tr>
	</thead>';
   while($row = mysqli_fetch_assoc($results)){

            echo strtoupper("<tr>
            <td>" . $row['pavadinimas'] . "</td>
            <td>" . $row['count(*)'] . "</td>
            <td>" . $row['kaina'] . "€</td>
            <td>" . $row['kaina']*$row['count(*)'] . "€</td>
            <td>" . $row['prenumeratos_id'] . "</td>
            </tr>"); 
            if($row['count(*)'] == 12){
            $sql3="UPDATE prenumeratos
            SET prenumeratos.Busena = 1";
            mysqli_query($dbc,$sql3);
            echo("DONE");
            }
            
        }
        
         
   
 
?>
</body>
</html>