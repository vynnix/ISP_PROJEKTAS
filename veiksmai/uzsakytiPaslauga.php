<?php

session_start();

$paslaugos_id = $_GET['id'];
$profilio_id= $_SESSION["profilio_id"];

	require_once('../include/mysql_connect.php');

$query = "INSERT INTO paslaugu_uzsakymai (id, profilio_id, paslaugos_id) VALUES (NULL, $profilio_id, $paslaugos_id)";
$response = @mysqli_query($dbc, $query);
if($response){
	echo "<script>
          alert('Paslauga uzsakyta');
    </script>";
echo("<script>window.location = '../paslaugos.php';</script>");
}
?>