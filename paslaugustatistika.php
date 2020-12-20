<?php
require_once('./include/mysql_connect.php');

    $sql = "SELECT paslaugos.pavadinimas, count(*) FROM paslaugu_uzsakymai INNER JOIN paslaugos ON paslaugu_uzsakymai.paslaugos_id=paslaugos.id GROUP BY paslaugos.pavadinimas";
    $result=mysqli_query($dbc,$sql);

?>

<html>

<body>
<h1>Paslaugu ataskaita</h1>
<?php

echo '<table class="table table-striped table-bordered table-hover">
				<thead style="background-color:#FFFF00">
    <tr>
      <th scope="col">Paslaugos pavadinimas</th>
      <th scope="col">Uzsakymu skaicius</th>
    </tr>
	</thead>';

while($row = $result->fetch_assoc()) 
			{
			
				echo strtoupper("<tr>
        <td>" . $row['pavadinimas'] . "</td>
        <td style=\"text-align:right\">" . $row['count(*)'] . "</td>
      </tr>"); 
            }
        echo'</table>';
?>
</body>
</html>
