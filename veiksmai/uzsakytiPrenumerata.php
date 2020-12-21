<?php

session_start();

$prenumeratos_id = $_GET['id'];
$vartotojo_id= $_SESSION["profilio_id"];

	require_once('../include/mysql_connect.php');

$query = "INSERT INTO prenumeratu_uzsakymai (id, prenumeratos_id, profilio_id) VALUES (NULL, $prenumeratos_id, $vartotojo_id)";
$response = @mysqli_query($dbc, $query);
if($response){
	echo "<script>
          alert('Prenumerata užsakyta!');
    </script>";
echo("<script>window.location = '../prenumeratos.php';</script>");
}
else{
	echo "<script>
          alert('Susikurkite paskyra');
	</script>";
	echo("<script>window.location = '../prenumeratos.php';</script>");
}
?>