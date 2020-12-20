<?php

require_once('./include/mysql_connect.php');

				if($_POST !=null)
			{
			   $kaina = $_POST['kaina'];
			   $stazasnuo =$_POST['stazasnuo'];
					$stazasiki =$_POST['stazasiki'];
			   $ivykiainuo = $_POST['ivykiainuo'];
					$ivykiaiiki = $_POST['ivykiaiiki'];
				$galianuo = $_POST['galianuo'];
					$galiaiki = $_POST['galiaiki'];
			}

?>
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
<?php 
include('./include/navbar.php'); 

$sql =  "SELECT * FROM paslaugos";
			$result = mysqli_query($dbc,$sql);

			/*while($row = $result->fetch_assoc()) 
			{
			
				echo strtoupper("<tr>
        <td>" . $row['pavadinimas'] . "</td>
        <td>" . $row['kaina'] . "</td>
      </tr>"); 
            }
		echo'</table>';*/

		while($row = mysqli_fetch_assoc($result)) 
	{	 
		$pavadinimas=$row['pavadinimas']; 
		?>
            <div class="card border-dark" style="width: 18rem;">
			<?php
			echo "<h5 class=\"card-title\">$pavadinimas</h5>";    
			?>
			<div class="card-body">
		<?php
	    
		$kaina=$row['kaina']; 

		    echo "Kaina ". $kaina."</td><td>";
			echo "</tr>";
			?>
			</div>
            </div>
		<?php
      		
	}

			$dbc->close();
?>

	  
	 
  

</body>
</html>